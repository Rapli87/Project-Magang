<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasuportersiswa extends Model
{
    use HasFactory;

    
    protected $table = 'data_pj_supporter_siswa';
protected $fillable = [
        'id',
        'data_supportersiswa_id',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_supportersiswa_id', 'id');
    }
}
