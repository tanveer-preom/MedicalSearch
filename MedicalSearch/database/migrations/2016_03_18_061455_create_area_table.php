<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')
            ->on('district')->onUpdate('cascade')->onDelete('cascade'); 

            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
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
        Schema::drop('area');
    }
}


 