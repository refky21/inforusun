<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TagihanMemberController extends Controller
{
    public function index(Request $req)
    {
        $Penyewa = $req->session()->get('Penyewa');

       //  dd($Penyewa);

        $data = DB::select("
        SELECT t.*,t.sewa_bulan+t.listrik+t.air+t.kebersihan AS total_pembayaran,
t.t_sewa_bulan+t.t_listrik+t.t_air+t.t_kebersihan AS total_tagihan,
(t.t_sewa_bulan+t.t_listrik+t.t_air+t.t_kebersihan)-(t.sewa_bulan+t.listrik+t.air+t.kebersihan) AS total_tunggakan
FROM
(
SELECT us.nama_unit AS nama_unit,   
         penyewa.nama AS nama_penyewa,
			b.nama_bulan AS nama_bulan,
         (select ifnull(sum(pd.jumlah),0) from pembayaran_detail pd
                inner join pembayaran p on p.pembayaran_id=pd.pembayaran_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 1 
					 and pd.tahun = 2020 AND pd.bulan = b.bulan_id
					 ) AS sewa_bulan,
         (select ifnull(sum(pd.jumlah),0) from pembayaran_detail pd
                inner join pembayaran p on p.pembayaran_id=pd.pembayaran_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 2 
					 and pd.tahun = case b.bulan_id when 1 then 2020-1 else 2020 end AND pd.bulan = case b.bulan_id when 1 then 12 else b.bulan_id-1 end
					 ) AS listrik,
         (select ifnull(sum(pd.jumlah),0) from pembayaran_detail pd
                inner join pembayaran p on p.pembayaran_id=pd.pembayaran_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 3 
					 and pd.tahun = case b.bulan_id when 1 then 2020-1 else 2020 end AND pd.bulan = case b.bulan_id when 1 then 12 else b.bulan_id-1 end
					 ) AS air,
         (select ifnull(sum(pd.jumlah),0) from pembayaran_detail pd
                inner join pembayaran p on p.pembayaran_id=pd.pembayaran_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 4 
					 and pd.tahun = 2020 AND pd.bulan = b.bulan_id
					 ) AS kebersihan,
         (select ifnull(sum(pd.jumlah),0) from tagihan_detail pd
                inner join tagihan p on p.tagihan_id=pd.tagihan_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 1 
					 and pd.tahun = 2020 AND pd.bulan = b.bulan_id
					 ) AS t_sewa_bulan,
         (select ifnull(sum(pd.jumlah),0) from tagihan_detail pd
                inner join tagihan p on p.tagihan_id=pd.tagihan_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 2 
					 and pd.tahun = case b.bulan_id when 1 then 2020-1 else 2020 end AND pd.bulan = case b.bulan_id when 1 then 12 else b.bulan_id-1 end
					 ) AS t_listrik,
         (select ifnull(sum(pd.jumlah),0) from tagihan_detail pd
                inner join tagihan p on p.tagihan_id=pd.tagihan_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 3 
					 and pd.tahun = case b.bulan_id when 1 then 2020-1 else 2020 end AND pd.bulan = case b.bulan_id when 1 then 12 else b.bulan_id-1 end
					 ) AS t_air,
         (select ifnull(sum(pd.jumlah),0) from tagihan_detail pd
                inner join tagihan p on p.tagihan_id=pd.tagihan_id
                where p.check_in_id = ci.check_in_id and pd.item_pembayaran_id = 4 
					 and pd.tahun = 2020 AND pd.bulan = b.bulan_id
					 ) AS t_kebersihan
     FROM penyewa 
inner join bulan b
on b.bulan_id < 13
INNER JOIN check_in ci
ON ( penyewa.penyewa_id = ci.penyewa_id )
INNER JOIN unit_sewa us
on us.unit_sewa_id=ci.unit_sewa_id 
where ci.penyewa_id =  $Penyewa->Penyewa_Id
order by b.bulan_id
) AS t
        ");


       //  dd($data);

        return view('tagihan.index', compact('Penyewa','data'));
    }
}
