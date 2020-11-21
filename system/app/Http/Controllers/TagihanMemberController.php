<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanMemberController extends Controller
{
    public function index(Request $req)
    {
        $Penyewa = $req->session()->get('Penyewa');


        

        dd($Penyewa);
    }
}
