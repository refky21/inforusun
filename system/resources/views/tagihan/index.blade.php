@extends('template._master')
@section('PageTitle', 'Tagihan Penyewa')
@section('header')
<!-- Bagian Header -->

@endsection

@section('content')
<main>  
        <div class="px-3">  
            <div class="theme-container">  
                <div class="mdc-card mt-5 p-5"> 
                    <div class="row agent-wrapper">
                        
                        <div class="col-xs-12 col-sm-6 col-md-12 p-3">
                            <h2 class="fw-600">Total Tagihan | {{$Penyewa->Nama}}</h2>
                            <div class="mdc-data-table border-1 w-100 mt-2">
                                <table class="mdc-data-table__table" aria-label="Dessert calories" border="1px">
                                    <thead>
                                            <tr>
                                                <th class="mdc-data-table__header-cell text-center" rowspan="2">No</th>
                                                <th class="mdc-data-table__header-cell text-center" rowspan="2">Bulan</th>
                                                <th class="mdc-data-table__header-cell text-center" colspan="5">Tagihan</th>
                                                <th class="mdc-data-table__header-cell text-center" colspan="5">Pembayaran</th>
                                                <th class="mdc-data-table__header-cell text-center" rowspan="2">Total Tunggakan</th>
                                            </tr>
                                        <tr class="mdc-data-table__header-row">
                                            <th class="mdc-data-table__header-cell">U Sewa</th>
                                            <th class="mdc-data-table__header-cell">Listrik</th>
                                            <th class="mdc-data-table__header-cell">Air</th>
                                            <th class="mdc-data-table__header-cell">Kebersihan</th>
                                            <th class="mdc-data-table__header-cell">Total</th>

                                            <th class="mdc-data-table__header-cell">U Sewa</th>
                                            <th class="mdc-data-table__header-cell">Listrik</th>
                                            <th class="mdc-data-table__header-cell">Air</th>
                                            <th class="mdc-data-table__header-cell">Kebersihan</th>
                                            <th class="mdc-data-table__header-cell">Total</th>

                                        </tr>
                                        
                                    </thead>
                                    <tbody class="mdc-data-table__content">
                                    <?php
                                        $no = 1;
                                        $i = 0;
                                        $sewa_bulan = 0;
                                        $listrik = 0;
                                        $air = 0;
                                        $kebersihan = 0;
                                        $total_tagihan = 0;
                                        $t_sewa_bulan = 0;
                                        $t_listrik = 0;
                                        $t_air = 0;
                                        $t_kebersihan = 0;
                                        $total_pembayaran = 0;
                                        $total_tunggakan = 0;
                                        foreach ($data as $value) {
                                        ?>
                                         
                                        <tr class="mdc-data-table__row">
                                            <td class="mdc-data-table__cell text-center">{{$no++}}</td>
                                            <td class="mdc-data-table__cell">{{$data[$i]->nama_bulan}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->sewa_bulan,0,',','.')}} </td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->listrik,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->air,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->kebersihan,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->total_tagihan,0,',','.')}} </td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->t_sewa_bulan,0,',','.')}} </td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->t_listrik,0,',','.')}} </td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->t_air,0,',','.')}} </td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->t_kebersihan,0,',','.')}} </td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->total_pembayaran,0,',','.')}} </td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($data[$i]->total_tunggakan,0,',','.')}} </td>
                                        </tr>
                                    
                                    <?php
                                            $sewa_bulan += $data[$i]->sewa_bulan;
                                            $listrik += $data[$i]->listrik;
                                            $air += $data[$i]->air;
                                            $kebersihan += $data[$i]->kebersihan;
                                            $total_tagihan += $data[$i]->total_tagihan;
                                            $t_sewa_bulan += $data[$i]->t_sewa_bulan;
                                            $t_listrik += $data[$i]->t_listrik;
                                            $t_air += $data[$i]->t_air;
                                            $t_kebersihan += $data[$i]->t_kebersihan;
                                            $total_pembayaran += $data[$i]->total_pembayaran;
                                            $total_tunggakan += $data[$i]->total_tunggakan;
                                    $i++;
                                        }
                                    
                                        ?>
                                        <tr class="mdc-data-table__row">
                                            <td class="mdc-data-table__cell text-right" colspan="2">TOTAL</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($sewa_bulan,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($listrik,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($air,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($kebersihan,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($total_tagihan,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($t_sewa_bulan,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($t_listrik,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($t_air,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($t_kebersihan,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($total_pembayaran,0,',','.')}}</td>
                                            <td class="mdc-data-table__cell text-right">{{number_format($total_tunggakan,0,',','.')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                            
                                                  
                        </div>
                        
                    </div>
                </div> 
                
                <div class="get-in-touch bg-primary"> 
                    <img src="assets/images/others/operator.png" alt="operator" class="d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">        
                    <div class="row between-xs middle-xs content"> 
                        <div class="column p-3">
                            <h2>Anda Butuh Hunian Rumah Susun?</h2>
                            <p class="mb-0">Dengan Harga Murah dan Perawatan Berkala.</p>
                        </div>
                        <div class="row start-xs middle-xs p-3">
                            <i class="material-icons mat-icon-xlg mx-2">call</i>
                            <div class="column">               
                                <p class="mb-0">Hubungi Kami Sekarang</p>
                                <h2 class="ws-nowrap">(+100) 123 456 7890</h2>
                            </div>
                        </div>
                        <div class="p-3">
                            <a href="javascript:void(0);" class="mdc-button mdc-button--raised mx-3">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Telpon</span> 
                            </a>  
                        </div>
                    </div>
                </div>
            </div>  
        </div>  
    </main>



@endsection


@section('footer')
<!-- Footer Script -->

@endsection