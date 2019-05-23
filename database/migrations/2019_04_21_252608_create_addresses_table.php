<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('addresses', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->string('address');
      $table->string('postal_code')->length(10);
      $table->string('phone')->length(10);
      $table->integer('city_id')->unsigned();
      $table->string('full_name', 64);
      $table->timestamps();

      $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('addresses');
  }
}
