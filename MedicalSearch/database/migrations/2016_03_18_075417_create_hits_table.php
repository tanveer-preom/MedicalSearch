<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHitsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('hits', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('test_id');
            $table->string('test_name');

            $table->integer('test_category_id');
            $table->string('test_category_name');

            $table->integer('district_id');
            $table->string('district_name');

            $table->integer('area_id');
            $table->string('area_name');

            $table->integer('count');
            


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
        Schema::drop('hits');
    }
}


 