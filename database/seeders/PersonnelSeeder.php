<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\PersonnelSeeder');

        DB::table('personnels')->insert([
            'name'        => $faker->name,
            'surname'    => $faker->firstName,
            'phone_number' => $faker->phoneNumber,
            'address' => $faker->address,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);
    }
}
