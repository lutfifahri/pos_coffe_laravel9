@extends('Admin.home')
@section('content')
<section class="section profile">
<h2 style="margin: 10px 0px 10px 10px;">Dashboard</h2>
        <nav>
            <ol class="breadcrumb mb-4 " style="margin-left: 10px;">
                <li class="breadcrumb-item"><a style="text-decoration: none; color: black;" href="{{ url('pembayaran') }}">Pembayaran</a></li>
                <li class="breadcrumb-item active">Detail Pembayaran</li>
            </ol>
        </nav>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="mt-4" style="width:550px; margin-left:18px;">
                    <a class="btn btn-warning btn-sm fw-bold" title="Kembali" 
                        href=" {{ url('pembayaran') }}">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>

                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @empty($row->buktiPembayaran)
                    <img src="{{ url('assets/img/bukti/nophoto.png') }}" alt="Profile" width="250px">
                    @else
                    <img src="{{ url('assets/img/bukti/'.$row->buktiPembayaran) }}" alt="Profile" width="250px">
                    @endempty

                    <h4 class="mt-5"> Nama Pemesan : {{ $row->users->name}}</h4>
                    <h5 class="mt-3"> Metode Pembayaran : {{ $row->metodePembayaran}}</h5>
                </div>
                
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="alert alert-warning d-flex flex-column align-items-center" style="width:300px; ">
                        Kode Pesanan : {{ $row->pesanan->kodePesanan }}
                        <br/>Tanggal Pembayaran : {{ $row->tanggal }}
                        <br/>Status Pembayaran : {{ $row->statusPembayaran }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection