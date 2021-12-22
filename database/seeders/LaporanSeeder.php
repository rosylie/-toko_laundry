<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laporan')->insert([
            'id' => 1,
            'tgl_pesan' => Carbon::create('2020', '12', '19'),
            'jenis_laundry' => 'cuci_setrika/10.000/kg',
            'berat' => 2,
            'total_bayar' => 20000,
            'status_bayar' => 'LUNAS'
        ]);
    }
}
