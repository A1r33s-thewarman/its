<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    //create subcategories table
        Schema::create('issue_sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issue_id');
            $table->integer('subcategory_id');

            $table->timestamps();
            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('issue_sub_categories')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue_sub_categories');
    }
}
