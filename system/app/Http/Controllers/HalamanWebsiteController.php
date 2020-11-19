<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanWebsiteController extends Controller
{
    public function index(Request $req)
    {
        $Penyewa = $req->session()->get('Penyewa');
        
           
        return view('halaman.about', compact('Penyewa'));
    }
    public function hubungi(Request $req)
    {
        $Penyewa = $req->session()->get('Penyewa');
        
           
        return view('halaman.contact', compact('Penyewa'));
    }
}
