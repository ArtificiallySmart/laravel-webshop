<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $newOrders = Order::where('status', 'pending')->with('user')->get();
        $allOrders = Order::with('user')->paginate(10);
        return view('admin.orders', ['newOrders' => $newOrders, 'allOrders' => $allOrders]);
    }
    public function order(Order $order)
    {
        $order = Order::with('orderProducts.product', 'user.address', 'user.phoneNumber')->find($order->id);
        return view('admin.orderdetails', ['order' => $order]);
    }

    public function changeOrderStatus(Request $request, Order $order)
    {
        $order->status == 'pending' ? $order->status = 'accepted' : $order->status = 'complete';
        $order->save();
        return back()->with('message', 'Order updated');
    }
}
