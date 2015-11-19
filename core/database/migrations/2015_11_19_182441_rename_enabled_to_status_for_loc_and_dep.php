<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameEnabledToStatusForLocAndDep extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('department', function($table)
    {
      $table->renameColumn('enabled', 'status');
    });
    Schema::table('location', function($table)
    {
      $table->renameColumn('enabled', 'status');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('department', function($table)
    {
      $table->renameColumn('status', 'enabled');
    });
    Schema::table('location', function($table)
    {
      $table->renameColumn('status', 'enabled');
    });
  }
}
