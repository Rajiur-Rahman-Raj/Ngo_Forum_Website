<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllwqtltestratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allwqtltestrates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('testrate_category_id');
            $table->string('serial_number');
            $table->string('parameters');
            $table->string('method');
            $table->string('cost');
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
        Schema::dropIfExists('allwqtltestrates');
    }
}
