<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisUndanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_jenis_undangan' => 'Undangan Pernikahan'],
            ['nama_jenis_undangan' => 'Undangan Ulang Tahun'],
            ['nama_jenis_undangan' => 'Undangan Lainnya']
        ];
        DB::table('jenis_undangans')->insert($data);
    }
}