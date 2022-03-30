<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //$newOrdersCount = Order::where('status', 'pending')->count();
        $newOrdersCount = Order::where('status', 'pending')->count();
        $lowStockCount = Product::where('stock', '<', 5)->count();
        $thisWeek = Order::where('created_at', '>=', \Carbon\Carbon::now()->subWeek())->sum('total_price');
        $previousWeek = Order::where('created_at', '>=', \Carbon\Carbon::now()->subWeek(2))->sum('total_price') - $thisWeek;


        return view('admin.dashboard', ['newOrdersCount' => $newOrdersCount, 'lowStockCount' => $lowStockCount, 'thisWeek' => $thisWeek, 'previousWeek' => $previousWeek]);
    }
}
