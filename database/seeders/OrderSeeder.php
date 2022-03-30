<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $orderStatus = ['pending', 'accepted', 'complete'];
        for ($i = 0; $i < 26; $i++) {
            # code...

            $products = Product::inRandomOrder()->limit(rand(2, 5))->get();
            $totalPrice = 0;

            foreach ($products as $product) {
                $totalPrice += $product->price;
            }

            $order = new Order([
                'user_id' => rand(2, 11),
                'total_price' => $totalPrice,
                'status' => $orderStatus[rand(0, 2)],
                'created_at' => \Carbon\Carbon::now()->subDays(rand(1, 30))
            ]);
            $order->save();
            // DB::table('orders')->insert([
            //     'user_id' => User::all()->random(),
            //     'total_price' => $totalPrice,
            //     'status' => array_rand($orderStatus)
            // ]);

            foreach ($products as $product) {
                $orderProduct = new OrderProduct(['product_id' => $product->id]);
                $order->orderProducts()->save($orderProduct);
            }
        }
        // Order::factory(10)->create();

        // $products = Product::all();

        // Order::all()->each(function ($order) use ($products) {
        //     $order->products()->attach(
        //         $products->random(rand(1, 5))->pluck('id')->toArray()
        //     );
        // });
    }
}
