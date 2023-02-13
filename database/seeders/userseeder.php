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
        // User::create([
        //     'name' => 'windy',
        //     'email' => 'windy@gmail.com',
        //     'password' => bcrypt("12345"),
        //     'role' => 'bk'
        // ]);

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt("12345"),
        //     'role' => 'admin'
        // ]);

        // User::create([
        //     'name' => 'lukman',
        //     'email' => 'lukman@gmail.com',
        //     'password' => bcrypt("12345"),
        //     'role' => 'guru'
        // ]);

        // User::create([
        //     'name' => 'ilham',
        //     'email' => 'ilham@gmail.com',
        //     'password' => bcrypt("12345"),
        //     'role' => 'siswa'
        // ]);

        // User::create([
        //     'name' => 'rafli',
        //     'email' => 'rafli@gmail.com',
        //     'password' => bcrypt("12345"),
        //     'role' => 'sekertaris'
        // ]);

        // User::create([
        //     'name' => 'muin',
        //     'email' => 'muin@gmail.com',
        //     'password' => bcrypt("12345"),
        //     'role' => 'guru'
        // ]);

        // User::create([
        //     'name' => 'abyaz',
        //     'email' => 'abyaz@gmail.com',
        //     'password' => bcrypt("12345"),
        //     'role' => 'guru'
        // ]);
        user::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'nomor_induk' => '0055606458',
            // 'kelas_id' => '1',
            'alamat' => 'jalan jalan',
            'jenis_kelamin' => 'laki - laki',
            'role' => 'admin'
        ]);

        user::create([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('12345'),
            'nomor_induk' => '0055606457',
            // 'kelas_id' => '1',
            'alamat' => 'jalan kaki',
            'jenis_kelamin' => 'laki - laki',
            'role' => 'admin'
        ]);

     
        // user::create([
        //     'name' => 'ach nur icrchamul',
        //     'email' => 'icrchamul@gmail.com',
        //     'password' => bcrypt('12345'),
        //     'nomor_induk' => '0055606455',
        //     'alamat' => 'malas jalan',
        //     'kelas_id' => '2',
        //     'jenis_kelamin' => 'laki - laki',
        //     'role' => 'siswa'
        // ]);

        // user::create([
        //     'name' => 'BILQIST ALMA FADHILAH',
        //     'email' => 'bilqis@gmail.com',
        //     'password' => bcrypt('12345'),
        //     'nomor_induk' => '0055606455',
        //     'alamat' => 'jalan kaki',
        //     'kelas_id' => '2',
        //     'jenis_kelamin' => 'perempuan',
        //     'role' => 'siswa'
        // ]);
    }
}
