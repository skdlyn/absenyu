<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',

    ];
    protected $table = 'guru';

    public function kelas(){
        return $this->hasMany('App\Models\kelas');
    }
}
