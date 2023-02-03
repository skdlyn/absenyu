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
            'jenis_kelamin' => 'laki - laki',
        ]);



        kelas::create([
            'nama_kelas' => 'XII RPL 2',
            'kuota' => '37',
            'tahun_masuk' => '2020-12-31',
            'tahun_keluar' => '2023-12-31',
            'guru_id' => '2',
            'bk_id' => '1'
        ]);

        siswa::create([
            'nama' => 'Ibrahim',
            // 'email' => 'ibrahim@gmail.com',
            // 'role' => 'siswa',
            'nisn' => '0055606455',
            'alamat' => '1',
            'kelas_id' => '2',
            'jenis_kelamin' => 'laki - laki',
            // 'user_id' => '4'
        ]);

        siswa::create([
            'nama' => 'Ibrahim Rizky',
            // 'email' => 'rizky@gmail.com',
            // 'role' => 'siswa',
            'nisn' => '0055606458',
            'alamat' => '2 ',
            'kelas_id' => '2',
            'jenis_kelamin' => 'laki - laki',
            // 'user_id' => '4'
        ]);

        // siswa::create([
        //     'nisn' => '0055606458',
        //     'nama' => 'Iksan arya dinata',
        //     'alamat' => '3',
        //     'id_kelas' => '2',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606458',
        //     'nama' => 'Ilham bintang Herlambang',
        //     'alamat' => 'Jl. hayam Wuruk Baru 1 ',
        //     'id_kelas' => '2',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606458',
        //     'nama' => 'Julian Ekapanca Putra',
        //     'alamat' => 'Jl. kedurus ',
        //     'id_kelas' => '2',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606458',
        //     'nama' => 'Jaya Raharja',
        //     'alamat' => 'Jl. Bogangin ',
        //     'id_kelas' => '2',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606458',
        //     'nama' => 'Kholifa Azzahro',
        //     'alamat' => 'Jl. ngagel ',
        //     'id_kelas' => '2',
        //     'jk' => 'perempuan',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606458',
        //     'nama' => 'Khafidatul Rahma',
        //     'alamat' => 'Jl. lidah wetan ',
        //     'id_kelas' => '2',
        //     'jk' => 'perempuan',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606457',
        //     'nama' => 'Rafli Dwi Ferdiansyah',
        //     'alamat' => 'Jl. ketintang ',
        //     'id_kelas' => '2',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606456',
        //     'nama' => 'Inna Filjannati Aprilia',
        //     'alamat' => 'Jl. nginden ',
        //     'id_kelas' => '2',
        //     'jk' => 'perempuan',
        // ]);
    }
}
