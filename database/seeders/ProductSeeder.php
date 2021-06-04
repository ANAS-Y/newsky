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
        //inserting product into table
        DB::table('products')->insert([
           
            [
                'name'=>'The use of ICT',
                'price'=>'20000',
                'category'=>'Computer science Project',
                'description'=>'Abstract of this project is very interested',
                'gallery'=>'www.images.com/computer.jpg'
            ],

            [
                'name'=>'Transaction management system',
            'price'=>'20000',
            'category'=>'Computer science Project',
            'description'=>'Abstract of this project is very interested',
            'gallery'=>'www.images.com/computer.jpg'
            ],

            [
                'name'=>'AI forsmart Home',
                'price'=>'20000',
                'category'=>'Computer science Project',
                'description'=>'Abstract of this project is very interested',
                'gallery'=>'www.images.com/computer.jpg'
            ]
        ]);
    }
}
