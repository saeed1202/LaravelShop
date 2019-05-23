<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\User::create([
          'email' => str_random(15) . '@gmail.com',
          'password' => bcrypt('saeed1112'),
      ]);
    }
}
