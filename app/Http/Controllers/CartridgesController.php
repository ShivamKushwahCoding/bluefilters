<?php

namespace App\Http\Controllers;

use App\Models\Cartridge;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CartridgesController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.cartridge.index');
    }

    public function create(Request $request){
        $category = Category::where('status','1')->get();
        return view('admin.cartridge.edit',compact('category'));
    }

    public function view(Request $request){
        $cartridge = Cartridge::find($request->id);
        return view('admin.cartridge.view',compact('cartridge'));
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
        $cartridge = new Cartridge;
        $cartridge->name = $request->name;
        $cartridge->description = $request->description;
        $cartridge->price = $request->price;
        // $product->discount = $request->discount;
        
        if ($request->hasFile('image')) {

            $image = null;
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('product/images');
            $image->move($destinationPath, $name);

            $image_name = $name;   
                  
        }
        $cartridge->image = $image_name ?? '';
        // $cartridge->user_id = $user_id;
        $cartridge->status = isset($request->status) ? '1' : '0';
        $cartridge->category_id = $request->category_id;
        $cartridge->sub_category_id = $request->sub_category_id;
        $cartridge->save();

        return redirect()->route('admin.cartridges')->with('success', 'Cartridge created successfully.');
    }

    public function edit(Request $request){
        $cartridge =Cartridge::find($request->id);
        $category = Category::where('status','1')->get();
        $sub_category = SubCategory::where('status','1')->where('category_id',$cartridge->category_id)->get();
        return view('admin.cartridge.edit',compact('cartridge','category','sub_category'));
    }

    public function update(Request $request){
        $cartridge = Cartridge::find($request->id);
        $cartridge->name = $request->name;
        $cartridge->description = $request->description;
        $cartridge->price = $request->price;
        // $product->discount = $request->discount;
        
        if ($request->hasFile('image')) {

            $image = null;
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('product/images');
            $image->move($destinationPath, $name);

            $image_name = $name;   
            $cartridge->image = $image_name ?? '';
        }       
        // $cartridge->user_id = $user_id;
        $cartridge->status = isset($request->status) ? '1' : '0';
        $cartridge->category_id = $request->category_id;
        $cartridge->sub_category_id = $request->sub_category_id;
        $cartridge->save();
        return redirect()->route('admin.cartridges')->with('success','Cartridge Updated Successfully');
    }

    public function destroy(Request $request){
        try {
            Cartridge::where('id', $request->id)->delete();
            return response()->json(['message' => 'Cartridge Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function cartridgesAjax(Request $request)
    {
        $cartridges = Cartridge::orderBy('id', 'DESC')->get();

        $table = DataTables::of($cartridges)
            ->editColumn('id', function ($cartridges) {
                $id = $cartridges->id;
                return $id;
            })
            ->editColumn('name', function ($cartridges) {
                $name = $cartridges->name;
                return $name;
            })
            // ->editColumn('email', function ($cartridges) {
            //     $email = $cartridges->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($cartridges) {
            //     $otp = $cartridges->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($cartridges) {
            //     $checked = ($cartridges->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $cartridges->new_id . '" data-id="' . $cartridges->new_id . '"   data-status="' . $cartridges->emergency_status . '" />
            //             </div>';
            // })
            ->editColumn('status', function ($cartridges) {
                $checked = ($cartridges->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $cartridges->id . '" data-id="' . $cartridges->id . '"   data-status="' . $cartridges->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($cartridges) {
                $view_route = route('admin.cartridges.view', $cartridges->id);
                $edit_route = route('admin.cartridges.edit', $cartridges->id);
                $delete_route = route('admin.cartridges.destroy', $cartridges->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deletecartridges" data-href="' . $delete_route . '">
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
        {
            try {
                $cartridge= Cartridge::find($request->id);
                if ($request->status == '1') {
                    $status = '0';
                    $message = 'Cartridge Disable Successfully.';
                } else {
                    $status = '1';
                    $message = 'Cartridge Enable Successfully.';
    
                }
    
                Cartridge::where('id', $request->id)->update(['status' => $status]);
               
                return response()->json(['message' => $message]);
            } catch (\Exception $e) {
                return response()->json(['message' => $e->getMessage()], 500);
            }
        }
    }
}
