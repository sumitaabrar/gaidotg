<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyConstraintsToReviewsDisRecAndBrandUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('brand_id')->references('id')->on('brands');
        });

        Schema::table('discussions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('brand_users', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_user_id_foreign');
            $table->dropForeign('reviews_brand_id_foreign');
        });

        Schema::table('discussions', function (Blueprint $table) {
            $table->dropForeign('discussions_user_id_foreign');
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropForeign('recommendations_user_id_foreign');
        });

        Schema::table('brand_users', function (Blueprint $table) {
            $table->dropForeign('brand_users_brand_id_foreign');
        });
    }
}
