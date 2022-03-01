<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Address;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'    => 'Bilbo',
            'last_name'     => 'Baggins',
            'email'         => 'BilBag@shire.me',
            'password'      => bcrypt('Onering'),
            'role'          => 3,
            'created_at'    => now(),
            //'created_by'    => 1,
        ]);

        User::factory()
            ->count(20)
            ->has(Address::factory()->count(1))
            ->create();
    }
}
