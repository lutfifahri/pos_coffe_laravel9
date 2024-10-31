@extends('User.ipesan')
@section('content')
@if(Auth::user()->role == 'Customer')
<div class="container-fluid page-header mb-5 position-relative">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Kirim Testimoni</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/Home">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="/pesanmenu">Kirim Testimoni</a></p>
            </div>
        </div>
</div>
    <!-- Page Header End -->

<!-- Reservation Start -->
<div class="container-fluid py-5 mt-3">
        <div class="container">
            <div class="reservation position-relative overlay-bottom overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Testimoni</h1>
                                <h1 class="text-white">Kirim Feedback Anda Sekarang</h1>
                            </div>
                            <p class="text-white"> Ulasan anda sangat bermanfaat untuk kami <b>DigiCoffee</b>.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: slategray;">
                            <h1 class="mb-4 mt-5" style="color: gold;">Kirim Testimoni DigiCoffee</h1>
                            <form class="" method="POST" action="{{ route('testi_user.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" style="color: white;">
                                    <div class="col-sm-12">
                                        <label for="inputNane4" class="form-label" style="color: white;">Users ID</label>
                                        <input class="form-control @error('users_id') 
                                            is-invalid @enderror" name="users_id" disabled value="{{ Auth::user()->name }}">
                                        </input>
                                        @error('users_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputNane4" class="form-label" style="color: white;">Isi Pesan</label>
                                    <textarea class="form-control @error('pesan') is-invalid @enderror" 
                                    name="pesan" style="height: 100px; border-color: white; color: white;">{{ old('pesan') }}</textarea>
                                    @error('pesan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Kirim Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->
    @else
        @include('User.access_denied')
    @endif
    @endsection