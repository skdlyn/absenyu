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
        'id_siswa',
        'status',
        'dokumen'
    ];
<<<<<<< HEAD


=======
    
>>>>>>> be46e3ebc55eece5beeb6d0978055c629396a28a
    protected $table = 'absen';

    // public function surat()
    // {
    //     return $this->belongsToMany('App\Models\Siswa');
    // }

    // public function siswa(){
    //     return $this->hasMany('App\Models\Siswa', 'id_siswa');
    // }

    // public function siswa()
    // {
    //     return $this->belongsTo('App\Models\Siswa', 'id_siswa');
    // }
    
    // public function siswa()
    // {
    //     return $this->belongsTo('App\Models\Siswa');
    // }

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }

    public function kelas()
    {
        // return $this->belongsTo(siswa::class, 'kelas_id');
        return $this->belongsTo('App\Models\Siswa', 'kelas_id');
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

}
