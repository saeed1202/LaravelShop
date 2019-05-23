<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeGroupsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('attribute_groups', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name',32)->unique();
      $table->integer('category_id')->unsigned();
      $table->boolean('is_active');
      $table->timestamps();

      $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('attribute_groups');
  }
}
