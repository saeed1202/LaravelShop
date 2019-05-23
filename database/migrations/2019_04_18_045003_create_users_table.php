<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 16)->nullable()->default(null);
      $table->string('family', 16)->nullable()->default(null);
      $table->string('email', 32)->unique();
      $table->string('password', 64);
      $table->string('phone', 10)->unique()->nullable()->default(null);
      $table->string('national_code', 10)->unique()->nullable()->default(null);
      $table->string('card_number', 16)->nullable()->default(null);
      $table->string('remember_token', 64)->nullable();
      $table->boolean('gender')->default(1)->nullable();
      $table->boolean('should_check_permissions')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
