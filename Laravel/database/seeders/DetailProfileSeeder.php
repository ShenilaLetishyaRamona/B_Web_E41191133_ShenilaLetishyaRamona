<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai 
    DB::table('detail_profile')->insert([
        'address' => 'Jember',
        'nomor_tlp' => '082146290446',
        'ttl' => '2000-07-02',
        'foto' => 'picture.png'
    ]);
    }
}
