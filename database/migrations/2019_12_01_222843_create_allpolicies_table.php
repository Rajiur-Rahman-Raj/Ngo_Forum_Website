<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllpoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allpolicies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mamber_image')->default('mamber_image.jpg');
            $table->string('mamber_name');
            $table->string('mamber_title');
            $table->string('possession');
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
        Schema::dropIfExists('allpolicies');
    }
}
