@extends('User.imenupelanggan')
@section('content')

<!-- Page Header -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Home</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/Home') }}">User</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/myprofil') }}">My Profile</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/myprofil') }}">Detail Profile</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<section class="section profile">
    
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="mt-4" style="width:550px; margin-left:208px;">
                    <a class="btn btn-warning btn-sm fw-bold" title="Kembali" 
                        href=" {{ url('myprofil') }}">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>

                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @empty($row->foto)
                    <img src="{{ url('assets/img/user/nophoto.png') }}" alt="Profile" width="150px">
                    @else
                    <img src="{{ url('assets/img/user/'.$row->foto) }}" alt="Profile" width="150px">
                    @endempty
                    <h3 class="mt-3">{{ $row->name }}</h3>
                    <h4>{{ $row->role }}</h4>
                </div>
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="alert alert-warning d-flex flex-column align-items-center" style="width:300px; ">
                        Email : {{ $row->email }}
                        <br/>
                        No HP : {{ $row->no_hp }}
                        <br/>Alamat : {{ $row->alamat }}
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection