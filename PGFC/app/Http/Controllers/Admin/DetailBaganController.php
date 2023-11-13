<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grub;
use Illuminate\Http\Request;

class DetailBaganController extends Controller
{
    public function showdetailBagan(request $request)
    {
        $bagan = Grub::all();
    
        if (!$bagan) {
            abort(404); // Menampilkan halaman 404 jika data tidak ditemukan
        }
    
        return view('pages.admin.Bagan-Championship.ShowBagan', ['bagan' => $bagan]);
    }

    public function index(Request $request)
    {
    
    
        return view('pages.admin.Bagan-Championship.ShowBagan');
        
    }

}
