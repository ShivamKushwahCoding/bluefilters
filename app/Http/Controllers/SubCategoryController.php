<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubCategoryController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.sub-category.index');
    }

    public function create(Request $request){
        $category = Category::where('status','1')->get();
        return view('admin.sub-category.edit',compact('category'));
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);
        // $user_id = Auth::user()->id;
        $sub_category = new SubCategory;
        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category_id;
        $sub_category->status = isset($request->status) ? '1' : '0';
        // dd($category);
        $sub_category->save();
        return redirect()->route('admin.sub-category')->with('success', 'Sub Category created successfully.');
    }

    public function view(Request $request){
        $sub_category = SubCategory::find($request->id);
        return view('admin.sub-category.view',compact('sub_category'));
    }

    public function edit(Request $request){
        $sub_category_data = SubCategory::find($request->id);
        $category = Category::where('status','1')->get();
        return view('admin.sub-category.edit',compact('sub_category_data','category'));
    }

    public function update(Request $request){
        $sub_category = SubCategory::find($request->id);
        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category_id;
        $sub_category->status = isset($request->status) ? '1' : '0';
        $sub_category->save();
        return redirect()->route('admin.sub-category')->with('success', 'Sub Category Updated successfully.');
        // return view('admin.sub-category');
    }

    public function destroy(Request $request){
        try {
            SubCategory::where('id', $request->id)->delete();
            return response()->json(['message' => 'Sub Category Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function SubCategoryAjax(Request $request)
    {
        $sub_category = SubCategory::orderBy('id', 'DESC')->get();

        $table = DataTables::of($sub_category)
            ->editColumn('id', function ($sub_category) {
                $id = $sub_category->id;
                return $id;
            })
            ->editColumn('name', function ($sub_category) {
                $name = $sub_category->name;
                return $name;
            })
            // ->editColumn('email', function ($sub_category) {
            //     $email = $sub_category->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($sub_category) {
            //     $otp = $sub_category->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($sub_category) {
            //     $checked = ($sub_category->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $sub_category->new_id . '" data-id="' . $sub_category->new_id . '"   data-status="' . $sub_category->emergency_status . '" />
            //             </div>';
            // })
            ->editColumn('status', function ($sub_category) {
                $checked = ($sub_category->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $sub_category->id . '" data-id="' . $sub_category->id . '"   data-status="' . $sub_category->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($sub_category) {
                $view_route = route('admin.sub-category.view', $sub_category->id);
                $edit_route = route('admin.sub-category.edit', $sub_category->id);
                $delete_route = route('admin.sub-category.destroy', $sub_category->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deletesub_category" data-href="' . $delete_route . '">
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
            $sub_category= SubCategory::find($request->id);
            if ($request->status == '1') {
                $status = '0';
                $message = 'Sub Category Disable Successfully.';
            } else {
                $status = '1';
                $message = 'Sub Category Enable Successfully.';

            }

            SubCategory::where('id', $request->id)->update(['status' => $status]);
           
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
