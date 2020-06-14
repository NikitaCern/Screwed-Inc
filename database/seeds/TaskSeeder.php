<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\User;
use App\Order;
use App\Part;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $users = User::with('roles')->where('roles','auth_user')->pluck('id')->toArray();
       $orders = Order::all()->pluck('id')->toArray();
       $parts = Part::all()->pluck('code')->toArray();

       $faker = Faker::create();
       foreach (range(1, 100) as $index) {
           DB::table('tasks')->insert([
                 'deadline' => $faker->date($format = 'Y-m-d', $max = 'now'),
                 'name' => $faker->sentence($nbWords = 3, $variableNbWords = false),
                 'amount' =>$faker->numberBetween($min = 10, $max = 20),
                 'amount_left' =>$faker->numberBetween($min = 1, $max = 10),
                 'order'=> $faker->unique()->randomElement($orders),
                 'part'=> $faker->unique()->randomElement($parts),
                 'responsible_employee'=>$faker->randomElement($users),
             ]);
           }
     }
}
