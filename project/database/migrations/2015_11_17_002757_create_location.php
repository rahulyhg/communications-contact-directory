<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocation extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('location', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('street_address_1',255);
      $table->string('street_address_2',255)->nullable();
      $table->string('city',255);
      $table->integer('state_id')->unsigned();
      $table->string('zipcode',255);
      $table->string('url',255)->nullable();;
      $table->text('note')->nullable();
      $table->boolean('status')->default(1);
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
    Schema::drop('location');
  }
}
