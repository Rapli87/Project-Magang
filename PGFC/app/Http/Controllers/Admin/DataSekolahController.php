<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemain;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class DataSekolahController extends Controller
{
    public function index(Request $request)
    {
    
        $DataSekolah = DataSekolah::all();
        return view('pages.admin.Data-Sekolah.index',['DataSekolah' => $DataSekolah]);
    }

    public function show($id) {
        $dataSekolah = DataSekolah::with('pemain')->find($id);
    
        if (!$dataSekolah) {
            abort(404);
        }
    
        return view('Pages.admin.Data-Sekolah.show', compact('dataSekolah'));
    }
    

    public function delete($id){
        $dataSekolah = DataSekolah::find($id);

        if (!$dataSekolah) {
            return response()->json('DataSekolah')->with(['error' => 'Data Sekolah tidak ditemukan']);

        }
        $dataSekolah->delete();
        return redirect()->route('Data-Sekolah.index')->with(['success' => 'Data Sekolah berhasil dihapus']);
        
    }

    public function cetakdatasekolah(Request $request)
    {
        $dtCetakDataSekolah = DataSekolah::orderBy('id', 'desc')->orderBy('Nama_Sekolah', 'asc')->orderBy('Telp', 'desc')->orderBy('Fax', 'asc')->orderBy('Email', 'desc')->orderBy('password', 'asc')->orderBy('Tanggal_update', 'desc')->orderBy('Logo', 'asc')->get();
        return view('pages.admin.Data-Sekolah.CetakDataSekolah', compact('dtCetakDataSekolah'));
    }

}

