<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrokitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microkits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo')->default('microkit_logo.jpg');
            $table->LONGTEXT('description');
            $table->string('qualitative');
            $table->string('origin');
            $table->string('location');
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
        Schema::dropIfExists('microkits');
    }
}
