<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionalofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regionaloffices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('region');
            $table->string('person');
            $table->longText('street_address');
            $table->string('phone');
            $table->string('email');
            $table->string('district_covergae');
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
        Schema::dropIfExists('regionaloffices');
    }
}
