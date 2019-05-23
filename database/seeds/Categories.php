<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 0; $i <= 5; $i++) \App\Category::create([
        'name' => str_random(5),
        'slug' => str_random(10),
    ]);
  }
}
