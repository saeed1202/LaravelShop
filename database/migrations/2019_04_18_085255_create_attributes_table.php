<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('attributes', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 32);
      $table->integer('attribute_type_id')->unsigned();
      $table->integer('attribute_group_id')->unsigned();
      $table->boolean('is_active');
      $table->timestamps();

      $table->foreign('attribute_group_id')->references('id')->on('attribute_groups')->onDelete('cascade')->onDelete('cascade');
      $table->foreign('attribute_type_id')->references('id')->on('attribute_types')->onDelete('cascade')->onDelete('cascade');


    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('attributes');
  }
}
