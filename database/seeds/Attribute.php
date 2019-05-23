<?php

use Illuminate\Database\Seeder;

class Attribute extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \App\Attribute::create([
        'name' => 'Test Attribute',
        'attribute_group_id' => \App\AttributeGroup::all()->first()->id,
        'is_active' => true,
        'attribute_type_id' => \App\AttributeType::all()->first()->id,
    ]);
  }
}
