<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemesanan')->insert([
            'id' => 1,
            'tgl_pemesanan' => Carbon::create('2020', '12', '19'),
            'status_proses' => 'setrika',
            'berat' => 2,
            'total_bayar' => 20000,
            'status_bayar' => 'LUNAS'
        ]);
    }
}
