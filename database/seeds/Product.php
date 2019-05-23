<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 0; $i <= 5; $i++) \App\Product::create([
        'name' => str_random(30),
        'category_id' => \App\Category::all()->first()->id,
        'user_id' => 1,
        'slug' => \Illuminate\Support\Str::slug(str_random(30)),
        'body' => str_random(100),
        'price' => rand(0, 999999),
        'real_price' => rand(0, 99999),
        'discount' => rand(0, 100),
        'qty' => rand(0, 50)
    ]);
  }
}
