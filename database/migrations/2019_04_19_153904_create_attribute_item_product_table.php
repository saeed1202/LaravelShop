<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeItemProductTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('attribute_item_product', function (Blueprint $table) {
      $table->integer('attribute_id')->unsigned();
      $table->integer('attribute_item_id')->unsigned();
      $table->integer('product_id')->unsigned();

      $table->primary(['attribute_id', 'attribute_item_id', 'product_id'],'primary_keys');

      $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade')->onUpdate('cascade');
      $table->foreign('attribute_item_id')->references('id')->on('attribute_items')->onDelete('cascade')->onUpdate('cascade');
      $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('attribute_item_product');
  }
}
