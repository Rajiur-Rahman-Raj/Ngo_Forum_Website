<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtaglancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ataglances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('at_a_glance_category_id');
            $table->string('title');
            $table->string('amount');
            $table->LONGTEXT('ck_description')->nullable();
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
        Schema::dropIfExists('ataglances');
    }
}
