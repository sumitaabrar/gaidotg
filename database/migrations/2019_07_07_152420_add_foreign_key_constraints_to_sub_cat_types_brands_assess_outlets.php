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
        Schema::table('sub_cat_types_brands_assess_outlets', function (Blueprint $table) {
            //
        });
    }
}
