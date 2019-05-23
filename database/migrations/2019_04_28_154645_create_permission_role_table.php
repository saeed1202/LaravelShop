<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionRoleTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('permission_role', function (Blueprint $table) {
      $table->tinyInteger('role_id')->unsigned();
      $table->tinyInteger('permission_id')->unsigned();

      $table->primary(['permission_id', 'role_id']);
      $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
      $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('permission_role');
  }
}
