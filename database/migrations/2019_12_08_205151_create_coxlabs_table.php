<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoxlabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coxlabs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo')->default('coxlab_logo.jpg');
            $table->string('title');
            $table->LONGTEXT('description');
            $table->string('name');
            $table->string('designation');
            $table->string('phone');
            $table->string('email');
            $table->string('location');
            $table->string('focal_name');
            $table->string('focal_designation');
            $table->string('focal_phone');
            $table->string('focal_email');
            $table->string('focal_location');
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
        Schema::dropIfExists('coxlabs');
    }
}
