<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectoffices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_location');
            $table->string('project_name');
            $table->string('funded_logo')->default('funded_logo.jpg');
            $table->string('contact_parson');
            $table->longText('address');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('projectoffices');
    }
}
