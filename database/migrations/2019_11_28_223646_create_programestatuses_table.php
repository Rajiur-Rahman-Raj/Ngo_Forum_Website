<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramestatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programestatuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->LONGTEXT('description');
            $table->string('image')->default('programestatuses_img.jpg');
            $table->LONGTEXT('another_description')->nullable();
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
        Schema::dropIfExists('programestatuses');
    }
}
