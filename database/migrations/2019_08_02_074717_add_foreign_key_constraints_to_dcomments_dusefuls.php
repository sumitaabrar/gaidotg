<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyConstraintsToDcommentsDusefuls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('d_comments', function (Blueprint $table) {
            $table->foreign('discussion_id')->references('id')->on('discussions');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('d_usefuls', function (Blueprint $table) {
            $table->foreign('discussion_id')->references('id')->on('discussions');
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
        Schema::table('d_comments', function (Blueprint $table) {
            $table->dropForeign('d_comments_discussion_id_foreign');
            $table->dropForeign('d_comments_user_id_foreign');
        });

        Schema::table('d_usefuls', function (Blueprint $table) {
            $table->dropForeign('d_usefuls_discussion_id_foreign');
            $table->dropForeign('d_usefuls_user_id_foreign');
        });
    }
}
