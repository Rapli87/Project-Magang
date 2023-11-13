<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grub;
use Illuminate\Http\Request;

class BaganChampionshipController extends Controller
{
    public function index()
    {

        $bagan = Grub::all();
        return view('pages.admin.Bagan-Championship.index',['bagan'=> $bagan]);
    }

    public function show()
    {

        $bagan = Grub::all();
        return view('pages.admin.Bagan-Championship.show',['bagan'=> $bagan]);
    }
}
