<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;

class XII_RPL_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Guru::create([
            'nip' => '987654321',
            'nama' => 'Asmuin',
            'jenis_kelamin' => 'laki - laki'
        ]);

        kelas::create([
            'nama_kelas' => 'XII RPL 1',
            'kuota' => '36',
            'tahun_masuk' => '2020-12-31',
            'tahun_keluar' => '2023-12-31',
            'id_guru' => '1',
        ]);

        siswa::create([
            'nisn' => '0055606455',
            'nama' => 'Moreno Hernakov',
            'alamat' => 'Jl. Menanggal ',
            'id_kelas' => '1',
            'jk' => 'laki - laki',
        ]);

    }
}
