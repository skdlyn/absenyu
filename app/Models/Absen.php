<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
    'tanggal',
    'status',
    'keterangan'
    ];
    
    protected $table='absen';
    
    public function surat()
    {
        return $this->belongsToMany('App\Models\Siswa');
    }
}

