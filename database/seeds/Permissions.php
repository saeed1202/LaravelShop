<?php

use App\Permission;
use Illuminate\Database\Seeder;

class Permissions extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Permission::create([
        'name' => 'address.view',
        'description' => 'دیدن آدرس ها'
    ]);
    Permission::create([
        'name' => 'address.update',
        'description' => 'ویرایش آدرس ها'
    ]);
    Permission::create([
        'name' => 'address.delete',
        'description' => 'حذف آدرس ها'
    ]);


    Permission::create([
        'name' => 'cart.view',
        'description' => 'دیدن سبد خرید'
    ]);
    Permission::create([
        'name' => 'cart.edit',
        'description' => 'ویرایش سبد خرید'
    ]);
    Permission::create([
        'name' => 'cart.delete',
        'description' => 'حذف سبد خریدی که قابل حذف است'
    ]);
    Permission::create([
        'name' => 'cart.should.delete',
        'description' => 'حذف سبد خریدی که قابل حذف برای دیگر کاربران نیست!'
    ]);
  }
}
