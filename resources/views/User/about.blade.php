
@extends('User.itestimoni')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">About</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/Home">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="/about">About</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" width="100%" height="500px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>DigiCoffee</h3>
            <p>Jakarta, Indonesia</p>
            <p class="fst-italic">
              Aplikasi ini menyediakan beberapa menu coffee, non coffee, traditional coffee, snack, dan makanan lainnya.
            </p>
            <div style="margin-left: 20px;">
                <p> <i class="bi bi-check-circle" style="color: brown;"></i> Terdapat beberapa pilihan menu menarik </p>
                <p> <i class="bi bi-check-circle" style="color: brown;"></i> Pemesanan menjadi lebih mudah </p>
                <p> <i class="bi bi-check-circle" style="color: brown;"></i> Terdapat tempat dan menu dengan harga terjangkau </p>
            </div>
        
            <p>
            Nikmati Coffee dan menu lainnya , dan dapatkan penawaran dan promo menarik!
            Pilihan menu dan tempat yang terbaik buat kamu!,,, 
            </p>
            <p>yukk tunggu apalagi Pesan Sekarang !!</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


     <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
    
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Developer</span>
                    <h2 class="" style="margin-top: 20px;">Our Human</h2><br><br>
                </div>
            </div> 

            <div class="row" style="align-content: center; justify-content: center;">

                <div class="col-lg-6 mb-4 mt-lg-0">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="img/anggi.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Anggi Ayu Ningtyas</h4>
                            <span>Product Manager</span>
                            <p>Mahasiswa Teknik Informatika Universitas Budi Luhur</p>
                            <div class="social">
                                <a target="_blank" href=""><i class="bi bi-twitter"></i></i></a>
                                <a target="_blank" href=""><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href=""><i class="bi bi-instagram"></i></a>
                                <a target="_blank" href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>

            <div class="row">

                <div class="col-lg-6 mt-4 " >
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                        <div class=""><img src="img/ryan.jpeg" style="border-radius: 100%; height: 140px; width: 220px;" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Ryan Ramadhan</h4>
                            <span>Back End & Front End Developer</span>
                            <p>Mahasiswa Teknik Informatika Universitas Singaperbangsa Karawang</p>
                            <div class="social">
                                <a target="_blank" href="#"><i class="bi bi-twitter"></i></a>
                                <a target="_blank" href="#"><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href="https://www.instagram.com/rynrss_"><i class="bi bi-instagram"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/ryan-ramadhan-17118b222"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic"><img src="img/ganang.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Muhammad Ganang Prasetya</h4>
                            <span>Front End Developer</span>
                            <p>Mahasiswa Sistem Informasi Universitas Alma Ata Yogyakarta</p>
                            <div class="social">
                                <a target="_blank" href="https://www.instagram.com/ganangprs7ya/?hl=id"><i class="bi bi-twitter"></i></a>
                                <a target="_blank" href="https://web.facebook.com/m.prasetya.566?_rdc=1&_rdr"><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href="https://www.instagram.com/ganangprs7ya/?hl=id"><i class="bi bi-instagram"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/ganang-zr-769430249"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="img/andhika.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Andika Alifian</h4>
                            <span>CTO</span>
                            <p>Mahasiswa Teknik Informatika STT Terpadu Nurul Fikri</p>
                            <div class="social">
                                <a target="_blank" href=""><i class="bi bi-twitter"></i></a>
                                <a target="_blank" href=""><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href=""><i class="bi bi-instagram"></i></a>
                                <a target="_blank" href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="img/angga.jpeg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Mawira Aruna Mardiangga</h4>
                            <span>Chief Executive Officer</span>
                            <p>Mahasiswa Teknik Informatika Universitas Serang Raya</p>
                            <div class="social">
                                <a target="_blank" href=""><i class="bi bi-twitter"></i></a>
                                <a target="_blank" href=""><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href=""><i class="bi bi-instagram"></i></a>
                                <a target="_blank" href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
    </section><!-- End Team Section -->
@endsection