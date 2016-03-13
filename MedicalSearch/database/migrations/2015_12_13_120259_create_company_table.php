<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            

            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
           $table->string('description')->nullable();
            $table->boolean('delete_status')->default(false);
            $table->timestamps();
            
           $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company');
    }
}
