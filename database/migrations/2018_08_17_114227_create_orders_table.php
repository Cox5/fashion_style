<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                   ->onUpdate('cascade')->onDelete('set null');
            $table->string('phone');
            $table->string('shipping_address');
            $table->string('shipping_address_apt')->nullable();
            $table->string('shipping_city');
            $table->string('shipping_zip');
            $table->string('shipping_country');
            $table->integer('discount')->default(0);
            $table->string('discount_code')->nullable();
            $table->integer('subtotal');
            $table->integer('tax');
            $table->integer('total');
            $table->string('payment_gateway')->default('stripe');
            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable();
            
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
        Schema::dropIfExists('orders');
    }
}
