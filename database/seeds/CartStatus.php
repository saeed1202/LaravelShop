<?php

use Illuminate\Database\Seeder;

class CartStatus extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \App\OrderStatus::create([
        'name' => 'در انتظار ثبت',
        'order' => 1,
        'deletable' => true
    ]);
    \App\OrderStatus::create([
        'name' => 'در انتظار پرداخت',
        'order' => 2
    ]);
    \App\OrderStatus::create([
        'name' => 'پرداخت شده  و  در انتظار برسی',
        'order' => 3
    ]);
    \App\OrderStatus::create([
        'name' => 'ثبت شده و در انتظار ارسال',
        'order' => 4
    ]);
    \App\OrderStatus::create([
        'name' => 'ارسال شد',
        'order' => 5
    ]);
    \App\OrderStatus::create([
        'name' => 'توسط کاربر لغو شد',
        'order' => 6,
        'deletable' => true
    ]);
    \App\OrderStatus::create([
        'name' => 'توسط سیستم لغو شد',
        'order' => 7,
        'deletable' => true
    ]);
  }
}
