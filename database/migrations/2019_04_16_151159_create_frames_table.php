<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('count');
            $table->bigInteger('kind_id')->unsigned()->nullable();
            $table->bigInteger('states_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('kind_id')->references('id')->on('kind_of_frames');
            $table->foreign('states_id')->references('id')->on('states_of_frames');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frames');
    }
}
