<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis kelamin',
    ];

    protected $table = 'bk';

    public function users(){
        return $this->hasMany('App\Models\User');
    }

}
