<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cities', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 32);
      $table->integer('state_id')->unsigned();
      $table->timestamps();

      $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('cities');
  }
}
