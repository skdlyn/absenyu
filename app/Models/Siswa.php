<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'kelas',
        'jk',

    ];
    protected $table = 'siswa';

    public function kelas()
    {
        return $this->belongsToMany('App\Models\Kelas', 'id_siswa', 'id_kelas');
    }
    public function absensi()
    {   
        return $this->belongsToMany('App\Models\Kelas', 'absensi', 'id_siswa', 'id_kelas')->withPivot('status', 'tanggal', 'keterangan')->wherePivot('tanggal', Carbon::now('Asia/Jakarta'));
    }

}