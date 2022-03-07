<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Order::factory(10)->create();

        $products = Product::all();

        Order::all()->each(function ($order) use ($products) {
            $order->products()->attach(
                $products->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
