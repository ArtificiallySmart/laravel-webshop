<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Address;
use App\Models\PhoneNumber;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'email'         => 'bilbag@shire.me',
            'password'      => bcrypt('Onering'),
            'is_admin'          => 1,
            'created_at'    => now(),
        ]);

        User::factory(50)
            ->create()
            ->each(function ($user) {
                PhoneNumber::factory()
                    ->create(['user_id' => $user->id]);
                Address::factory()
                    ->create(['user_id' => $user->id]);
            });
    }
}
