<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->integer('test_id');
             $table->primary('test_id');


            $table->integer('category_id');
            $table->foreign('category_id')->references('category_id')->on('test_category');

           
           
            $table->string('name');


            $table->string('description')->nullable();
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
        Schema::drop('test');
    }
}
