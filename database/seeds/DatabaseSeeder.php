<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
//    $this->call(Users::class);
//    $this->call(Categories::class);
//    $this->call(Product::class);
//    $this->call(AttributeGroup::class);
//    $this->call(AttributeTypes::class);
//    $this->call(Attribute::class);
//    $this->call(AttributeItem::class);
    $this->call(CartStatus::class);
    $this->call(States::class);
  }
}
