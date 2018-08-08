<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([

            'customer_id' => '1',
            'email' => 'john@mail.com',
            'password' => bcrypt('secret'),
            'firstname' => 'John',
            'lastname' => 'Doe',
            'bill_address' => '15 Road',
            'bill_city' => 'London',
            'bill_zip' => 'WC2N',
            'bill_country' => 'United Kingdom',
            'ship_address' => '15 Road',
            'ship_city' => 'London',
            'ship_zip' => 'WC2N',
            'ship_country' => 'United Kingdom',
            'date_of_birth' => '1990-04-20',
            'phone' => '+32 678206899',
            'gender' => 'M',

        ]);
    }
}
