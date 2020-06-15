<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $faker = Faker::create();
       foreach (range(1, 10) as $index) {
           DB::table('parts')->insert([
                 'code' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
                 'name' => $faker->sentence($nbWords = 3, $variableNbWords = false),
                 'description' => $faker->text($maxNbChars = 200)
             ]);
           }
     }
}
