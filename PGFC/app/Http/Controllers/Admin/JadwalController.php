<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grub;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
    
        $Jadwal = Jadwal::with('grub')->get();
        return view('pages.admin.Jadwal.index',['Jadwal' => $Jadwal]); 


    }


    
}
