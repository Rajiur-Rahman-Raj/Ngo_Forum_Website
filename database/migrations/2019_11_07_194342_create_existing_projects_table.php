<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExistingProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('existing_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('existing_title');
            $table->LONGTEXT('description_one');
            $table->string('existing_period');
            $table->string('existing_donar');
            $table->string('total_baget');
            $table->string('location');
            $table->LONGTEXT('existing_description')->nullable();
            $table->string('existing_image')->default('existing_img.jpg');
            $table->string('existing_details_image')->default('existing_details_img.jpg')->nullable();
            $table->string('focal_name');
            $table->string('focal_designation');
            $table->string('focal_phone');
            $table->string('focal_email');
            $table->LONGTEXT('related_link')->nullable();
            $table->LONGTEXT('related_document')->nullable();
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
        Schema::dropIfExists('existing_projects');
    }
}
