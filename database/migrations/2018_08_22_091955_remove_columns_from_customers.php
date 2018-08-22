<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveColumnsFromCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function($table) {
            $table->dropColumn('bill_address');
            $table->dropColumn('bill_city');
            $table->dropColumn('bill_zip');
            $table->dropColumn('bill_country');
            $table->dropColumn('ship_address');
            $table->dropColumn('ship_city');
            $table->dropColumn('ship_zip');
            $table->dropColumn('ship_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function($table) {
            $table->string('bill_address');
            $table->string('bill_city');
            $table->string('bill_zip');
            $table->string('bill_country');
            $table->string('ship_address');
            $table->string('ship_city');
            $table->string('ship_zip');
            $table->string('ship_country');
         });
    }
}
