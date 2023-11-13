<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
protected $fillable = [
        'id',
        'grub',
        'id_grub',
        'grup_id',
        'id_jadwal',
        'id_tim',
        'id_tim2',
        'tanggal',
        'mulai',
        'selesai',
        'status',
        'skor',
        'id_sekolah',
        'id_user',
        'id_lomba',

        
    ];

    public function grub()
    {
        return $this->hasMany(Grub::class, 'id', 'grup_id');
       
    }

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'pj_sekolah_id', 'id');
    }

    
 

}
