<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamanajer extends Model
{
    use HasFactory;

    protected $table = 'data_manajer';
protected $fillable = [
        'id',
        'data_manajer_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
        
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_manajer_id', 'id');
    }
}
