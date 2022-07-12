<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.category.index');
    }

    public function create(Request $request){
        return view('admin.category.edit');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);
        // $user_id = Auth::user()->id;
        $category = new Category;
        $category->name = $request->name;
        $category->status = isset($request->status) ? '1' : '0';
        $category->save();
        return redirect()->route('admin.category')->with('success', 'Category created successfully.');
    }

    public function view(Request $request){
        $category = Category::find($request->id);
        return view('admin.category.view',compact('category'));
    }

    public function edit(Request $request){
        $category_data = Category::find($request->id);
        return view('admin.category.edit',compact('category_data'));
    }

    public function update(Request $request){
        // dd($request);
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->status = isset($request->status) ? '1' : '0';
        $category->save();
        return redirect()->route('admin.category')->with('success', 'Category Updated successfully.');
    }

    public function destroy(Request $request){
        try {
            
            Category::where('id', $request->id)->delete();
           
            return response()->json(['message' => 'Category Deteted Successfully.']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function categoryAjax(Request $request)
    {
        $category = Category::orderBy('id', 'DESC')->get();

        $table = DataTables::of($category)
            ->editColumn('id', function ($category) {
                $id = $category->id;
                return $id;
            })
            ->editColumn('name', function ($category) {
                $name = $category->name;
                return $name;
            })
            ->editColumn('status', function ($category) {
                $checked = ($category->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $category->id . '" data-id="' . $category->id . '"   data-status="' . $category->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($category) {
                $view_route = route('admin.category.view', $category->id);
                $edit_route = route('admin.category.edit', $category->id);
                $delete_route = route('admin.category.destroy', $category->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deletecategory" data-href="' . $delete_route . '">
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
            $category= Category::find($request->id);
            if ($request->status == '1') {
                $status = '0';
                $message = 'Category Disable Successfully.';
            } else {
                $status = '1';
                $message = 'Category Enable Successfully.';

            }

            Category::where('id', $request->id)->update(['status' => $status]);
           
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
