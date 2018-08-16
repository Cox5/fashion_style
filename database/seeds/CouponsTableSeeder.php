<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Coupon::create([
            'code' => 'coupon1',
            'type' => 'fixed',
            'value' => 30,
        ]);

        Coupon::create([
            'code' => 'coupon2',
            'type' => 'percent',
            'percent_off' => 50,
        ]);


    }

}
