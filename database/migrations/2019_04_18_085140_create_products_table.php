<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 128);
      $table->integer('category_id')->unsigned();
      $table->integer('user_id')->unsigned();
      $table->string('slug');
      $table->text('body')->nullable();
      $table->boolean('published')->default(false);
      $table->integer('price');
      $table->integer('real_price');
      $table->tinyInteger('discount')->unsigned()->nullable()->default(null);
      $table->mediumInteger('qty');
      $table->timestamps();


      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products');
  }
}
