<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name',100);
            $table->string('condition');
            $table->integer('count_frame_now');
            $table->bigInteger('mansion_id')->unsigned()->nullable();
            $table->bigInteger('kind_of_hive_id')->unsigned()->nullable();
            $table->foreign('mansion_id')->references('id')->on('mansions');
            $table->foreign('kind_of_hive_id')->references('id')->on('kind_of_hives');
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
        Schema::dropIfExists('hives');
    }
}
