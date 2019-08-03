<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDUsefulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_usefuls', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('discussion_id')->unsigned();
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
        Schema::dropIfExists('d_useful');
    }
}
