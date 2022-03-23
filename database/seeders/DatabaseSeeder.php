<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PermissionsSeeder::class);
        $this->call(UsersSeeder::class);

        $this->call(CategoriesSeeder::class);
        // $this->call(SpecsSeeder::class);
        $this->call(ProductsSeeder::class);

        $this->call(OrderSeeder::class);
    }
}
