<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('product');
    }

    public function getProduct(Product $product, Request $request)
    {
        if (!$request->ajax()) {
            return redirect('/');
        }
        echo json_encode(
            [
                'success' => true,
                'product' => $product
            ]
        );
    }
}
