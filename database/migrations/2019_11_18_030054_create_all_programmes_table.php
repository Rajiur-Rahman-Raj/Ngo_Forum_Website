<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_programmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('programme_category_id');
            $table->string('programme_title');
            $table->string('programme_image')->default('default_new_image.jpg');
            $table->LONGTEXT('image_description');
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
        Schema::dropIfExists('all_programmes');
    }
}
