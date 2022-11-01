<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['tingkat_kelas', 'nama_kelas', 'kuota', 'tahun_masuk', 'tahun_keluar'];
    public $timestamps = false;
    
}
