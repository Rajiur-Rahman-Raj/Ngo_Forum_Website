<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactoffices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('office_location');
            $table->string('office_phone');
            $table->string('office_fax');
            $table->string('office_email');
            $table->string('office_website');
            $table->string('name');
            $table->string('designation');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->LONGTEXT('map_link');
            $table->string('image')->default('office_image.jpg');
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
        Schema::dropIfExists('contactoffices');
    }
}
