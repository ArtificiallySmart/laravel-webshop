<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $newOrdersCount = Order::where('status', 'pending')->count();
        $lowStockCount = Product::where('stock', '<=', 5)->count();
        $ordersThisWeek = Order::where('created_at', '>=', \Carbon\Carbon::now()->subWeek())->sum('total_price');
        $ordersPreviousWeek = Order::where('created_at', '>=', \Carbon\Carbon::now()->subWeek(2))->sum('total_price') - $ordersThisWeek;
        $customersThisWeek = User::where('created_at', '>=', \Carbon\Carbon::now()->subWeek())->count();
        $customersPreviousWeek = User::where('created_at', '>=', \Carbon\Carbon::now()->subWeek(2))->count() - $customersThisWeek;



        return view('admin.dashboard', [
            'newOrdersCount' => $newOrdersCount,
            'lowStockCount' => $lowStockCount,
            'ordersThisWeek' => $ordersThisWeek,
            'ordersPreviousWeek' => $ordersPreviousWeek,
            'customersThisWeek' => $customersThisWeek,
            'customersPreviousWeek' => $customersPreviousWeek,
        ]);
    }
}
