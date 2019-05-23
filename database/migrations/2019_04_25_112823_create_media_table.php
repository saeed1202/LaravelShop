<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('media', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('product_id')->unsigned()->nullable();
      $table->string('src');
      $table->string('thumbnail');
      $table->string('name', 128)->nullable();
      $table->string('path');
      $table->string('content')->nullable();
      $table->timestamps();

      $table->foreign('product_id')->references('id')->on('products')->onDelete('set null')->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('media');
  }
}
