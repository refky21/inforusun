@extends('template._master')
@section('PageTitle', 'Profile')
@section('header')
<!-- Bagian Header -->

@endsection

@section('content')

<main>   
        <div class="px-3">  
            <div class="theme-container">  
                <div class="page-drawer-container single-property mt-3"> 
                    <div class="page-sidenav-content">
                        <div class="mdc-card row between-xs middle-xs p-3">             
                            <div>
                                <h2 class="uppercase">{{$rusun->nama_rusun}}</h2>
                                <p class="row flex-nowrap address mb-0">
                                    <i class="material-icons text-muted">location_on</i>
                                    <span class="fw-500 text-muted">{{$rusun->alamat_rusun}}</span>
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Details Unit</h2>  
                            <div class="row details">
                                
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Kode Unit:</span>
                                        <span>{{$unit->Kode_Unit}}</span>
                                </div> 
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Nama Unit:</span>
                                    <span>{{$unit->Nama_Unit}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Lantai Rusun:</span>
                                    <span>{{$unit->Lantai}}</span>
                                </div> 
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Tipe Sewa:</span>
                                    <span>{{$unit->Tipe_Sewa_Id}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Alamat:</span>
                                    <span>{{$rusun->alamat_rusun}}</span>
                                    
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Tarif Sewa:</span>
                                    <span>Rp. {{ number_format($unit->Tarif,0,',','.')}}</span>
                                </div>
                                
                            </div>   
                        </div>
                        
                        <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Data Keluarga</h2>  
                            <div class="row details">
                            @foreach($keluarga as $kel)
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Nama :</span>
                                    <span>{{$kel->Nama}}</span>
                                </div>
                                <div class="row col-xs-12 col-sm-6 item">
                                    <span>Hubungan Keluarga:</span>
                                    <span>{{$kel->Nama_Hub_Keluarga}}</span>
                                </div>
                                
                            @endforeach
                                
                            </div> 
                        </div>
                        <div class="mdc-card p-3 mt-3"> 
                            <h2 class="uppercase text-center fw-500 mb-2">Daftar Tunggakan</h2>  
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, suscipit, numquam accusantium eligendi veniam dolor placeat earum illo corporis esse nulla facere sunt assumenda? Perferendis omnis magni quos fugiat explicabo.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit laboriosam voluptates dignissimos? Dolorum sed culpa repellat, itaque quas nostrum, eos qui nemo fugit reiciendis laboriosam vero magnam nam, dolorem officia.</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus voluptas assumenda ab, quos sequi rerum. Quos iusto ab alias, exercitationem autem a doloribus non. Vel porro tenetur omnis ut numquam.</p>
                        </div>
                        
                        
                       
                       

                        
                    </div>  
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card p-3"> 
                            <div class="widget">  
                                <div class="mdc-card o-hidden">
                                    <a href="#">
                                    <?php
                                        if($Penyewa->foto != null){
                                    ?>

                                        <img src="https://admin.rusunawakotamagelang.if/foto/{{$Penyewa->foto}}" alt="agent-4" class="d-block mw-100">
                                        <?php } else{
                                            ?>
                                        <img src="assets/images/agents/a-4.jpg" alt="agent-4" class="d-block mw-100">
                                    <?php } ?>
                                    </a>
                                    <div class="p-3">
                                        <h2 class="fw-600">{{$Penyewa->Nama}}</h2> 
                                        
                                        <p class="mt-3 text-muted fw-500">{{$Penyewa->Ktp_Alamat}}</p>                                    
                                        <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">{{$Penyewa->No_Reg}}</span></p>
                                        <p class="row middle-xs"><i class="material-icons primary-color">people</i><span class="mx-2 text-muted fw-500">{{$Penyewa->Jml_Penghuni}}</span></p>
                                        <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">{{$Penyewa->No_Hp}}</span></p>
                                        <div class="row pb-3 p-relative">
                                            <div class="divider"></div>
                                        </div> 
                                        
                                    </div>  
                                </div>  
                            </div>  
                            
                            
                            
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                </div> 
            </div>  
        </div>  
        
        
    </main> 

@endsection


@section('footer')
<!-- Footer Script -->

@endsection