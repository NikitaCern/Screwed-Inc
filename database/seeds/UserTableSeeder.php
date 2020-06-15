<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([ //admin
        'personal_number' => '123456-78910',
        'first_name' => 'Janis',
        'last_name' => 'Berzins',
        'post' => 'CEO',
        'roles' => 'admin',
        'email' => 'JB@email.com',
        'password' => bcrypt('password'),
        'preferred_language' => 'en'
      ]);
      DB::table('users')->insert([ //auth_user
        'personal_number' => '123456-78911',
        'first_name' => 'Peteris',
        'last_name' => 'Klava',
        'post' => 'Employee',
        'roles' => 'auth_user',
        'email' => 'PK@email.com',
        'password' => bcrypt('password'),
        'preferred_language' => 'en'
      ]);
      DB::table('users')->insert([ //auth_user
        'personal_number' => '123456-78914',
        'first_name' => 'Kaspars',
        'last_name' => 'Liepins',
        'post' => 'Employee',
        'roles' => 'auth_user',
        'email' => 'KL@email.com',
        'password' => bcrypt('password'),
        'preferred_language' => 'en'
      ]);
      DB::table('users')->insert([//order_mng
        'personal_number' => '123456-78912',
        'first_name' => 'Jana',
        'last_name' => 'Ozoliņa',
        'post' => 'Order Manager',
        'roles' => 'order_mng',
        'email' => 'JO@email.com',
        'password' => bcrypt('password'),
        'preferred_language' => 'en'
      ]);
      DB::table('users')->insert([//task_distr
        'personal_number' => '123456-78913',
        'first_name' => 'Kristine',
        'last_name' => 'Zarina',
        'post' => 'Task Distributor',
        'roles' => 'task_distr',
        'email' => 'KZ@email.com',
        'password' => bcrypt('password'),
        'preferred_language' => 'en'
      ]);
      DB::table('users')->insert([//part_mng
        'personal_number' => '123456-78915',
        'first_name' => 'Uģis',
        'last_name' => 'Kuģis',
        'post' => 'Part Manager',
        'roles' => 'part_mng',
        'email' => 'UK@email.com',
        'password' => bcrypt('password'),
        'preferred_language' => 'en'
      ]);
    }
}
