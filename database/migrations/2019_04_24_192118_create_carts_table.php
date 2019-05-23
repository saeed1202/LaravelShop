<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('carts', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->tinyInteger('order_status_id')->unsigned();
      $table->integer('address_id')->unsigned()->nullable();
      $table->text('address_object')->nullable()->default(null);
      $table->bigInteger('payment_id')->nullable()->default(null);
      $table->bigInteger('total_price')->unsigned()->nullable()->default(null);
      $table->timestamps();

      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
      $table->foreign('order_status_id')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');
      $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null')->onUpdate('cascade');

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('carts');
  }
}
