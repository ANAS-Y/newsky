<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert user
        DB::table('users')->insert([
            'name'=>'anas Yunusa',
            'email'=>'anas@gmail.com',
            'phone'=>'08086777408',
            'category'=>'customer',
            'password'=>Hash::make('123456')
        ]);
    }
}
