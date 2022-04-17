<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplementedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name');
            $table->string('project_logo')->default('implemented_logo_image.jpg')->nullable();
            $table->LONGTEXT('short_description')->nullable();
            $table->string('project_duration');
            $table->string('year');
            $table->string('project_donor');
            $table->string('thematic_area');
            $table->string('total_baget');
            $table->string('location');
            $table->string('details_image')->default('implemented_details_image.jpg')->nullable();
            $table->longText('details_description')->nullable();
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
        Schema::dropIfExists('implementeds');
    }
}
