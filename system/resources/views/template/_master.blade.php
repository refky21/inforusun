<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rusunawa -  @yield('PageTitle')</title> 
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
    <link rel="stylesheet" href="{{ asset('css/libs/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/material-components-web.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/skins/blue.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">   
    @yield('header')
</head>
<body class="mdc-theme--background"> 
    <div class="spinner-wrapper" id="preloader">
        <div class="spinner-container">
            <div class="spinner-outer">
                <div class="spinner">
                    <div class="left mask">
                        <div class="plane"></div>  
                    </div>            
                    <div class="top mask">
                        <div class="plane"></div>
                    </div>
                    <div class="right mask">
                        <div class="plane"></div>  
                    </div>            
                    <div class="triangle">
                        <div class="triangle-plane"></div> 
                    </div>
                    <div class="top-left mask">
                        <div class="plane"></div>
                    </div>
                    <div class="top-right mask">
                        <div class="plane"></div>
                    </div>            
                </div>
                <p class="spinner-text">HouseKey</p> 
            </div>
        </div>
    </div> 
    <div class="options transition">
        <button id="options-toggle" class="mdc-button options-icon mdc-elevation--z0"> 
            <i class="material-icons m-0 palette">palette</i>
            <i class="material-icons m-0 close">close</i>
        </button>
        <div class="mdc-card column between-xs middle-xs">
            <div class="skin-primary blue" data-name="blue"></div>
            <div class="skin-primary green" data-name="green"></div>
            <div class="skin-primary red" data-name="red"></div>
            <div class="skin-primary pink" data-name="pink"></div>
            <div class="skin-primary purple" data-name="purple"></div>
            <div class="skin-primary grey" data-name="grey"></div> 
            <div class="skin-primary orange-dark" data-name="orange-dark"><div class="skin-secondary"></div></div> 
        </div> 
    </div>  
    <aside class="mdc-drawer mdc-drawer--modal sidenav">
        <div class="row end-xs middle-xs py-1 px-3">
            <button id="sidenav-close" class="mdc-icon-button material-icons warn-color">close</button> 
        </div>
        <hr class="mdc-list-divider m-0">
        <div class="mdc-drawer__content"> 
            <div class="vertical-menu">   
                <div class="mdc-menu-surface--anchor"> 
                    <a href="javascript:void(0);" class="mdc-button menu-item-has-children"> 
                        <span class="mdc-button__ripple"></span> 
                        <span class="mdc-button__label">Home</span>
                    </a>  
                    <div class="mdc-menu mdc-menu-surface">
                        <div class="mdc-list"> 
                            <div> 
                                <a href="header-default.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Header default</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="header-image.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Header image</span> 
                                </a>  
                            </div>  
                            <div> 
                                <a href="header-carousel.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Header carousel</span> 
                                </a>  
                            </div>
                            <div class="mdc-menu-surface--anchor"> 
                                <div>
                                    <a href="#" class="mdc-button menu-item-has-children"> 
                                        <span class="mdc-button__ripple"></span> 
                                        <span class="mdc-button__label">Toolbar</span> 
                                    </a> 
                                </div> 
                                <div class="mdc-menu mdc-menu-surface">
                                    <div class="mdc-list"> 
                                        <div> 
                                            <a href="header-default.html" class="mdc-button"> 
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Toolbar version 1</span> 
                                            </a>  
                                        </div>
                                        <div> 
                                            <a href="toolbar-2.html" class="mdc-button"> 
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Toolbar version 2</span> 
                                            </a>  
                                        </div> 
                                    </div>
                                </div>                                          
                            </div>  
                        </div>
                    </div>  
                </div>   
                <div>
                    <a href="properties.html" class="mdc-button">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Properties</span> 
                    </a> 
                </div>  
                <div class="mdc-menu-surface--anchor"> 
                    <a href="javascript:void(0);" class="mdc-button menu-item-has-children"> 
                        <span class="mdc-button__ripple"></span> 
                        <span class="mdc-button__label">Pages</span> 
                    </a>  
                    <div class="mdc-menu mdc-menu-surface">
                        <div class="mdc-list"> 
                            <div> 
                                <a href="property.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Single Property</span> 
                                </a>  
                            </div><div> 
                                <a href="agents.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Agents</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="agent.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Agent</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="login.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Login</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="register.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Register</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="faqs.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">FAQs</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="pricing.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Pricing</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="terms.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Terms & Conditions</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="index.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Landing</span> 
                                </a>  
                            </div>
                            <div> 
                                <a href="404.html" class="mdc-button"> 
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">404 Page</span> 
                                </a>  
                            </div> 
                            <div class="mdc-menu-surface--anchor"> 
                                <a href="#" class="mdc-button menu-item-has-children"> 
                                    <span class="mdc-button__ripple"></span> 
                                    <span class="mdc-button__label">Other</span> 
                                </a> 
                                <div class="mdc-menu mdc-menu-surface">
                                    <div class="mdc-list"> 
                                        <div> 
                                            <a href="http://themeseason.com/" target="_blank" class="mdc-button"> 
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">External Link</span> 
                                            </a>  
                                        </div>
                                        <div> 
                                            <a href="#" class="mdc-button"> 
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Menu Item</span> 
                                            </a>  
                                        </div>
                                        <div> 
                                            <a href="#" class="mdc-button"> 
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Menu Item</span> 
                                            </a>  
                                        </div>
                                    </div>
                                </div>                                          
                            </div> 
                        </div>
                    </div>  
                </div> 
                <div>
                    <a href="contact.html" class="mdc-button">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Contact</span> 
                    </a> 
                </div> 
                <div>
                    <a href="about.html" class="mdc-button">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">About us</span> 
                    </a> 
                </div>  
            </div>  
        </div>
        <hr class="mdc-list-divider m-0">
        <div class="row center-xs middle-xs py-3">
            <a href="https://www.facebook.com/" target="blank" class="social-icon">
                <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
                    <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                </svg>
            </a>
            <a href="https://twitter.com/" target="blank" class="social-icon">
                <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
                    <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                </svg> 
            </a>
            <a href="https://www.linkedin.com/" target="blank" class="social-icon"> 
                <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
                    <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                </svg>
            </a>
            <a href="https://plus.google.com/" target="blank" class="social-icon"> 
                <svg class="material-icons mat-icon-xlg primary-color" viewBox="0 0 24 24">
                    <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M19.5,12H18V10.5H17V12H15.5V13H17V14.5H18V13H19.5V12M9.65,11.36V12.9H12.22C12.09,13.54 11.45,14.83 9.65,14.83C8.11,14.83 6.89,13.54 6.89,12C6.89,10.46 8.11,9.17 9.65,9.17C10.55,9.17 11.13,9.56 11.45,9.88L12.67,8.72C11.9,7.95 10.87,7.5 9.65,7.5C7.14,7.5 5.15,9.5 5.15,12C5.15,14.5 7.14,16.5 9.65,16.5C12.22,16.5 13.96,14.7 13.96,12.13C13.96,11.81 13.96,11.61 13.89,11.36H9.65Z" />
                </svg>
            </a>
        </div>  
    </aside>
    <div class="mdc-drawer-scrim sidenav-scrim"></div>  
    <header class="toolbar-1">  
        <div id="top-toolbar" class="mdc-top-app-bar"> 
            <div class="theme-container row between-xs middle-xs h-100">
                <div class="row start-xs middle-xs">  
                    <button id="sidenav-toggle" class="mdc-button mdc-ripple-surface d-md-none d-lg-none d-xl-none">
                        <span class="mdc-button__ripple"></span>
                        <i class="material-icons">menu</i>
                    </button>
                    <div class="row start-xs middle-xs fw-500 d-none d-md-flex d-lg-flex d-xl-flex"> 
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm">call</i>
                            <span class="px-1">(+100) 123 456 7890</span>
                        </span>
                        <span class="v-divider"></span> 
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm">location_on</i> 
                            <span class="px-1">2903 Avenue Z, Brooklyn, NY, USA</span>
                        </span>
                        <span class="v-divider"></span>
                        <span class="d-flex center-xs middle-xs item">
                            <i class="material-icons mat-icon-sm">mail</i>  
                            <span class="px-1">info@housekey.com</span>
                        </span>  
                    </div>       
                </div> 
                <div class="row start-xs middle-xs d-none d-lg-flex d-xl-flex">
                    <a href="https://www.facebook.com/" target="blank" class="social-icon">
                        <svg class="material-icons" viewBox="0 0 24 24">
                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/" target="blank" class="social-icon">
                        <svg class="material-icons" viewBox="0 0 24 24">
                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                        </svg> 
                    </a>
                    <a href="https://www.linkedin.com/" target="blank" class="social-icon"> 
                        <svg class="material-icons" viewBox="0 0 24 24">
                            <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                        </svg>
                    </a>
                    <a href="https://plus.google.com/" target="blank" class="social-icon"> 
                        <svg class="material-icons" viewBox="0 0 24 24">
                            <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M19.5,12H18V10.5H17V12H15.5V13H17V14.5H18V13H19.5V12M9.65,11.36V12.9H12.22C12.09,13.54 11.45,14.83 9.65,14.83C8.11,14.83 6.89,13.54 6.89,12C6.89,10.46 8.11,9.17 9.65,9.17C10.55,9.17 11.13,9.56 11.45,9.88L12.67,8.72C11.9,7.95 10.87,7.5 9.65,7.5C7.14,7.5 5.15,9.5 5.15,12C5.15,14.5 7.14,16.5 9.65,16.5C12.22,16.5 13.96,14.7 13.96,12.13C13.96,11.81 13.96,11.61 13.89,11.36H9.65Z" />
                        </svg>
                    </a>
                </div>  
                <div class="row end-xs middle-xs">
                
               
                    <div class="mdc-menu-surface--anchor">
                    @if ($Penyewa != null)
                        <button class="mdc-button mdc-ripple-surface"> 
                            <span class="mdc-button__ripple"></span>
                            <i class="material-icons mdc-button__icon mx-1">person</i>
                            <span class="mdc-button__label">account</span>
                            <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                        </button> 
                        <div class="mdc-menu mdc-menu-surface user-menu">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                <li class="user-info row start-xs middle-xs">                   
                                    <img src="assets/images/others/user.jpg" alt="user-image" width="20">
                                    <p class="m-0">{{$Penyewa->Nama}} <br> <small><i>{{$Penyewa->No_Hp}}</i></small></p>
                                </li>
                                <li role="separator" class="mdc-list-divider m-0"></li> 
                                
                                <li>
                                    <a href="{{url('/member')}}" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">home</i> 
                                        <span class="mdc-list-item__text px-3">Unit Saya</span>
                                    </a>
                                </li>
                                
                               
                                <li role="separator" class="mdc-list-divider m-0"></li>
                                <li>
                                    <a href="{{url('/member/logout')}}" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">power_settings_new</i> 
                                        <span class="mdc-list-item__text px-3">Sign Out</span>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                        @else
                        <button class="mdc-button mdc-ripple-surface"> 
                            <span class="mdc-button__ripple"></span>
                            <i class="material-icons mdc-button__icon mx-1">person</i>
                            <span class="mdc-button__label">account</span>
                            <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                        </button>
                        <div class="mdc-menu mdc-menu-surface user-menu">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                
                                <li role="separator" class="mdc-list-divider m-0"></li>
                                <li>
                                    <a href="{{url('member')}}" class="mdc-list-item" role="menuitem">
                                        <i class="material-icons mat-icon-sm text-muted">vpn_key</i> 
                                        <span class="mdc-list-item__text px-3">Login</span>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                        @endif
                    </div> 
                   
                </div> 
            </div> 
            </div> 
        </div>  
        <div id="main-toolbar" class="mdc-elevation--z2">
            <div class="theme-container row between-xs middle-xs h-100"> 
                <a class="logo" href="{{url('/')}}"> 
                    <img src="{{asset('assets/images/logo-dark.png')}}" width="212" height="37" style="margin-left:2px;">
                </a>  
                <div class="horizontal-menu d-none d-md-flex d-lg-flex d-xl-flex">   
                    <div class="mdc-menu-surface--anchor"> 
                        <a href="javascript:void(0);" class="mdc-button menu-item-has-children"> 
                            <span class="mdc-button__ripple"></span> 
                            <span class="mdc-button__label">Home</span>
                        </a>  
                        <div class="mdc-menu mdc-menu-surface">
                            <div class="mdc-list"> 
                                <div> 
                                    <a href="header-default.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Header default</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="header-image.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Header image</span> 
                                    </a>  
                                </div>  
                                <div> 
                                    <a href="header-carousel.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Header carousel</span> 
                                    </a>  
                                </div>
                                <div class="mdc-menu-surface--anchor"> 
                                    <div>
                                        <a href="#" class="mdc-button menu-item-has-children"> 
                                            <span class="mdc-button__ripple"></span> 
                                            <span class="mdc-button__label">Toolbar</span> 
                                        </a> 
                                    </div> 
                                    <div class="mdc-menu mdc-menu-surface">
                                        <div class="mdc-list"> 
                                            <div> 
                                                <a href="header-default.html" class="mdc-button"> 
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Toolbar version 1</span> 
                                                </a>  
                                            </div>
                                            <div> 
                                                <a href="toolbar-2.html" class="mdc-button"> 
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Toolbar version 2</span> 
                                                </a>  
                                            </div> 
                                        </div>
                                    </div>                                          
                                </div>  
                            </div>
                        </div>  
                    </div>   
                    <div>
                        <a href="properties.html" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Properties</span> 
                        </a> 
                    </div>  
                    <div class="mdc-menu-surface--anchor"> 
                        <a href="javascript:void(0);" class="mdc-button menu-item-has-children"> 
                            <span class="mdc-button__ripple"></span> 
                            <span class="mdc-button__label">Pages</span> 
                        </a>  
                        <div class="mdc-menu mdc-menu-surface">
                            <div class="mdc-list"> 
                                <div> 
                                    <a href="property.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Single Property</span> 
                                    </a>  
                                </div><div> 
                                    <a href="agents.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Agents</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="agent.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Agent</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="login.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Login</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="register.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Register</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="faqs.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">FAQs</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="pricing.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Pricing</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="terms.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Terms & Conditions</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="index.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Landing</span> 
                                    </a>  
                                </div>
                                <div> 
                                    <a href="404.html" class="mdc-button"> 
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">404 Page</span> 
                                    </a>  
                                </div> 
                                <div class="mdc-menu-surface--anchor"> 
                                    <a href="#" class="mdc-button menu-item-has-children"> 
                                        <span class="mdc-button__ripple"></span> 
                                        <span class="mdc-button__label">Other</span> 
                                    </a> 
                                    <div class="mdc-menu mdc-menu-surface">
                                        <div class="mdc-list"> 
                                            <div> 
                                                <a href="http://themeseason.com/" target="_blank" class="mdc-button"> 
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">External Link</span> 
                                                </a>  
                                            </div>
                                            <div> 
                                                <a href="#" class="mdc-button"> 
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Menu Item</span> 
                                                </a>  
                                            </div>
                                            <div> 
                                                <a href="#" class="mdc-button"> 
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Menu Item</span> 
                                                </a>  
                                            </div>
                                        </div>
                                    </div>                                          
                                </div> 
                            </div>
                        </div>  
                    </div>  
                    <div>
                        <a href="contact.html" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Contact</span> 
                        </a> 
                    </div> 
                    <div>
                        <a href="about.html" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">About us</span> 
                        </a> 
                    </div>  
                </div>  
                
        </div> 
    </header>  
    <!-- Ini Content -->
    @yield('content')

    <footer>  
        <div class="px-3">
            <div class="theme-container"> 
                
                <div class="py-5 content"> 
                    <div class="row between-xs"> 
                        <div class="col-xs-12 col-sm-5 col-md-4 p-0"> 
                            <a class="logo" href="index.html"> 
                                <img src="{{asset('assets/images/logo.png')}}">
                            </a>  
                            <p class="mt-5 mb-3 desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum perspiciatis cupiditate numquam odio explicabo accusantium deserunt incidunt.</p>
                            <p class="row middle-xs mt-2">
                                <i class="material-icons primary-color">location_on</i>
                                <span class="mx-2">2903 Avenue Z, Brooklyn, NY</span>
                            </p>
                            <p class="row middle-xs mt-1">
                                <i class="material-icons primary-color">call</i> 
                                <span class="mx-2">(+100) 123 456 7890</span>
                            </p>
                            <p class="row middle-xs mt-1"> 
                                <i class="material-icons primary-color">mail_outline</i> 
                                <span class="mx-2">contact@housekey.com</span>
                            </p>
                            <p class="row middle-xs mt-1"> 
                                <i class="material-icons primary-color">schedule</i> 
                                <span class="mx-2">Mon - Sun / 9:00AM - 8:00PM</span>
                            </p> 
                            
                        </div> 
                        
                       
                    </div>  
                </div> 
                <div class="row between-xs middle-xs copyright">
                    <p>Copyright © 2020 All Rights Reserved</p>
                    <p>Team Designed & Developed by 
                        <a class="mdc-button" href="https://info.rusunawakotamagelang.id/" target="_blank"> 
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Rusunawa Kota Magaleang</span> 
                        </a>
                    </p>
                </div> 
            </div>
        </div>      
    </footer> 
    <div id="back-to-top"><i class="material-icons">arrow_upward</i></div>
    <script src="{{ asset('js/libs/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/libs/material-components-web.min.js') }}"></script> 
    <script src="{{ asset('js/libs/swiper.min.js') }}"></script> 
    <script src="{{ asset('js/scripts.js') }}"></script>  
    @yield('footer')
</body>

</html>