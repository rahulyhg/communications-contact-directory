<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressFieldToLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('location', function ($table) {
            $table->string('street_address_1',255);
            $table->string('street_address_2',255);
            $table->string('city',255);
            $table->integer('state_id')->unsigned();
            $table->string('zipcode',255);
            $table->string('url',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location', function($table)
        {
            $table->dropColumn('street_address_1');
            $table->dropColumn('street_address_2');
            $table->dropColumn('city');
            $table->dropColumn('state_id');
            $table->dropColumn('zipcode');
            $table->dropColumn('url');
        });
    }
}
