<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Spec;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory(20)->create();
        // $specs = Spec::all();
        $categories = Category::all();

        // Product::all()->each(function ($product) use ($specs) {
        //     $product->specs()->attach(
        //         $specs->random(rand(1, 5))->pluck('id')->toArray()
        //     );
        // });

        Product::all()->each(function ($product) use ($categories) {
            $product->categories()->attach(
                $categories->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
