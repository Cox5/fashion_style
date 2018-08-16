<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // call other seed classes
        $this->call(CustomersTableSeeder::class);
        //$this->call(CouponsTableSeeder::class);
    }
}
