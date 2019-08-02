<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyConstraintsToSubCatTypesBrandsAssessOutlets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcategorys', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categorys');
        });

        Schema::table('types', function (Blueprint $table) {
            $table->foreign('subcategory_id')->references('id')->on('subcategorys');
        });

        Schema::table('brands', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categorys');
            $table->foreign('subcategory_id')->references('id')->on('subcategorys');
            $table->foreign('type_id')->references('id')->on('types');
        });

        Schema::table('assessments', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brands');
        });

        Schema::table('outlets', function (Blueprint $table) {
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
        Schema::table('subcategorys', function (Blueprint $table) {
            $table->dropForeign('subcategorys_category_id_foreign');
        });

        Schema::table('types', function (Blueprint $table) {
            $table->dropForeign('types_subcategory_id_foreign');
        });

        Schema::table('brands', function (Blueprint $table) {
            $table->dropForeign('brands_category_id_foreign');
            $table->dropForeign('brands_subcategory_id_foreign');
            $table->dropForeign('brands_type_id_foreign');
        });

        Schema::table('assessments', function (Blueprint $table) {
            $table->dropForeign('assessments_brand_id_foreign');
        });

        Schema::table('outlets', function (Blueprint $table) {
            $table->dropForeign('outlets_brand_id_foreign');
        });

    }
}
