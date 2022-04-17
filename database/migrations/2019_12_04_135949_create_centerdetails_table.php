<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centerdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('center_category_id');
            $table->string('category_name');
            $table->LONGTEXT('description');
            $table->string('capacity')->nullable()->default('N/A');
            $table->string('rates');
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
        Schema::dropIfExists('centerdetails');
    }
}
