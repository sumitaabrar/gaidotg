<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRUsefulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_usefuls', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('recommendation_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('useful');
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
        Schema::dropIfExists('r_usefuls');
    }
}
