<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>DigiCoffee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <title>DigiCoffee</title>

    <link href="{{ url('assets/img/icon.png') }}" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
 
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            
            <a href="/home" class="navbar-brand px-lg-4 m-0">
                <img src="img/logoo.png" alt="" title="" />
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{ url('/Home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link" style="margin-left: 10px;">About</a>
                    <a href="{{ url('/blog') }}" class="nav-item nav-link" style="margin-left: 10px;">Blog</a>
                    <!-- <a href="{{ url('/menupelanggan') }}" class="nav-item nav-link">Menu</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="margin-left: 10px;">Testimonial</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="{{ url('/testi') }}" class="dropdown-item">
                                <i class="bi bi-chat-quote-fill"></i>
                                <span style="padding-left: 10px;"> Lihat Testimoni</span>
                            </a>
                            <hr class="dropdown-divider">
                            <a href=" {{ route('testi_user.create') }}" class="dropdown-item">
                                <i class="bi bi-envelope-heart"></i>
                                <span style="padding-left: 10px;"> Kirim Testimoni </span>
                            </a>
                        </div>
                    </div> 
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="margin-left: 10px;">Menu</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="{{ url('/menupelanggan') }}" class="dropdown-item">
                                <i class="bi bi-menu-up"></i>
                                <span style="padding-left: 10px;"> Lihat Menu</span>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="{{ route('cart.create') }}" class="dropdown-item">
                                <i class="bi bi-bag-check"></i>
                                <span style="padding-left: 10px;"> Pesan Menu</span>
                            </a>
                        </div>
                    </div> 
                    
                    @if(empty(Auth::user()))
                        <a href="{{ url('/login') }}" class="nav-item nav-link" style="margin-left: 10px;">LogIn</a>
                    @else
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="margin-left: 10px;">Pesanan</a>
                            <div class="dropdown-menu text-capitalize">
                                <a href="{{ url('/cart') }}" class="dropdown-item">
                                    <i class="bi bi-cart-plus-fill"></i>
                                    <span style="padding-left: 10px;"> Pesanan Ku </span>
                                </a>

                                <hr class="dropdown-divider">
                                <a href="{{ url('/metode-pembayaran') }}" class="dropdown-item">
                                    <i class="bi bi-envelope-paper bi bi-cash"></i>
                                    <span style="padding-left: 10px;"> Metode Pembayaran</span>
                                </a>

                                <hr class="dropdown-divider">
                                
                                <!-- <a href="{{ route('bayar.create') }}" class="dropdown-item">
                                    <i class="bi bi-cash"></i>
                                    <span style="padding-left: 10px;"> Pembayaran </span>
                                </a> -->

                                <hr class="dropdown-divider">
                                <a href="{{ url('bayar') }}" class="dropdown-item">
                                    <i class="bi bi-hourglass-split"></i>
                                    <span style="padding-left: 10px;"> Status Pembayaran </span>
                                </a>
                            </div>
                        </div> 
                        @empty(Auth::user()->foto)
                            <img src="{{ url('assets/img/user/nophoto.png') }}" alt="Profile"  style="width: 50px; height: 50px; border-radius: 100%; margin-left: 10px;">
                        @else
                            <img src="{{ url('assets/img/user/')}}/{{Auth::user()->foto}}" alt="Profile" style="width: 50px; height: 50px; border-radius: 100%; margin-left: 10px;">
                        @endempty

                        <!-- Navbar-->
                        <div class="nav-item dropdown">
                            <a class="nav-link nav-profile d-flex align-items-center " href="#" data-bs-toggle="dropdown">     
                                
                                <span class="d-none d-md-block dropdown-toggle ps-2" style="margin-left: 5px;">
                                    @if(empty(Auth::user()->name))
                                        {{ '' }}
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </span>
                            
                            </a><!-- End Profile Iamge Icon -->

                            <div class="dropdown-menu text-capitalize">
                                <span class="d-none d-md-block text-center ps-2" style="font-weight: bold; font-size: 16px;">
                                    @if(empty(Auth::user()->name))
                                        {{ '' }}
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </span>
                                <span class="d-none d-md-block text-center ps-2" style="font-size: 14px; ">
                                    @if(empty(Auth::user()->role))
                                        {{ '' }}
                                    @else
                                        {{ Auth::user()->role }}
                                    @endif
                                </span>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ url('myprofil') }}">
                                        <i class="bi bi-person" style="margin-right: 10px;"></i>
                                        <span>My Profile</span>
                                    </a>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </div> 
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->