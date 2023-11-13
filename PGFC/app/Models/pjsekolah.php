<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjsekolah extends Model
{
    use HasFactory;

    
protected $table = 'pjsekolah';
protected $fillable = [
        'id',
        'pj_sekolah_id',
        'nama_kepala_sekolah',
        'alamat_kepala_seklah',
        'telp',
        'hp',
        'email',
        'filerekomendasi',
        
    ];

    public function dataSekolah()
    {
        return $this->belongsTo(DataSekolah::class, 'data_sekolah_id', 'id');
    }
    
    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'pj_sekolah_id', 'id');
    }

}
