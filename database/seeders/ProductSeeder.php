<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
       [
        'name'=>'Oppo',
       'price'=>'300',
        'description'=>'A Smartphone with 8gb ram',
        'category'=>'mobile',
        'gallery'=>'https://images-eu.ssl-images-amazon.com/images/I/41BnHjRP0ZS._SX300_SY300_QL70_FMwebp_.jpg' 
            ],
        [
       'name'=>'Panasonic TV',
       'price'=>'1000',
        'description'=>'A TFT TELIVISION with Full HD Display',
        'category'=>'Television',
        'gallery'=>'https://3.imimg.com/data3/VD/GW/MY-2245112/panasonic-lcd-tv-500x500.jpg' 
            ],
        [
       'name'=>'SONY LED',
       'price'=>'1200',
        'description'=>'A Smart FULL HD LED with 4gb ram',
        'category'=>'Television',
        'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-54146986,imgsize-200,width-640/54146986.jpg' 
            ],
        [
       'name'=>'LG Fridge',
       'price'=>'800',
        'description'=>'220 liter',
        'category'=>'electronics',
        'gallery'=>'https://5.imimg.com/data5/PP/NY/MY-47795804/lg-refrigerator-500x500.jpg' 
            ]
        ]);

    }
}
