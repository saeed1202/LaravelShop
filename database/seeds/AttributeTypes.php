<?php

use Illuminate\Database\Seeder;

class AttributeTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AttributeType::create([
            'name' => 'String'
        ]);

      \App\AttributeType::create([
          'name' => 'Selection'
      ]);
    }
}
