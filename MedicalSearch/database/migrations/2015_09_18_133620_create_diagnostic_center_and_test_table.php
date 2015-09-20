<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticCenterAndTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_center_and_test', function (Blueprint $table) {
            $table->integer('diagnostic_center_id');
            $table->foreign('diagnostic_center_id')->references('diagnostic_center_id')->on('diagnostic_center');
            $table->integer('test_id');
            $table->foreign('test_id')->references('test_id')->on('test');
            $table->string('price');
            $table->string('additional_info')->nullable();
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
        Schema::drop('diagnostic_center_and_test');
    }
}
