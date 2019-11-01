<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderAdminController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->paginate(50);

        return view('pages.admin.order_list', ['orders'=> $orders]);
    }

    public function order($id)
    {
        $order = Order::find($id);
        $statuses = Status::all();

        return view('pages.admin.order', ['order'=> $order, 'statuses' => $statuses]);
    }

    public function update(Request $request)
    {
        $order =  Order::find($request->get('order_id'));
        $order->status_id = $request->get('status_id');
        $order->save();

    }
}


