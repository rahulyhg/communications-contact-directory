<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->integer('location_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->text('categories')->nullable();
            $table->string('primary_phone')->nullable();
            $table->string('secondary_phone')->nullable();
            $table->string('website')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('snapchat',255)->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::drop('directory');
    }
}
