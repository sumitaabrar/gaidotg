<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('logo')->default('img0.jpg');
            $table->string('cover_photo')->default('img0.jpg');
            $table->mediumText('description');
            $table->string('website')->nullable();
            $table->string('contact')->nullable();
            $table->boolean('is_reg')->default(false);
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
        Schema::dropIfExists('brands');
    }
}
