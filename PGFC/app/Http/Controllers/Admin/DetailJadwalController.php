<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class DetailJadwalController extends Controller
{
    
    public function show()
    {
        $detailjadwal = Jadwal::all();
    
        if (!$detailjadwal) {
            abort(404);
        }
    
        return view('pages.admin.Jadwal.show', ['detailjadwal' => $detailjadwal]);
    }
    
  
}
