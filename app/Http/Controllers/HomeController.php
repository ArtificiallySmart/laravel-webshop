<?php

namespace App\Http\Controllers;

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
        if (!$request->ajax()) {
            return view('layout');
        }
        $newProducts =
            DB::table('products')
            ->orderByDesc('created_at')
            ->limit(4)
            ->get();
        $popularProducts =
            DB::table('products')
            ->inRandomOrder()
            ->limit(4)
            ->get();
        $randomProducts =
            DB::table('products')
            ->inRandomOrder()
            ->limit(4)
            ->get();

        echo json_encode([
            "newProducts" => $newProducts,
            "popularProducts" => $popularProducts,
            "randomProducts" => $randomProducts
        ]);
    }
}
