<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TechnologyController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.technology.index');
    }

    public function create(Request $request){
        // $category = Category::where('status','1')->get();
        // return view('admin.sub-category.edit',compact('category'));
        return view('admin.technology.edit');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);
        // $user_id = Auth::user()->id;
        $technology = new Technology;
        $technology->name = $request->name;
        $technology->description = $request->description;
        $technology->status = isset($request->status) ? '1' : '0';
        // dd($category);
        $technology->save();
        return redirect()->route('admin.technology')->with('success', 'Technology created successfully.');
    }

    public function view(Request $request){
        $technology = Technology::find($request->id);
        // return view('admin.sub-category');
        return view('admin.technology.view',compact('technology'));
    }

    public function edit(Request $request){
        $technology_data = Technology::find($request->id);
        // $category = Category::where('status','1')->get();
        return view('admin.technology.edit',compact('technology_data'));
    }

    public function update(Request $request){
        $technology = Technology::find($request->id);
        $technology->name = $request->name;
        $technology->description = $request->description;
        $technology->status = isset($request->status) ? '1' : '0';
        $technology->save();
        return redirect()->route('admin.technology')->with('success', 'Technology Updated successfully.');
        // return view('admin.sub-category');
    }

    public function destroy(Request $request){
        try {
            Technology::where('id', $request->id)->delete();
            return response()->json(['message' => 'Technology Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function TechnologyAjax(Request $request)
    {
        $technology = Technology::orderBy('id', 'DESC')->get();

        $table = DataTables::of($technology)
            ->editColumn('id', function ($technology) {
                $id = $technology->id;
                return $id;
            })
            ->editColumn('name', function ($technology) {
                $name = $technology->name;
                return $name;
            })
            // ->editColumn('email', function ($technology) {
            //     $email = $technology->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($technology) {
            //     $otp = $technology->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($technology) {
            //     $checked = ($technology->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $technology->new_id . '" data-id="' . $technology->new_id . '"   data-status="' . $technology->emergency_status . '" />
            //             </div>';
            // })
            ->editColumn('status', function ($technology) {
                $checked = ($technology->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $technology->id . '" data-id="' . $technology->id . '"   data-status="' . $technology->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($technology) {
                $view_route = route('admin.technology.view', $technology->id);
                $edit_route = route('admin.technology.edit', $technology->id);
                $delete_route = route('admin.technology.destroy', $technology->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deletetechnology" data-href="' . $delete_route . '">
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
            $technology= Technology::find($request->id);
            if ($request->status == '1') {
                $status = '0';
                $message = 'Technology Disable Successfully.';
            } else {
                $status = '1';
                $message = 'Technology Enable Successfully.';

            }

            Technology::where('id', $request->id)->update(['status' => $status]);
           
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
