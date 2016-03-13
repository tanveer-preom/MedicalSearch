<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            
            //what test......like blood test
            $table->unsignedInteger('id');
            $table->primary('id');

            //what category (for test)...like orthopadics....fracture....neuro
            $table->unsignedInteger('category_id');

            //$table->foreign('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade'); 
            
           
           
            $table->string('name');


            $table->string('description')->nullable();
            $table->timestamps();
            $table->boolean('delete_status')->default(false);

            $table->foreign('category_id')->references('category_id')->on('test_category')
            ->onUpdate('cascade')->onDelete('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('test');
    }
}
