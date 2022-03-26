<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        return view('checkout');
    }

    public function getInfo()
    {

        $user = Auth::user();
        $cart = session()->get('cart', []);

        // echo json_encode([
        //     "success" => true,
        //     "user" => $user,
        //     "address" => $user->address,
        //     "phoneNumber" => $user->phoneNumber,
        //     "cart" => $cart,
        // ]);
        foreach ($cart as $orderItem) {
            echo $orderItem['id'];
        }
    }

    public function postOrder()
    {
        $cart = session()->get('cart', []);
        $id = Auth::id();

        $order = new Order(['user_id' => $id, 'created_by' => $id]);
        $order->save();

        foreach ($cart as $orderItem) {
            $id = $orderItem['id'];
            $amount = $orderItem['quantity'];
            $orderProduct = new OrderProduct(['product_id' => $id, 'amount' => $amount]);
            $order->orderProducts()->save($orderProduct);
            $product = Product::find($id);
            $product->stock -= $amount;
            $product->save();
        }
        session()->put('cart', []);
        return redirect('/')->with('message', 'Order Successful!');
    }
}
