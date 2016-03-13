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
            $table->unsignedInteger('diagnostic_center_id')->nullable();

            $table->foreign('diagnostic_center_id')->references('id')
            ->on('diagnostic_center')->onUpdate('cascade')->onDelete('cascade'); 
            
            $table->unsignedInteger('test_id')->nullable();
            $table->foreign('test_id')->references('id')
            ->on('test')->onUpdate('cascade')->onDelete('cascade'); 
            
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
