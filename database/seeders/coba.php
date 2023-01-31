<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\bk;
class coba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bk::create([
            'nama' => 'windy',
            'jenis_kelamin' => 'perempuan',
            'user_id' => '1',
        ]);
        Guru::create([
            'nip' => '987654321',
            'nama' => 'lukman',
            'jenis_kelamin' => 'laki - laki',
            'user_id' => '3'
        ]);

        kelas::create([
            'nama_kelas' => 'XII RPL 1',
            'kuota' => '36',
            'tahun_masuk' => '2020-12-31',
            'tahun_keluar' => '2023-12-31',
            'id_guru' => '1',
            'id_bk' => '1'
        ]);

        siswa::create([
            'nama' => 'Abyaz',
            'nisn' => '0055606455',
            'id_kelas' => '1',
            'alamat' => '1 ',
            'jk' => 'laki - laki',
            'user_id' => '7'
        ]);
// ===========================================================================
        Guru::create([
            'nip' => '23829018',
            'nama' => 'asmuin',
            'jenis_kelamin' => 'laki - laki',
            'user_id' => '6'
        ]);

        kelas::create([
            'nama_kelas' => 'XII RPL 2',
            'kuota' => '36',
            'tahun_masuk' => '2020-12-31',
            'tahun_keluar' => '2023-12-31',
            'id_guru' => '1',
            'id_bk' => '1'
        ]);

        siswa::create([
            'nama' => 'ilham',
            'nisn' => '0055606455',
            'id_kelas' => '2',
            'alamat' => 'jalanin aja ',
            'jk' => 'laki - laki',
            'user_id' => '4'
        ]);
    }
}
