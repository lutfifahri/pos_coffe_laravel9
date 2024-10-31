@extends('User.ipesan')
@section('content')
@if(Auth::user()->role == 'Customer')
<div class="container-fluid page-header mb-5 position-relative">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Pesan Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/Home">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="/pesanmenu">Pesan Menu</a></p>
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
                                <h1 class="display-3 text-primary">Ayoo Pesan Menu</h1>
                                <h1 class="text-white">Kesukaan mu <i>Sekarang</i> </h1>
                            </div>
                            <p class="text-white"> Cepat, Lezat, dan Hebat hanya di <b>DigiCoffee</b>.</p>
                            
                        </div>
                    </div>

                    <div class="card-body col-lg-6 my-5 my-lg-0">
                        <h3 class="card-title text-center mb-5" style="color: white;">Form Pesan Menu</h5>

                        <form class="row g-3" method="POST" action="{{ route('cart.store')}}">
                            @csrf
                            
                            <div class="col-6">
                                <label for="inputNane4" class="form-label" style="color: white;">Kode Pesanan</label>
                                <input type="text" class="form-control @error('kodePesanan') is-invalid @enderror" 
                                    name="kodePesanan" placeholder="Kode Pesanan" value="{{ old('kodePesanan') }}">
                                
                                @error('kodePesanan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="inputNane4" class="form-label" style="color: white;">Nama Menu</label>
                                <div class="col-sm-12">
                                    <select class="form-select form-control @error('menu_id') 
                                            is-invalid @enderror" name="menu_id">
                                        <option value="" style="color: black; padding: 5px;">-- Pilih Menu --</option>
                                        @foreach($ar_menu as $menu)
                                        @php $sel = ( old('menu_id') == $menu->id) ? 'selected' : ''; @endphp
                                        <option value="{{ $menu->id }}" {{ $sel }} style="color: black; padding: 5px;"> {{ $menu->namaMenu }}</option>
                                        @endforeach
                                    </select>
                                    @error('menu_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                            <label for="inputNane4" class="form-label" style="color: white;">Total Pesan</label>
                            <input type="number" class="form-control @error('TotalPesan') is-invalid @enderror"
                                name="TotalPesan" placeholder="Total Pesan" value="{{ old('TotalPesan') }}">
                            @error('TotalPesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label class="form-label" style="color: white;">Nama User</label>
                            <div class="col-sm-12">
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
                        <div class="col-6">
                            <label class="form-label" style="color: white;">Kode Meja</label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('meja_id') 
                                        is-invalid @enderror" name="meja_id">
                                    <option value="" style="color: black; padding: 5px;">-- Pilih Kode Meja --</option>
                                    @foreach($ar_meja as $meja)
                                    @php $sel = ( old('meja_id') == $meja->id) ? 'selected' : ''; @endphp
                                    <option value="{{ $meja->id }}" {{ $sel }} style="color: black; padding: 5px;">{{ $meja->kodeMeja }}</option>
                                    @endforeach
                                </select>
                                @error('meja_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                            <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                                <button type="submit" class="btn btn-success" style="margin-right: 10px;">Simpan</button>
                                <button type="reset" class="btn btn-dark" style="margin-right: 10px;">Batal</button>
                            </div>
                        </form><!-- Vertical Form -->
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