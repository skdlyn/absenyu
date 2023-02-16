<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\bk;

class XII_RPL_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Guru::create([
        //     'nama' => 'Asmuin',
        //     'nip' => '987654321',
        //     'jenis_kelamin' => 'laki - laki',
        // ]);

        // bk::create([
        //     'nama' => 'windy',
        //     'jenis_kelamin' => 'perempuan'
        // ]);

        kelas::create([
            'nama_kelas' => 'XII RPL 1',
            'tahun_masuk' => '2020-12-31',
            'tahun_keluar' => '2023-12-31',
        ]);

        user::create([
            'name' => 'asmuin',
            'email' => 'asmuin@gmail.com',
            'password' => bcrypt('12345'),
            'nomor_induk' => '0055606455',
            'kelas_id' => '1',
            'alamat' => 'jalanin aja dl ',
            'jenis_kelamin' => 'laki - laki',
            'role' => 'guru'
        ]);

        user::create([
            'name' => 'Abyaz Prince Muhammad',
            'email' => 'abyaz@gmail.com',
            'password' => bcrypt('12345'),
            'nomor_induk' => '0055606455',
            'kelas_id' => '1',
            'alamat' => 'jalanin aja dl ',
            'jenis_kelamin' => 'laki - laki',
            'role' => 'siswa'
        ]);

        user::create([
            'name' => 'ach nur ichamul',
            'email' => 'achnur@gmail.com',
            'password' => bcrypt('12345'),
            'nomor_induk' => '0055606453',
            'kelas_id' => '1',
            'alamat' => 'jalanin aja dl anjeng',
            'jenis_kelamin' => 'laki - laki',
            'role' => 'siswa'
        ]);

        user::create([
            'name' => 'achmad annuru akbar',
            'email' => 'akbar@gmail.com',
            'password' => bcrypt('12345'),
            'nomor_induk' => '0055606451',
            'kelas_id' => '1',
            'alamat' => 'jalanin aja dl ',
            'jenis_kelamin' => 'laki - laki',
            'role' => 'siswa'
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

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'Alief rifqy prasetya',
        //     'alamat' => '11',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'alvina salshabilla linjani putri',
        //     'alamat' => '12',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'ananda ardiansyah hariaji',
        //     'alamat' => '13',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'anderean firmansyah',
        //     'alamat' => '14',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'aprillia dewi sukmawati',
        //     'alamat' => '15',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'arva zaki fanadzan',
        //     'alamat' => '16',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'bilqist alma fadhilah',
        //     'alamat' => '17',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'bima wahyu luckyta',
        //     'alamat' => '18',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'christiano juan rafael',
        //     'alamat' => '19',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'deef vely yustezio arinanda',
        //     'alamat' => '20',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'Dewangga bintang nugroho',
        //     'alamat' => '21',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'dhamar adhi susyatama putra',
        //     'alamat' => '22',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'dharma eka saputra',
        //     'alamat' => '23',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'dimas ogi putra pangestu',
        //     'alamat' => '24',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'diva egalyta putri affandi',
        //     'alamat' => '25',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'elang pandi praonto',
        //     'alamat' => '26',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'farrel aqeel danendra',
        //     'alamat' => '27',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'fernanda satria wibowo',
        //     'alamat' => '28',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'fery ferdiansyah',
        //     'alamat' => '29',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'fitra arie firmansyah',
        //     'alamat' => '30',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'hafidz ridwan cahya',
        //     'alamat' => '31',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'hendra gani fatihul falah',
        //     'alamat' => '32',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'herwan ramadhani',
        //     'alamat' => '33',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'hilzam saiga hamas',
        //     'alamat' => '34',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'm nurcholis septian',
        //     'alamat' => '35',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'triaji pangestu luhur siahaan',
        //     'alamat' => '36',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);

        // siswa::create([
        //     'nisn' => '0055606455',
        //     'nama' => 'Alexander sebastian richard',
        //     'alamat' => '37',
        //     'id_kelas' => '1',
        //     'jk' => 'laki - laki',
        // ]);
    }
}
