<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'nama_perusahaan' => 'Wedigital Indonesia',
            'emails' => 'wedigitalindonesia@gmail.com',
            'locations' => 'Jl. Semawung No 58 Cangkrep Kidul Purworejo',
            'phone' => '081312555467',
            'image' =>'20211222161322.svg',
            'text' =>'Make It Better And Easier',
            'title' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.
',
        ]);
    }
}
