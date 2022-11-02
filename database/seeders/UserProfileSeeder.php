<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\UserProfileSeeder');

        DB::table('users_profile')->insert([
            'users_id'        => 1,
            'photograph' => "assets/img/avatars/1.png",
            'address' => $faker->address,
            'phone_number' => $faker->phoneNumber,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);
    }
}
