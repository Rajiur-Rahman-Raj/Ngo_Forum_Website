<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllresourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allresources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('resources_category_id');
            $table->string('resources_image')->default('default_new_image.jpg');
            $table->string('image_title');
            $table->string('file_download')->nullable();
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
        Schema::dropIfExists('allresources');
    }
}
