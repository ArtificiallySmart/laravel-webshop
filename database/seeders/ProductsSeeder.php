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
        $data = [
            [
                'name' => 'skeleton',
                'description' => 'This is the description of the skeleton shirt',
                'price' => 19.99,
                'thumbnail' => 'Tshirts.png',
                'stock' => true,
            ],
            [
                'name' => 'MartialArts',
                'description' => 'This is the description of the MartialArts item',
                'price' => 24.99,
                'thumbnail' => 'martialarts.jpg',
                'stock' => true,
            ],
            [
                'name' => 'Lotus',
                'description' => 'This is the description of the Lotus item',
                'price' => 25.55,
                'thumbnail' => 'lotus.jpg',
                'stock' => true,
            ],
            [
                'name' => 'KidsSweater',
                'description' => 'This is the description of the KidsSweater item',
                'price' => 30.65,
                'thumbnail' => 'kidsLangeMouwen.jpg',
                'stock' => true,
            ],
            [
                'name' => 'Facemask v1',
                'description' => 'This is the description of the Facemask v1 item',
                'price' => 10.00,
                'thumbnail' => 'modnkapjeSmaller.jpg',
                'stock' => true,
            ],
            [
                'name' => 'Facemask v2',
                'description' => 'This is the description of the Facemask v2 item',
                'price' => 10.00,
                'thumbnail' => 'syntheticMondkapje,jpg',
                'stock' => true,
            ],
            [
                'name' => 'CoffeeMug',
                'description' => 'This is the description of the CoffeeMug item',
                'price' => 14.99,
                'thumbnail' => 'kopje.jpg',
                'stock' => true,
            ],
            [
                'name' => 'Gymbag',
                'description' => 'This is the description of the Gymbag item',
                'price' => 18.99,
                'thumbnail' => 'sporttas.jpg',
                'stock' => true,
            ],
            [
                'name' => 'Teddybeer',
                'description' => 'This is the description of the Teddybeer item',
                'price' => 18.99,
                'thumbnail' => 'knuffelbeer.jpg',
                'stock' => true,
            ],
            [
                'name' => 'WarriorFlower',
                'description' => 'This is the description of the WarriorFlower item',
                'price' => 18.99,
                'thumbnail' => 'warrior_flower.jpg',
                'stock' => true,
            ],
            [
                'name' => 'Thermos',
                'description' => 'This is the description of the Thermos item',
                'price' => 14.99,
                'thumbnail' => 'thermos.jpg',
                'stock' => true,
            ],
            [
                'name' => 'Dragon',
                'description' => 'This is the description of the Dragon item',
                'price' => 14.99,
                'thumbnail' => 'dragons.jpg',
                'stock' => true,
            ],
        ];

        foreach ($data as $item) {
            Product::create(
                [
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'thumbnail' => $item['thumbnail'],
                    'stock' => $item['stock'],
                ],
            );
        };
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
