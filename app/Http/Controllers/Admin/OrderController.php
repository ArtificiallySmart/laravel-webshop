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
        return view('admin.orders', ['newOrders' => $newOrders]);
    }
}
