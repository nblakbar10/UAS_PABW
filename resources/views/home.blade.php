<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Home | KEMUDI</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('/img/car.png')}}">
</head>

<body>
    <!-- header area start -->
    <header id="header">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="menu-area">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="/home"><img src="{{asset('/img/logolpk2.png')}}" alt="KEMUDI"></a>
                            </div>
                        </div>
                        <div class="col-md-9 hidden-xs hidden-sm">
                            <div class="main-menu">
                                <nav class="nav-menu">
                                    <ul>
                                        <li class="active"><a href="/home">Beranda</a></li>
                                        <li><a href="/tentang">Tentang</a></li>
                                        <li><a href="/paketkursus">Pilihan Kursus</a></li>
                                        <!--<li><a href="/galeri">Galeri</a></li>-->
                                        <!--<li><a href="#download">Download</a></li>-->
                                        <li><a href="/contact">Hubungi Kami</a></li>

                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 visible-sm visible-xs">
                            <div class="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="home" class="slider-area with-gradiant full-opacity">
        <div class="service-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="service-single">
                            <h2>Cek Data Murid</h2>
                            <a href="/murid"><p>Tambah</p>
                            <a href="/murid"><p>Lihat Data</p>
                        </div>
                    </a></div> 
                    <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="service-single">
                            <h2>Cek Data Instruktur</h2>
                            <a href="/instruktur"><p>Tambah</p>
                            <a href="/instruktur"><p>Lihat Data</p> 
                        </div>
                    </a></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="service-single">
                            <h2>Cek Data Mobil</h2>
                            <a href="/mobil"><p>Tambah</p>
                            <a href="/mobil"><p>Lihat Data</p>
                        </div>
                    </a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script src="{{asset('/js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{asset('/js/jquery-ui.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('/js/theme.js')}}"></script>
</body>

</html>