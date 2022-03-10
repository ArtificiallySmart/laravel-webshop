<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Product $product, Request $request)
    {
        if (!$request->ajax()) {
            return view('product');
        }

        echo json_encode(
            [
                'product' => $product
            ]
        );
    }
}
