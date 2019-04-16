<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuprumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuprum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kind');
            $table->integer('count_kg');
            $table->integer('count_frame');

            $table->bigInteger('hive_id')->unsigned()->nullable();
            $table->foreign('hive_id')->references('id')->on('hives');
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
        Schema::dropIfExists('cuprum');
    }
}
