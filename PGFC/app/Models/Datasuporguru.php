<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasuporguru extends Model
{
    use HasFactory;

    protected $table = 'data_supporter_guru';
protected $fillable = [
        'id',
        'data_dataSuporterguru_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
            
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_dataSuporterguru_id', 'id');
    }
    
}
