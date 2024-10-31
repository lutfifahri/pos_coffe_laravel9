@extends('auth.ilogin')
@section('content')

 <!-- Reservation Start -->
 <div class="container-fluid py-5 mt-3">
        <div class="container">
            <div class="reservation position-relative overlay-bottom overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">DigiCoffee</h1>
                                <p class="text-white"> Sahabat baru<b> DigiCoffee</b>, Selamat datang sahabatku. </p>
                             
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: white;">
                            <h1 class="text-primary mb-4 mt-5">Daftar</h1>
                            <br>
                            <form class="mb-5">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    
                                    <input type="password" class="form-control bg-transparent border-primary p-4" placeholder="Password"
                                        required="required" />
                                </div>
                                <br>
                                
                                
                                
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3"  href="/home">Masuk</button>
                                                <br>
                                    <button class="btn btn-info btn-block font-weight-bold py-3"  href="/daftar">Daftar</button>
                                    <br><label ><i>*Jika Belum Mempunyai Akun</i> </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

    @endsection