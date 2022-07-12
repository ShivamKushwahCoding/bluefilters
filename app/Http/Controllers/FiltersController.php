<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FiltersController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.filter.index');
    }

    public function create(Request $request){
        return view('admin.filters');
    }

    public function view(Request $request){
        return view('admin.filters');
    }

    public function edit(Request $request){
        return view('admin.filters');
    }

    public function update(Request $request){
        return view('admin.filters');
    }

    public function destroy(Request $request){
        return view('admin.filters');
    }

    public function filtersAjax(Request $request)
    {
        $filters = Filter::orderBy('id', 'DESC')->get();

        $table = DataTables::of($filters)
            ->editColumn('id', function ($filters) {
                $id = $filters->id;
                return $id;
            })
            ->editColumn('name', function ($filters) {
                $name = $filters->name;
                return $name;
            })
            // ->editColumn('email', function ($filters) {
            //     $email = $filters->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($filters) {
            //     $otp = $filters->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($filters) {
            //     $checked = ($filters->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $filters->new_id . '" data-id="' . $filters->new_id . '"   data-status="' . $filters->emergency_status . '" />
            //             </div>';
            // })
            // ->editColumn('status', function ($filters) {
            //     $checked = ($filters->status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $filters->id . '" data-id="' . $filters->id . '"   data-status="' . $filters->status . '" />
            //             </div>';
            // })
            ->editColumn('action', function ($filters) {
                $view_route = route('admin.filters.view', $filters->id);
                $edit_route = route('admin.filters.edit', $filters->id);
                $delete_route = route('admin.filters.destroy', $filters->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deletefilters" data-href="' . $delete_route . '">
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
        // try {
        //     $user= User::find($request->id);
        //     $pwd= str::random(8);
        //     if ($request->status == '1') {
        //         $status = '0';
        //         $message = 'User Disable Successfully.';
        //     } else {
        //         $status = '1';
        //         $message = 'User Enable Successfully.';

        //     }

        //     User::where('id', $request->id)->update(['status' => $status,'password'=>Hash::make($pwd)]);
        //     $messageContent = [
        //         'username' => $user->email,
        //         'passowrd' => $pwd,
        //     ];
        //     Mail::to($user->email)->send(new \App\Mail\LoginMail($messageContent));
        //     Helper::sendSMS($user->mobile_number, $user->otp);
        //     return response()->json(['message' => $message]);
        // } catch (\Exception $e) {
        //     return response()->json(['message' => $e->getMessage()], 500);
        // }
    }
}
