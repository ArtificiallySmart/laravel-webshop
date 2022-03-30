<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $lowStockProducts = Product::where('stock', '<=', 5)->with('category')->get();
        $allProducts = Product::with('category')->paginate(10);
        return view('admin.products', ['allProducts' => $allProducts, 'lowStockProducts' => $lowStockProducts]);
    }
}
