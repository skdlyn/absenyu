<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $fillable =[
        'tanggal',
        'kelas'
    ];

    protected $table = 'rekap';
    
}
