<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbouutnogformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouutnogforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('about_ngo_image')->default('about_ngo_image.jpg');
            $table->LONGTEXT('about_ngo_description');
            $table->LONGTEXT('about_ngo_description_two')->nullable();
            $table->string('about_ngo_vision_title');
            $table->string('about_ngo_vision_bg_image')->default('about_ngo_vision_bg_image.jpg');
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
        Schema::dropIfExists('abouutnogforms');
    }
}
