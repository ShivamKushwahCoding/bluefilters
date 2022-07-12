<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.product.index');
    }

    public function create(Request $request){
        $category = Category::where('status','1')->get();
        return view('admin.product.edit',compact('category'));
    }

    public function view(Request $request){
        $product = Product::find($request->id);
        return view('admin.product.view',compact('product'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            // 'discount' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
        // $user_id = Auth::user()->id;
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // $product->discount = $request->discount;
        
        if ($request->hasFile('image')) {

            $image = null;
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('product/images');
            $image->move($destinationPath, $name);

            $image_name = $name;   
                  
        }
        $product->image = $image_name ?? '';
        // $product->user_id = $user_id;
        $product->status = isset($request->status) ? '1' : '0';
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function edit(Request $request){
        $product =Product::find($request->id);
        $category = Category::where('status','1')->get();
        $sub_category = SubCategory::where('category_id',$product->category_id)->get();
        return view('admin.product.edit',compact('product','category','sub_category'));
    }

    public function update(Request $request){
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // $product->discount = $request->discount;
        
        if ($request->hasFile('image')) {

            $image = null;
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('product/images');
            $image->move($destinationPath, $name);

            $image_name = $name;   
            $product->image = $image_name ?? '';
        }       
        // $product->user_id = $user_id;
        $product->status = isset($request->status) ? '1' : '0';
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->save();
        return redirect()->route('admin.products')->with('success','Product Updated Successfully');
    }

    public function destroy(Request $request){
        try {
            Product::where('id', $request->id)->delete();
            return response()->json(['message' => 'Product Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function productsAjax(Request $request)
    {
        $products = Product::orderBy('id', 'DESC')->get();

        $table = DataTables::of($products)
            ->editColumn('id', function ($products) {
                $id = $products->id;
                return $id;
            })
            ->editColumn('name', function ($products) {
                $name = $products->name;
                return $name;
            })
            // ->editColumn('email', function ($products) {
            //     $email = $products->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($products) {
            //     $otp = $products->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($products) {
            //     $checked = ($products->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $products->new_id . '" data-id="' . $products->new_id . '"   data-status="' . $products->emergency_status . '" />
            //             </div>';
            // })
            ->editColumn('status', function ($products) {
                $checked = ($products->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $products->id . '" data-id="' . $products->id . '"   data-status="' . $products->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($products) {
                $view_route = route('admin.products.view', $products->id);
                $edit_route = route('admin.products.edit', $products->id);
                $delete_route = route('admin.products.destroy', $products->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteproducts" data-href="' . $delete_route . '">
                            <i class="fa fa-trash"></i>
                        </a>';
                return $html;
            })
            ->rawColumns(['status', 'action', 'emergency_status'])
            ->make(true);
        return $table;
    }
    public function statusChange(Request $request)
    {
        try {
            $product= Product::find($request->id);
            if ($request->status == '1') {
                $status = '0';
                $message = 'Product Disable Successfully.';
            } else {
                $status = '1';
                $message = 'Product Enable Successfully.';

            }

            Product::where('id', $request->id)->update(['status' => $status]);
           
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
