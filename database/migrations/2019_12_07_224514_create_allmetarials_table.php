<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllmetarialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allmetarials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('metarials_category_id');
            $table->string('metarials_title');
            $table->string('image')->default('metarials_image.jpg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allmetarials');
    }
}
