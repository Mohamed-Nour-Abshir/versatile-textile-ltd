<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'Versital',
            'email' => 'info@versatile.com',
            'phone' => '+8801762686627',
            'address' => '89/2 Chaydana, Degerchala, National University, Gazipur , Bangladesh., Dhaka, Bangladesh'
        ]);
    }
}
