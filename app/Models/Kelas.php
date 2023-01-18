<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Kelas extends Model
{
    protected $fillable = [
        'nama_kelas',
        'kuota',
        'tahun_masuk',
        'tahun_keluar',
        'id_guru',

    ];
    protected $table = 'kelas';

    public function Siswa()
    {
        return $this->hasMany('App\Models\Siswa', 'id_kelas');
    }

    public function absen()
    {
        return $this->belongsToMany('App\Models\Siswa', 'absensi', 'kelas_id', 'siswa_id')->withPivot('status', 'tanggal', 'keterangan')->wherePivot('tanggal', Carbon::now('Asia/Jakarta')->format('Y-m-d'));
    }

    public function guru(){
        return $this->belongsTo('App\Models\guru', 'id');
    }
}
