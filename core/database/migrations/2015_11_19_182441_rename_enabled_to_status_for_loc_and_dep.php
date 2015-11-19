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
    // add default value to existing column (no need to roll this back in down)
    Schema::table('department', function($table)
    {
      $table->boolean('enabled', 1)->default(1)->change();
    });
    Schema::table('department', function($table)
    {
      $table->renameColumn('enabled', 'status');
    });

    // add default value to existing column (no need to roll this back in down)
    Schema::table('location', function($table)
    {
      $table->boolean('enabled', 1)->default(1)->change();
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
