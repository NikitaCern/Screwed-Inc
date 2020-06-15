<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
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
          DB::table('orders')->insert([
                'name' => $faker->sentence($nbWords = 3, $variableNbWords = false),
                'description' => $faker->text($maxNbChars = 200),
                'deadline' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'is_done' => $faker->boolean,
            ]);
          }
    }
}
