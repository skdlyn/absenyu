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
            'nama' => 'Abyaz Prince Muhammad',
            'alamat' => '1 ',
            'id_kelas' => '1',
            'jk' => 'laki - laki',
        ]);

        siswa::create([
            'nisn' => '0055606455',
            'nama' => 'ach nur icrchamul',
            'alamat' => '2 ',
            'id_kelas' => '1',
            'jk' => 'laki - laki',
        ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'achmad annuru akbar',
        //     'alamat' => '3 ',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'achmad naufal ferdiansyah',
        //     'alamat' => '4',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'adinda jati mulia',
        //     'alamat' => '5',
        //     'id_kelas' => '1',
        //     'jk' => 'perempuan',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'afrizaldin ananda phraqazza',
        //     'alamat' => '6',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'aghna naufal caesaryan',
        //     'alamat' => '7',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'ahmad zakki saputra',
        //     'alamat' => '8',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'alan nadia bella sahira',
        //     'alamat' => '9',
        //     'id_kelas' => '1',
        //     'jk' => 'perempuan',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'Alexander sebastian richard',
        //     'alamat' => '10',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

    }
}
