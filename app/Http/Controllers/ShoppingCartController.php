<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
    public function getCart()
    {
        echo json_encode([
            "success" => true,
            "cart" => session('cart'),

        ]);
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->thumbnail
            ];
        }
        session()->put('cart', $cart);
        redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function deleteFromCart(Request $request)
    {

        $id = $request->id;
        $amount = $request->amount;

        $cart = session()->get('cart', []);
        $cart[$id]["quantity"] -= $amount;
        if ($cart[$id]["quantity"] <= 0) unset($cart[$id]);

        session()->put('cart', $cart);
        //dd($cart, session()->get('cart', []));
    }
}
