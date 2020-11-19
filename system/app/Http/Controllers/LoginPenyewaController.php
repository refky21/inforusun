<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
class LoginPenyewaController extends Controller
{
    public function index(Request $req)
    {

        $Penyewa = $req->session()->get('Penyewa');
        if($Penyewa !=null){
            // dd($Penyewa);

            $mstr_rusun = DB::table('mstr_rusun')->where('info_id', $Penyewa->Rusun_Id)->first();
            $mstr_unit = DB::table('unit_sewa')->where('Rusun_Id', $mstr_rusun->info_id)->first();
            $keluarga = DB::table('penyewa_keluaraga')->where('Penyewa_Id', $Penyewa->Penyewa_Id)
            ->join('hubungan_keluarga','penyewa_keluaraga.Hub_Keluarga_Id','=','hubungan_keluarga.Hub_Keluarga_Id')
            ->get();

            // dd($keluarga);

           return view('member.profile', compact('Penyewa'))
            ->with('rusun', $mstr_rusun)
            ->with('unit', $mstr_unit)
            ->with('keluarga', $keluarga)
            ;
        }else{

            return view('login.masuk', compact('Penyewa'));
        }

    }


    public function validasi(Request $req)
    {

        $No_Reg = $req->kode_cekin;
        $Pass = substr($req->password,4,4). '-'.substr($req->password,2,2).'-'.substr($req->password,0,2);
        

        $Penyewa1 = DB::table('penyewa')
        ->where('No_Reg' , $No_Reg)
        // ->where('Tgl_Lahir' , $Pass)
        ->first();

        
        if($Penyewa1 != null){
            if($Penyewa1->No_Reg == $No_Reg){
                if($Penyewa1->Tgl_Lahir == $Pass){
                    $Penyewa = DB::table('penyewa')
                    ->where('No_Reg' , $No_Reg)
                    ->where('Tgl_Lahir' , $Pass)
                    ->first();
                     if($Penyewa != null){
                        $session =  $req->session()->put('Penyewa', $Penyewa);
                    }elseif($Penyewa == null && $req->session()->get('Penyewa') !=null){
                        $Penyewa = $req->session()->get('Penyewa');
                    }
                }else{
                    $pesan = Session::flash('pass', 'Password Salah');
                }
            }else{
                $pesan = Session::flash('pass', 'Nomor Register Salah'); 
            }
            
        }else{
            $pesan = Session::flash('gagal','Akun Anda Tidak Terdaftar');
        }

        // if($Penyewa != null){
        //     $session =  $req->session()->put('Penyewa', $Penyewa);
        // }elseif($Penyewa == null && $req->session()->get('Penyewa') !=null){
        //     $Penyewa = $req->session()->get('Penyewa');
        // }

        return redirect('member');
        // dd($Penyewa);
    }



    public function logout(Request $req)
    {
        $req->session()->forget('Penyewa');

        return redirect('/');
    }
}
