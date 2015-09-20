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
            $table->integer('diagnostic_center_id');
            $table->primary('diagnostic_center_id');
            $table->string('name');
            $table->integer('company_id');
            $table->foreign('company_id')->references('company_id')->on('company');
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
