<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = 'pemain';

    // Mendefinisikan relasi bahwa setiap Pemain dimiliki oleh satu DataSekolah
    public function dataSekolah()
    {
        return $this->belongsTo(DataSekolah::class, 'data_sekolah_id', 'id');
    }

    public function pjsekolah(){
        return $this->belongsTo(Pjsekolah::class,'pj_sekolah_id','id');
    }

    public function pjtim(){
        return $this->belongsTo(PjTim::class,'pj_tim_id','id');
    }
    public function datapelatih(){
        return $this->belongsTo(Datapelatih::class,'data_pelatih_id','id');
    }
 

    public function dataofficial(){
        return $this->belongsTo(Dataofficial::class,'data_sekolah_id','id');
    }

    public function datamanajer(){
        return $this->belongsTo(Datamanajer::class,'data_manajer_id','id');
    }

    public function datasupportersiswa(){
        return $this->belongsTo(Datasuportersiswa::class,'data_supportersiswa_id','id');
    }

    public function datasupporterguru(){
        return $this->belongsTo(Datasuporguru::class,'data_supporterguru_id','id');
    }
}
