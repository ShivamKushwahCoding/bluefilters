<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.order.index');
    }

    public function create(Request $request){
        // $category = Category::where('status','1')->get();
        // return view('admin.sub-category.edit',compact('category'));
        return view('admin.order.edit');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'cart_id' => 'required',
            'transaction_id' => 'required',
        ]);
        $order = new Order;
        $order->cart_id = $request->cart_id;
        $order->transaction_id = $request->transaction_id;
        $order->save();
        return redirect()->route('admin.orders')->with('success', 'Order created successfully.');
    }

    public function view(Request $request){
        $order = Order::find($request->id);
        // return view('admin.sub-category');
        return view('admin.order.view',compact('order'));
    }

    public function edit(Request $request){
        $order_data = Order::find($request->id);
        // $category = Category::where('status','1')->get();
        return view('admin.order.edit',compact('order_data'));
    }

    public function update(Request $request){
        $order = Order::find($request->id);
        $order->cart_id = $request->cart_id;
        $order->transaction_id = $request->transaction_id;
        $order->save();
        return redirect()->route('admin.orders')->with('success', 'Order Updated successfully.');
        // return view('admin.sub-category');
    }

    public function destroy(Request $request){
        try {
            Order::where('id', $request->id)->delete();
            return response()->json(['message' => 'Order Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function OrderAjax(Request $request)
    {
        $order = Order::orderBy('id', 'DESC')->get();

        $table = DataTables::of($order)
            ->editColumn('id', function ($order) {
                $id = $order->id;
                return $id;
            })
            ->editColumn('name', function ($order) {
                $name = $order->name;
                return $name;
            })
            // ->editColumn('email', function ($order) {
            //     $email = $order->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($order) {
            //     $otp = $order->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($order) {
            //     $checked = ($order->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $order->new_id . '" data-id="' . $order->new_id . '"   data-status="' . $order->emergency_status . '" />
            //             </div>';
            // })
            ->editColumn('status', function ($order) {
                $checked = ($order->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $order->id . '" data-id="' . $order->id . '"   data-status="' . $order->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($order) {
                $view_route = route('admin.orders.view', $order->id);
                $edit_route = route('admin.orders.edit', $order->id);
                $delete_route = route('admin.orders.destroy', $order->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteorder" data-href="' . $delete_route . '">
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
            $order= Order::find($request->id);
            if ($request->status == '1') {
                $status = '0';
                $message = 'Order Disable Successfully.';
            } else {
                $status = '1';
                $message = 'Order Enable Successfully.';

            }

            Order::where('id', $request->id)->update(['status' => $status]);
           
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
