<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'id' => 1,
            'name' => 'Mr. Abdul Kalam Azad',
            'title' => 'Founder',
            'message' => 'A visionary Textile Engineer and a successful Textile Professional. Established himself as a specialist business personal in the field of Textile and Garments business. His mission is to provide quality products to the customers and ensuring benefit to the employees and the society at large. Mr. Abul Kalam Azad views his business as a means of financial and moral gains by which can serve the society to achieve SDG for the sake of human civilization.',
            'image' => 'founder.png'
        ]);
    }
}
