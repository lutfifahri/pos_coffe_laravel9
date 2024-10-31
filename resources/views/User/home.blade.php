@extends('User.index')
@section('content')

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">DigiCoffee</h4>
                <h1 class="display-4">Cerita Kita</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Digi</h1>
                    <!-- <h5 class="mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea</h5> -->
                    <p>Setiap masalah yang Kita hadapi merupakan satu kesiapan diri untuk melangkah. Jangan lari akan suatu masalah, namun hadapi masalah dengan <b>Digi</b> atau representasi diri</p>
                    
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Coffee</h1>
                    <p>Masalah yang tak larut usai cukup dengan satu gelas <b>Coffee</b> yang bisa memberikan inspiransi untuk melangkah untuk kuat menghadapi masalah.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">DigiCoffee</h4>
                <h1 class="display-4">Apresiasi Kita</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <!-- <h4><i class="fa fa-truck service-icon"></i>Alat CodeCoffee/></h4> -->
                            <h4>Alat Coffee</h4>
                            <p class="m-0">Kualitas alat yang maksimal merupakan hal terpenting untuk penyajian minuman dan makanan bagi pelanggan setia <b>DigiCoffee</b>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-5.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>Makanan</h4>
                            <p class="m-0">Menu makanan yang lezat untuk menemani pelanggan setia <b>DigiCoffee</b> dalam mengutarakan ide-ide yang di utarakan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-6.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>Tempat Coffe</h4>
                            <p class="m-0">Tempat yang nyaman dan asri merupakan salah kunci pemikat pelanggan setia <b>DigiCoffee</b>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>Minuman</h4>
                            <p class="m-0">Penyatu dan terbukanya ide-ide adalah minuman pelanggan setia <b>DigiCoffee</b>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

     
    @endsection
