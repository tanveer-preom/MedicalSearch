<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_center', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('name');

            $table->unsignedInteger('company_id');


            $table->foreign('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade'); 

            $table->integer('area_id')->nullable();

            $table->double('latitude');
            $table->double('longitude');

            $table->timestamps();
            $table->boolean('delete_status')->default(false);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('diagnostic_center');
    }
}
