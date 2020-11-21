<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {

            $Penyewa = $req->session()->get('Penyewa');



            $cek_unit = DB::table('check_in')->get();
            $used_unit = [];
            $i = 0;
            foreach($cek_unit as $un){
                $used_unit[$i]['Unit_Sewa_Id'] = $un->Unit_Sewa_Id;
                $i++;
            }

            $unit_sewa = DB::table('unit_sewa')->join('mstr_rusun','unit_sewa.Rusun_Id','=','mstr_rusun.info_id')
           ->where('Is_Aktif',1)
            ->WhereNotIn('Unit_Sewa_Id', $used_unit)
            ->limit(8)
            ->get();


            // dd($unit_sewa);


        
           
            return view('welcome', compact('Penyewa'))->with('sisa_unit',$unit_sewa);
        

        
    }
}
