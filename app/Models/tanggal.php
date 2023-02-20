<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggal extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table= 'tanggal';

    public function absen()
    {
        return $this->hasMany(absen::class);
    }
}
