<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('news_category_id');
            $table->string('news_title');
            $table->LONGTEXT('news_description');
            $table->string('news_image')->default('default_new_image.jpg');
            $table->string('news_status')->default('active');
            $table->LONGTEXT('ck_description');
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
        Schema::dropIfExists('all_news');
    }
}
