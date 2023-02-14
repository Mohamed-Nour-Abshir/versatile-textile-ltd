<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'versatile',
            'email' => 'info@versatile.com',
            'phone' => '01713044093',
            'address' => '89/2, Chaydana, Degerchala Road, National University, Gazipur',
            'password' => Hash::make('123456789'),
        ]);
    }
}
