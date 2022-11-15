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
        User::create([
            'name' => 'ilham',
            'email' => 'ilham@gmail.com',
            'password' => bcrypt("12345"),
            'role' => 'user'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("12345"),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt("12345"),
            'role' => 'guru'
        ]);

        User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt("12345"),
            'role' => 'siswa'
        ]);
    }
}
