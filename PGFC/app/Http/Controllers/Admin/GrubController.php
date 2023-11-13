<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grub;

class GrubController extends Controller
{
    
    public function index(Request $request)
    {
    
        $Grub = Grub::all();
        return view('pages.admin.Group-klasmen.index',['Grub' => $Grub]);
    }

}
