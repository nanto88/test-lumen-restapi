<?php

use Illuminate\Database\Seeder;

Use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 100; $i++) {
          DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => str_random(15),
            'city' => str_random(10),
            'address' => $faker->address,
            'company' => $faker->company,
            'phone' => $faker->phoneNumber,
            'title' => $faker->title,
            'color' => $faker->colorName
          ]);
        }
    }
}
