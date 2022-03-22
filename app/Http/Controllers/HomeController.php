<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('layout');
    }

    public function getproducts(Request $request)
    {
        if (!$request->ajax()) {
            return redirect('/');
        }
        $products = Product::with('category')->get();


        echo json_encode([
            "success" => true,
            "products" => $products
        ]);
    }
}
