@extends('template._master')
@section('PageTitle', 'Tentang Rusunawa')
@section('header')
<!-- Bagian Header -->

@endsection

@section('content')

<main class="content-offset-to-top"> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('{{url('assets/images/others/about.jpg')}}');"></div>
            <div class="mask"></div>            
            <div class="header-image-content offset-bottom">
                <h1 class="title">Tentang Rusunawa</h1>
                <p class="desc">Kami membantu anda untuk menemukan hunian yang tepat</p> 
            </div>
        </div>  
        <div class="px-3">  
            <div class="theme-container"> 
                <div class="mdc-card main-content-header pt-0"> 
                    <div class="section pt-0">
                        <div class="px-3">
                            <div class="theme-container">
                                <h1 class="section-title">Tentang Rusunawa</h1> 
                                <p class="px-3">Nam enim diam, euismod in tincidunt in, euismod nec ligula. Aliquam erat volutpat. Integer vulputate lacus a volutpat aliquet. Mauris suscipit sollicitudin purus, et congue lectus dignissim vel. Vestibulum purus arcu, eleifend a odio non, bibendum dictum lectus. Nam vulputate accumsan quam facilisis aliquet. Cras accumsan et elit a consequat.</p>
                                <div class="row"> 
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-3"> 
                                        <div class="row start-xs middle-xs">
                                            <i class="material-icons mat-icon-xlg primary-color">business</i>
                                            <h2 class="capitalize fw-600 mx-2">About company</h2>
                                        </div>                            
                                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse semper lobortis quam, id imperdiet mi feugiat quis. Cras a odio posuere, rhoncus quam vitae, commodo neque. Nunc mollis velit vulputate, volutpat diam vitae, egestas turpis. In posuere tempor lorem, sit amet pulvinar nunc accumsan a. Quisque sem tellus, congue at eleifend sit amet, consectetur sit amet est. Integer sodales quam quis elit commodo consequat. Aenean posuere augue a justo gravida elementum laoreet tincidunt enim. Nullam sagittis mauris id dui scelerisque, eget dignissim est hendrerit. Praesent fringilla commodo egestas. Suspendisse bibendum purus vitae mi mattis laoreet.</p>
                                    </div> 
                                    <div class="col-xs-12 col-sm-12 col-md-6 p-3"> 
                                        <div class="row start-xs middle-xs">
                                            <i class="material-icons mat-icon-xlg primary-color">list_alt</i>
                                            <h2 class="capitalize fw-600 mx-2">Vision</h2>
                                        </div> 
                                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse semper lobortis quam, id imperdiet mi feugiat quis. Cras a odio posuere, rhoncus quam vitae, commodo neque. Nunc mollis velit vulputate, volutpat diam vitae, egestas turpis. In posuere tempor lorem, sit amet pulvinar nunc accumsan a. Quisque sem tellus, congue at eleifend sit amet, consectetur sit amet est. Integer sodales quam quis elit commodo consequat. Aenean posuere augue a justo gravida elementum laoreet tincidunt enim. Nullam sagittis mauris id dui scelerisque, eget dignissim est hendrerit. Praesent fringilla commodo egestas. Suspendisse bibendum purus vitae mi mattis laoreet.</p>
                                    </div> 
                                </div>  
                            </div>
                        </div>   
                    </div>  
                </div>
            </div>  
        </div> 
        <div class="section default">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Misi kami</h1>   
                    <div class="mdc-card p-0 row o-hidden"> 
                        <div class="col-xs-12 col-lg-6 col-xl-6 p-3">            
                           <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">monetization_on</i>
                                    <h2 class="capitalize fw-600 mb-2">save money</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">thumb_up</i>
                                    <h2 class="capitalize fw-600 mb-2">better ideas</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">group</i>
                                    <h2 class="capitalize fw-600 mb-2">collaboration</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-2">
                                    <i class="material-icons mat-icon-xlg primary-color">search</i>
                                    <h2 class="capitalize fw-600 mb-2">easy to find</h2>
                                    <p class="text-muted fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae dolor magnam, facilis voluptas quia excepturi provident cupiditate.</p>
                                </div>
                           </div>                     
                        </div> 
                        <div class="col-xs-12 col-lg-6 col-xl-6 p-0 d-none d-lg-flex d-xl-flex">                    
                            <img src="{{url('assets/images/others/mission.jpg')}}" alt="mission" class="mw-100 d-block">                
                        </div>            
                    </div>
                        
                </div>
            </div>   
        </div> 
        <div class="section mt-3">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Pelayanan Kami</h1>  
                    <div class="services-wrapper row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">            
                                <i class="material-icons mat-icon-xlg primary-color">location_on</i>
                                <h2 class="capitalize fw-600 my-3">Find places anywhere in the world</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>           
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                <i class="material-icons mat-icon-xlg primary-color">supervisor_account</i>
                                <h2 class="capitalize fw-600 my-3">We have agents with experience</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2">  
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">  
                                <i class="material-icons mat-icon-xlg primary-color">home</i>
                                <h2 class="capitalize fw-600 my-3">Buy or rent beautiful properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 p-2"> 
                            <div class="mdc-card h-100 w-100 text-center middle-xs p-3">     
                                <i class="material-icons mat-icon-xlg primary-color">format_list_bulleted</i>
                                <h2 class="capitalize fw-600 my-3">With agent account you can list properties</h2>
                                <p class="text-muted fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum egestas nunc sed ultricies.</p>             
                            </div> 
                        </div>  
                    </div> 
                </div>
            </div>   
        </div>  
        <div class="section testimonials">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Apa Kata Mereka</h1>  
                    <div class="testimonials-carousel"> 
                        <div class="swiper-container">
                            <div class="swiper-wrapper"> 
                                <div class="swiper-slide"> 
                                    <div class="content text-center">
                                         <img src="{{url('assets/images/profile/adam.jpg')}}" alt="adam">
                                        <div class="quote open text-left primary-color">“</div>
                                        <p class="text">Donec molestie turpis ut mollis efficitur. Nam fringilla libero vel dictum vulputate. In malesuada, ligula non ornare consequat, augue nibh luctus nisl, et lobortis justo ipsum nec velit. Praesent lacinia quam ut nulla gravida, at viverra libero euismod. Sed tincidunt tempus augue vitae malesuada. Vestibulum eu lectus nisi. Aliquam erat volutpat.</p>
                                        <div class="quote close text-right primary-color">”</div> 
                                        <h3 class="author">Mr. Adam Sandler</h3>
                                        <p>General Director</p>  
                                    </div>  
                                </div>    
                                <div class="swiper-slide"> 
                                    <div class="content text-center">
                                        <img src="{{url('assets/images/profile/ashley.jpg')}}" alt="ashley">
                                        <div class="quote open text-left primary-color">“</div>
                                        <p class="text">Donec molestie turpis ut mollis efficitur. Nam fringilla libero vel dictum vulputate. In malesuada, ligula non ornare consequat, augue nibh luctus nisl, et lobortis justo ipsum nec velit. Praesent lacinia quam ut nulla gravida, at viverra libero euismod. Sed tincidunt tempus augue vitae malesuada. Vestibulum eu lectus nisi. Aliquam erat volutpat.</p>
                                        <div class="quote close text-right primary-color">”</div> 
                                        <h3 class="author">Ashley Ahlberg</h3>
                                        <p>Housewife</p> 
                                    </div>  
                                </div>  
                                <div class="swiper-slide"> 
                                    <div class="content text-center">
                                        <img src="{{url('assets/images/profile/bruno.jpg')}}" alt="bruno">
                                        <div class="quote open text-left primary-color">“</div>
                                        <p class="text">Donec molestie turpis ut mollis efficitur. Nam fringilla libero vel dictum vulputate. In malesuada, ligula non ornare consequat, augue nibh luctus nisl, et lobortis justo ipsum nec velit. Praesent lacinia quam ut nulla gravida, at viverra libero euismod. Sed tincidunt tempus augue vitae malesuada. Vestibulum eu lectus nisi. Aliquam erat volutpat.</p>
                                        <div class="quote close text-right primary-color">”</div> 
                                        <h3 class="author">Bruno Vespa</h3>
                                        <p>Blogger</p> 
                                    </div>  
                                </div>  
                                <div class="swiper-slide"> 
                                    <div class="content text-center">
                                        <img src="{{url('assets/images/profile/julia.jpg')}}" alt="julia">
                                        <div class="quote open text-left primary-color">“</div>
                                        <p class="text">Donec molestie turpis ut mollis efficitur. Nam fringilla libero vel dictum vulputate. In malesuada, ligula non ornare consequat, augue nibh luctus nisl, et lobortis justo ipsum nec velit. Praesent lacinia quam ut nulla gravida, at viverra libero euismod. Sed tincidunt tempus augue vitae malesuada. Vestibulum eu lectus nisi. Aliquam erat volutpat.</p>
                                        <div class="quote close text-right primary-color">”</div> 
                                        <h3 class="author">Mrs. Julia Aniston</h3>
                                        <p>Marketing Manager</p> 
                                    </div>  
                                </div> 
                            </div>  
                            <div class="swiper-pagination"></div> 
                        </div>  
                    </div> 
                </div>
            </div>   
        </div>  
        
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