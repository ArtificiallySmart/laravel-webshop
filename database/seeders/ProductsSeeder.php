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
                'stock' => 50,
                'category' => 'Male'
            ],
            [
                'name' => 'MartialArts',
                'description' => 'This is the description of the MartialArts item',
                'price' => 24.99,
                'thumbnail' => 'martialarts.jpg',
                'stock' => 50,
                'category' => 'Female'
            ],
            [
                'name' => 'Lotus',
                'description' => 'This is the description of the Lotus item',
                'price' => 25.55,
                'thumbnail' => 'lotus.jpg',
                'stock' => 50,
                'category' => 'Female'
            ],
            [
                'name' => 'KidsSweater',
                'description' => 'This is the description of the KidsSweater item',
                'price' => 30.65,
                'thumbnail' => 'kidsLangeMouwen.jpg',
                'stock' => 50,
                'category' => 'kids'
            ],
            [
                'name' => 'Facemask v1',
                'description' => 'This is the description of the Facemask v1 item',
                'price' => 10.00,
                'thumbnail' => 'mondkapjeSmaller.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Facemask v2',
                'description' => 'This is the description of the Facemask v2 item',
                'price' => 10.00,
                'thumbnail' => 'syntheticMondkapje.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'CoffeeMug',
                'description' => 'This is the description of the CoffeeMug item',
                'price' => 14.99,
                'thumbnail' => 'kopje.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Gymbag',
                'description' => 'This is the description of the Gymbag item',
                'price' => 18.99,
                'thumbnail' => 'sporttas.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Teddybeer',
                'description' => 'This is the description of the Teddybeer item',
                'price' => 18.99,
                'thumbnail' => 'knuffelbeer.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Warrior Flower',
                'description' => 'This is the description of the WarriorFlower item',
                'price' => 18.99,
                'thumbnail' => 'warrior_flower.jpg',
                'stock' => 50,
                "category" => 'Male'
            ],
            [
                'name' => 'Thermos',
                'description' => 'This is the description of the Thermos item',
                'price' => 14.99,
                'thumbnail' => 'thermos.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Dragon',
                'description' => 'This is the description of the Dragon item',
                'price' => 14.99,
                'thumbnail' => 'dragons.jpg',
                'stock' => 50,
                "category" => 'Male'
            ],
            [
                'name' => 'Pillow',
                'description' => 'This is the description of the Pillow item',
                'price' => 12.99,
                'thumbnail' => 'kussen.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Cap',
                'description' => 'This is the description of the Cap item',
                'price' => 16.99,
                'thumbnail' => 'pet.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Mousepad',
                'description' => 'This is the description of the Mousepad item',
                'price' => 16.99,
                'thumbnail' => 'muismat.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
            [
                'name' => 'Messenger bag',
                'description' => 'This is the description of the Messenger bag item',
                'price' => 24.99,
                'thumbnail' => 'schoudertas.jpg',
                'stock' => 50,
                "category" => 'Accessoires'
            ],
        ];

        foreach ($data as $item) {
            $category = DB::table('categories')
                ->where('name', '=', $item['category'])
                ->first();
            $product = Product::create(
                [
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'thumbnail' => $item['thumbnail'],
                    'stock' => $item['stock'],
                ],
            );
            $product->update(['category_id' => $category->id]);
        };

        // $specs = Spec::all();
        // $categories = Category::all();

        // Product::all()->each(function ($product) use ($specs) {
        //     $product->specs()->attach(
        //         $specs->random(rand(1, 5))->pluck('id')->toArray()
        //     );
        // });

        // Product::all()->each(function ($product) use ($categories) {
        //     $product->categories()->attach(
        //         $categories->random(rand(1, 2))->pluck('id')->toArray()
        //     );
        // });
    }
}
