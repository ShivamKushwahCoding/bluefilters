<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PartnerController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.partner.index');
    }

    public function create(Request $request){
        // $category = Category::where('status','1')->get();
        // return view('admin.sub-category.edit',compact('category'));
        return view('admin.partner.edit');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);
        // $user_id = Auth::user()->id;
        $partner = new Partner;
        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->status = isset($request->status) ? '1' : '0';
        // dd($category);
        $partner->save();
        return redirect()->route('admin.partner')->with('success', 'Partner created successfully.');
    }

    public function view(Request $request){
        $partner = Partner::find($request->id);
        // return view('admin.sub-category');
        return view('admin.partner.view',compact('partner'));
    }

    public function edit(Request $request){
        $partner_data = Partner::find($request->id);
        // $category = Category::where('status','1')->get();
        return view('admin.partner.edit',compact('partner_data'));
    }

    public function update(Request $request){
        $partner = Partner::find($request->id);
        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->status = isset($request->status) ? '1' : '0';
        $partner->save();
        return redirect()->route('admin.partner')->with('success', 'Partner Updated successfully.');
        // return view('admin.partner');
    }

    public function destroy(Request $request){
        try {
            Partner::where('id', $request->id)->delete();
            return response()->json(['message' => 'Partner Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function PartnerAjax(Request $request)
    {
        $partner = Partner::orderBy('id', 'DESC')->get();

        $table = DataTables::of($partner)
            ->editColumn('id', function ($partner) {
                $id = $partner->id;
                return $id;
            })
            ->editColumn('name', function ($partner) {
                $name = $partner->name;
                return $name;
            })
            // ->editColumn('email', function ($partner) {
            //     $email = $partner->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($partner) {
            //     $otp = $partner->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($partner) {
            //     $checked = ($partner->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $partner->new_id . '" data-id="' . $partner->new_id . '"   data-status="' . $partner->emergency_status . '" />
            //             </div>';
            // })
            ->editColumn('status', function ($partner) {
                $checked = ($partner->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $partner->id . '" data-id="' . $partner->id . '"   data-status="' . $partner->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($partner) {
                $view_route = route('admin.partner.view', $partner->id);
                $edit_route = route('admin.partner.edit', $partner->id);
                $delete_route = route('admin.partner.destroy', $partner->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deletepartner" data-href="' . $delete_route . '">
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
            $partner= Partner::find($request->id);
            if ($request->status == '1') {
                $status = '0';
                $message = 'Partner Disable Successfully.';
            } else {
                $status = '1';
                $message = 'Partner Enable Successfully.';

            }

            Partner::where('id', $request->id)->update(['status' => $status]);
           
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
