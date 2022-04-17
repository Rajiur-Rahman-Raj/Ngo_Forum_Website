<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllaboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allabouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('about_category_id');
            $table->string('bg_image')->default('default_bg_image.jpg');
            
            $table->LONGTEXT('ck_description')->nullable();
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
        Schema::dropIfExists('allabouts');
    }
}
