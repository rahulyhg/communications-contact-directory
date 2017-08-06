<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryAndFieldsToDirectory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //directory: title, categories, instagram, snapchat
        Schema::table('directory', function ($table) {
            $table->string('title',255);
            $table->string('instagram',255);
            $table->string('snapchat',255);
            $table->text('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('directory', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('instagram');
            $table->dropColumn('snapchat');
            $table->dropColumn('categories');
        });
    }
}
