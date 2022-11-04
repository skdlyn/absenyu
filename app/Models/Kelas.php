<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['nama_kelas', 'kuota', 'id_guru','tahun_masuk', 'tahun_keluar'];
    public $timestamps = false;

    public function Siswa()
    {
        return $this->belongsToMany('App\Models\Siswa', 'siswa_kelas', 'kelas_id', 'siswa_id')->withPivot('id_siswa_kelas');
    }
    public function absen()
    {    
        return $this->belongsToMany('App\Models\Siswa', 'absensi', 'kelas_id', 'siswa_id')->withPivot('status', 'tanggal', 'keterangan')->wherePivot('tanggal', Carbon::now('Asia/Jakarta')->format('Y-m-d'));
    }
    
}
