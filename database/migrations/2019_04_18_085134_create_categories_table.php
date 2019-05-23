<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 32)->unique();
      $table->string('slug', 64)->unique();
      $table->integer('category_id')->nullable()->unsigned();
      $table->integer('parent_id')->nullable()->unsigned();
      $table->integer('depth')->nullable()->unsigned();
      $table->string('image')->nullable();
      $table->timestamps();


      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('categories');
  }
}
