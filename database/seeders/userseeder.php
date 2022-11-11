<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\User;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name' => 'ilham',
            'email' => 'ilham@admin.com',
            'password' => bcrypt('12345'),
            'role' => 'user'
        ]);

        guru::create([
            'nip' => 1,
            'nama' => 'satu',
            'jenis_kelamin' => 'laki-laki'
        ]);
        
        kelas::create([
            'nama' => 'kelas barbar',
            'kuota' => 42,
            'tahun_masuk' => '1111-11-11',
            'tahun_keluar' => '2222-02-02',
            'id_guru' => '1',
        ]);

        siswa::create([
            'nama' => 'satu',
            'nisn' => '1',
            'alamat' => 'satu jam saja',
            'id_kelas' => 1,
            'jk' => 'laki - laki'
        ]);
    }
}
