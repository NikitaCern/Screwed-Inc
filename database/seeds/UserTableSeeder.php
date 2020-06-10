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
      DB::table('users')->insert([
        'personal-number' => '123456-78910',
        'first_name' => 'Janis',
        'last_name' => 'Berzins',
        'post' => 'Admin',
        'email' => 'Janis.Berzins@email.com',
        'password' => bcrypt('password'),
      ]);
    }
}
