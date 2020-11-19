@extends('template._master')
@section('PageTitle', 'Login Area')
@section('header')
<!-- Bagian Header -->

@endsection

@section('content')
<main>   
        <div class="px-3">  
            <div class="theme-container">  
                <div class="row center-xs middle-xs my-5"> 
                    <div class="mdc-card p-3 p-relative mw-500px">
                        <div class="column center-xs middle-xs text-center">  
                            <h1 class="uppercase">Sign In</h1>
                            <a href="#" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100">
                               Hubungi Petugas Rusun Untuk Login
                            </a>  
                        </div>
                        <form action="{{url('/member/validasi')}}" method="post">  
                        @csrf
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                           
                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
                                <input class="mdc-text-field__input" name="kode_cekin">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Kode Penyewa</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                                <i class="material-icons mdc-text-field__icon text-muted" tabindex="1" id="password-toggle">visibility_off</i>
                                <input class="mdc-text-field__input" type="password" name="password">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div> 
                            
                            <div class="text-center mt-2"> 
                                <button class="mdc-button mdc-button--raised bg-accent" type="submit">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Sign to My Account</span> 
                                </button>
                            </div>  
                           
                              
                        </form>
                        <div class="row end-xs middle-xs"> 
                            <a href="#" class="mdc-button normal">
                                <span class="mdc-button__ripple"></span>
                                <i class="material-icons mdc-button__icon">vpn_key</i>
                                <span class="mdc-button__label">Reset Password</span> 
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