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

            

            $table->double('latitude');
            $table->double('longitude');
            $table->unsignedInteger('area_id');

            //$table->foreign('area_id')->references('id')->on('area')->onUpdate('cascade')->onDelete('cascade'); 
            

            $table->unsignedInteger('district_id')->nullable();             
            //$table->foreign('district_id')->references('id')->on('district')->onUpdate('cascade')->onDelete('cascade'); 

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
