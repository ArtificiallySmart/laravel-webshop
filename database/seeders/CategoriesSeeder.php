<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Male',
            'Female',
            'kids',
            'accessoires'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'          => $category,
                'created_at'    => now(),
            ]);
        }
    }
}
