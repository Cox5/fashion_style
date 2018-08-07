<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            //$table->foreign('category_id')->references('category_id')->on('category');
            $table->string('product_name');
            $table->float('price');
            $table->string('size');
            $table->string('color');
            $table->string('description');
            $table->string('composition');
            $table->string('artist');
            $table->string('available_size');
            $table->string('available_colors');
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
        Schema::dropIfExists('products');
    }
}
