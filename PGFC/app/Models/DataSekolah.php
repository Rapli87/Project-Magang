<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    use HasFactory;

protected $table = 'data_sekolahs';
protected $fillable = [
        'id',
        'Nama_Sekolah',
        'Telp',
        'Fax',
        'Email',
        'password',
        'Tanggal_update',
        'Logo',
    ];

    public function pemain()
    {
        return $this->hasMany(Pemain::class, 'data_sekolah_id', 'id');
    }
}
