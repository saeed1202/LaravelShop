<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cart_product', function (Blueprint $table) {
      $table->integer('product_id')->unsigned();
      $table->integer('cart_id')->unsigned();
      $table->tinyInteger('qty')->unsigned();

      //primary keys
      $table->primary(['product_id', 'cart_id']);

      //relations
      $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
      $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade')->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('cart_product');
  }
}
