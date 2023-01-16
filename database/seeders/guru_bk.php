<?php

namespace Database\Seeders;

use App\Models\bk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class guru_bk extends Seeder
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
            'jenis kelamin' => 'perempuan',
            'user_id' => '1',
        ]);
    }
}
