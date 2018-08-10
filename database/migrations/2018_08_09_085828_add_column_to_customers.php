<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('customers', function($table) {

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            //onDelete('cascade') // ako se obrise User, obrisace se i Customer iz tabele sa tim ID-em
            
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('customers', function($table) {
            $table->dropColumn('user_id');
        });
    }
}
