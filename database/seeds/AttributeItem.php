<?php

use Illuminate\Database\Seeder;

class AttributeItem extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \App\AttributeItem::create([
        'value' => 'Test Attribute item 1',
        'attribute_id' => \App\Attribute::all()->first()->id,
        'is_active' => true,
    ]);

    \App\AttributeItem::create([
        'value' => 'Test Attribute item 2',
        'attribute_id' => \App\Attribute::all()->first()->id,
        'is_active' => true,
    ]);
  }
}
