<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specs = [
            'colors' => ['black', 'charcoal', 'navy', 'white'],
            'sizes' => ['s', 'm', 'l', 'xl', 'xxl', 'xxxl'],
            'other' => ['cotton', 'polyester']
        ];

        foreach ($specs as $key => $values) {
            foreach ($values as $value) {
                DB::table('specs')->insert([
                    'name'          => $value,
                    'type'          => $key,
                    'created_at'    => now(),
                ]);
            }
        }
    }
}
