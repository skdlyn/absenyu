<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'id_kelas',
        'jk'

    ];
    protected $table = 'siswa';

    public function kelas()
    {
        return $this->belongsToMany('App\Models\Kelas', 'id_siswa', 'id_kelas')->withPivot('status');
    }
    // public function absensi()
    // {
    //     return $this->belongsTo('App\Models\Absen', 'id_siswa');
    // }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function absen()
    {
        return $this->hasMany('App\Models\Absen', 'id_siswa');
    }

    // public function namasiswa()
    // {
    //     return $this->hasMany('App\Models\Absen');
    // }


}
