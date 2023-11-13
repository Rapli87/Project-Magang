<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemain;
use Illuminate\Http\Request;

class DetailPemainController extends Controller
{
    public function showdetailpemain($id)
    {
        $pemain = Pemain::with('dataSekolah','pjsekolah','pjtim','datapelatih','dataofficial','datasupportersiswa','datasupporterguru')
                     ->find($id);
    
        if (!$pemain) {
            abort(404); // Menampilkan halaman 404 jika data tidak ditemukan
        }
    
        return view('pages.admin.Data-Sekolah.ShowPemain', ['pemain' => $pemain]);
    }
    
}
