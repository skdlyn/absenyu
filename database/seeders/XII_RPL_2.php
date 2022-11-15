<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;

class XII_RPL_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Guru::create([
            'nip' => '1234567890',
            'nama' => 'Lukman Sholeh',
            'jenis_kelamin' => 'laki - laki'
        ]);

        kelas::create([
            'nama_kelas' => 'XII RPL 2',
            'kuota' => '37',
            'tahun_masuk' => '2020-12-31',
            'tahun_keluar' => '2023-12-31',
            'id_guru' => '1',
        ]);

        siswa::create([
            'nisn' => '0055606458',
            'nama' => 'Ilham bintang Herlambang',
            'alamat' => 'Jl. hayam Wuruk Baru 1 ',
            'id_kelas' => '1',
            'jk' => 'laki - laki',
        ]);

        siswa::create([
            'nisn' => '0055606457',
            'nama' => 'Rafli Dwi Ferdiansyah',
            'alamat' => 'Jl. ketintang ',
            'id_kelas' => '1',
            'jk' => 'laki - laki',
        ]);

        siswa::create([
            'nisn' => '0055606456',
            'nama' => 'Inna Filjannati Aprilia',
            'alamat' => 'Jl. nginden ',
            'id_kelas' => '1',
            'jk' => 'perempuan',
        ]);
    }
}
