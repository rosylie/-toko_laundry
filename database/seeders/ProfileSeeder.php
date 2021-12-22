<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->insert([
            'id' => 1,
            'nama' => 'Lily',
            'alamat' => 'Trini',
            'no_telp' => '082253771453',
            'email' => 'rosy@gmail.com',
            'username' => 'rosylie'
        ]);

        DB::table('profile')->insert([
            'id' => 2,
            'nama' => 'Sepri',
            'alamat' => 'Malinau',
            'no_telp' => '082253771443',
            'email' => 'sepri@gmail.com',
            'username' => 'sep'
        ]);
    }
}
