<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table pegawai

        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '081215641268',
            'ttl' => '2000-06-07',
            'foto' => 'picture.png',
        ]);
    }
}
