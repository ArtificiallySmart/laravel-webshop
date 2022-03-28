<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $newOrdersCount = Order::where('status', 'pending')->count();
        return view('admin.dashboard', ['newOrdersCount' => $newOrdersCount]);
    }
}
