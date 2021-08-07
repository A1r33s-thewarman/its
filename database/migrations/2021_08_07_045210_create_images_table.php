<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    //create images table
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagable_type');
            $table->integer('imagable_id');
            $table->integer('size');
            $table->string('path');
            $table->string('name');
            $table->string('extension');

            $table->timestamps();
             $table->foreign('imagable_id')->references('id')->on('issues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
