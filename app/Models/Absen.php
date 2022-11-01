<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Absen extends Model
{
    protected $table='absensi';
    protected $primaryKey = 'id_absensi';
    
    public function siswa()
    {
        return $this->belongsToMany('App\Models\Siswa');
    }
}

