@extends('template._master')
@section('PageTitle', 'Hubungi Kami')
@section('header')
<!-- Bagian Header -->

@endsection

@section('content')
<main class="content-offset-to-top main-toolbar-fixed"> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('{{url('assets/images/others/contact.jpg')}}');"></div>
            <div class="mask"></div>            
            <div class="header-image-content offset-bottom">
                <h1 class="title">Contact Us</h1>
                <p class="desc">Got a question? We'll give you straight answer</p> 
            </div>
        </div>  
        <div class="px-3">  
            <div class="theme-container"> 
                <div class="mdc-card main-content-header mb-5"> 
                    <div class="row around-xs">
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">home</i>
                                <h3 class="primary-color py-1">ADDRESS :</h3>
                                <span class="text-muted fw-500">2903 Avenue Z, Brooklyn, New York City</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">call</i>
                                <h3 class="primary-color py-1">PHONES :</h3>
                                <span class="text-muted fw-500">(212) 457-2308</span>
                                <span class="text-muted fw-500">(212) 457-2309</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="column center-xs middle-xs text-center">
                                <i class="material-icons mat-icon-lg primary-color">mail_outline</i>
                                <h3 class="primary-color py-1">E-MAIL :</h3>
                                <span class="text-muted fw-500">contact@housekey.com</span>
                                <span class="text-muted fw-500">info@housekey.com</span>
                            </div>
                        </div> 
                        <div class="col-xs-12 mt-3 px-3 p-relative">
                            <div class="divider w-100"></div>
                        </div> 
                        <h3 class="w-100 text-center py-3">CONTACT US</h3> 
                        <form action="javascript:void(0);" class="contact-form row"> 
                            <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100">
                                    <input class="mdc-text-field__input" placeholder="Name is required">
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label" style="">Name</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100">
                                    <input class="mdc-text-field__input" placeholder="Email is required">
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label" style="">Email</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-xs-12 col-sm-12 col-md-4 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined w-100">
                                    <input class="mdc-text-field__input" placeholder="Phone is required">
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label" style="">Phone</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div> 
                            </div>  
                            <div class="col-xs-12 p-2">  
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100">
                                    <textarea class="mdc-text-field__input" rows="5" placeholder="Message is required"></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label" style="">Message</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>   
                            <div class="col-xs-12 w-100 py-3 text-center">
                                <button class="mdc-button mdc-button--raised mdc-ripple-upgraded" type="submit">
                                    <span class="mdc-button__ripple"></span> 
                                    <span class="mdc-button__label">Submit</span> 
                                </button>   
                            </div> 
                        </form>  
                    </div> 
                    
                </div>
            </div>  
        </div>  
    </main>

        
        <div class="px-3">
            <div class="theme-container">  
                <div class="get-in-touch bg-primary"> 
                    <img src="{{url('assets/images/others/operator.png')}}" alt="operator" class="d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">        
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