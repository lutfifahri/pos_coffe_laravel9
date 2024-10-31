@extends('Admin.home')
@section('content')

@php
    $ar_users = App\Models\Userss::all();
    $ar_p = App\Models\Pesanan::all();
    $ar_mp = ['Cash','Ovo','Dana','Shopee Pay','Gopay','M-Banking'];
    $ar_sp = ['Sudah Di Konfirmasi','Belum Di Konfirmasi'];
@endphp


<section class="section">
    <h2 style="margin: 10px 0px 10px 10px; ">Dashboard</h2>
        <nav>
            <ol class="breadcrumb mb-4 " style="margin-left: 10px;">
                <li class="breadcrumb-item"><a style="text-decoration: none; color: black;" href="{{ url('pembayaran') }}">Pembayaran</a></li>
                <li class="breadcrumb-item active">Form Update Pembayaran</li>
            </ol>
        </nav>
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="mt-4" style="width:550px; margin-left:18px;">
                    <a class="btn btn-warning btn-sm fw-bold" title="Kembali" 
                        href=" {{ url('pembayaran') }}">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>

                <div class="card-body">
                    <h5 class="card-title text-center mb-5">Form Update Pembayaran</h5>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="row g-3" method="POST" action="{{ route('pembayaran.update',$row->id)}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-6">
                            <label class="form-label">User ID</label>
                            <div class="col-sm-12">
                                <select class="form-select" name="users_id">
                                    <option selected>-- Pilih User Id --</option>
                                    @foreach($ar_users as $user)
                                    @php $sel = ($user->id == $row->users_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $user->id }}" {{ $sel }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <label class="form-label">Metode Pembayaran</label>
                            <div class="col-sm-12">
                                <select class="form-select" name="metodePembayaran">
                                    <option selected>-- Pilih Metode Pembayaran --</option>
                                    @foreach($ar_mp as $mp)
                                    @php $sel = ($mp == $row->metodePembayaran) ? 'selected' : ''; @endphp
                                    <option value="{{ $mp }}" {{ $sel }}>{{ $mp }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <label class="form-label">Kode Pesanan </label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('pesanan_id') 
                                        is-invalid @enderror" name="pesanan_id">
                                    <option value="">-- Pilih Kode Pesanan --</option>
                                    @foreach($ar_p as $p)
                                    @php $sel = ( $p->id == $row->pesanan_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $p->id }}" {{ $sel }} > {{ $p->kodePesanan }}</option>
                                    @endforeach
                                </select>
                                @error('pesanan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Tanggal</label>
                            <input type="datetime-local" class="form-control" name="tanggal" value="{{ $row->tanggal }}" placeholder="Tanggal">
                        </div>
                        
                        <div class="col-6">
                            <label class="form-label">Status Pembayaran</label>
                            <div class="col-sm-12">
                                <select class="form-select" name="statusPembayaran">
                                    <option selected>-- Pilih Status Pembayaran --</option>
                                    @foreach($ar_sp as $mp)
                                    @php $sel = ($mp == $row->statusPembayaran) ? 'selected' : ''; @endphp
                                    <option value="{{ $mp }}" {{ $sel }}>{{ $mp }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Bukti Pembayaran</label>
                            <input class="form-control" type="file" name="buktiPembayaran" placeholder="Bukti Pembayaran">
                                @if(!empty($row->buktiPembayaran)) <img src="{{ url('assets/img/bukti')}}/{{$row->buktiPembayaran}}" 
                                                            width="10%" class="img-thumbnail">
                                <br/>{{$row->buktiPembayaran}}
                                @endif
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
</section>

@endsection