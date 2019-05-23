<?php

use Illuminate\Database\Seeder;

class AttributeGroup extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \App\AttributeGroup::create([
        'name' => "Test Group",
        'category_id' => \App\Category::all()->first()->id,
        'is_active' => true
    ]);
  }
}
