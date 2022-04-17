<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumanprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humanprojects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_name');
            $table->string('project_duration');
            $table->string('year');
            $table->string('project_donor');
            $table->string('thematic_area');
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
        Schema::dropIfExists('humanprojects');
    }
}
