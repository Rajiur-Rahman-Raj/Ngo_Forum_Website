<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateICESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_c_e_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->LONGTEXT('description_one');
            $table->string('name');
            $table->LONGTEXT('designation');
            $table->string('phone');
            $table->string('email');
            $table->string('ice_image')->default('ice_image.jpg');
            $table->LONGTEXT('description_two');
            $table->LONGTEXT('description_three')->nullable();
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
        Schema::dropIfExists('i_c_e_s');
    }
}
