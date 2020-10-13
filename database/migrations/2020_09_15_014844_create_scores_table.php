<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('chinese');
            $table->unsignedInteger('english');
            $table->unsignedInteger('math');
            $table->unsignedInteger('total');
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
        Schema::dropIfExists('scores');
    }
}
