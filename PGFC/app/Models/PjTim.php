<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PjTim extends Model
{
    use HasFactory;

        
protected $table = 'pjtim';
protected $fillable = [
        'id',
        'pj_tim_id',
        'nama',
        'Jabatan',
        'nip',
        'hp',
        'email',
        'foto',
        'ktp',
        
    
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'pj_tim_id', 'id');
    }
    public function datasekolah(){
        return $this->hasMany(Datasekolah::class,'pj_tim_id','id');
    }

}