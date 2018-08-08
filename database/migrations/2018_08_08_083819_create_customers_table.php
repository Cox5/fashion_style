<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('bill_address');
            $table->string('bill_city');
            $table->string('bill_zip');
            $table->string('bill_country');
            $table->string('ship_address');
            $table->string('ship_city');
            $table->string('ship_zip');
            $table->string('ship_country');
            $table->date('date_of_birth');
            $table->string('phone');
            $table->char('gender', 2);
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
        Schema::dropIfExists('customers');
    }
}
