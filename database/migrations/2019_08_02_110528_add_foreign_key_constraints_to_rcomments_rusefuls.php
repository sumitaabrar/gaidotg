<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyConstraintsToRcommentsRusefuls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('r_comments', function (Blueprint $table) {
            $table->foreign('recommendation_id')->references('id')->on('recommendations');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('r_usefuls', function (Blueprint $table) {
            $table->foreign('recommendation_id')->references('id')->on('recommendations');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('r_comments', function (Blueprint $table) {
            $table->dropForeign('r_comments_recommendation_id_foreign');
            $table->dropForeign('r_comments_user_id_foreign');
        });

        Schema::table('r_usefuls', function (Blueprint $table) {
            $table->dropForeign('r_usefuls_recommendation_id_foreign');
            $table->dropForeign('r_usefuls_user_id_foreign');
        });
    }
}
