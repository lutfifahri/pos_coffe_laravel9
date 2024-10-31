@extends('Admin.home')
@section('content')
<section class="section profile">
    <h2 style="margin: 10px 0px 10px 10px; ">Dashboard</h2>
        <nav>
            <ol class="breadcrumb mb-4 " style="margin-left: 10px;">
                <li class="breadcrumb-item"><a style="text-decoration: none; color: black;" href="{{ url('testimoni') }}">Testimoni</a></li>
                <li class="breadcrumb-item active">Detail Testimoni</li>
            </ol>
        </nav>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="mt-4" style="width:550px; margin-left:18px;">
                    <a class="btn btn-warning btn-sm fw-bold" title="Kembali" 
                        href=" {{ url('testimoni') }}">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>

                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @empty($row->users->foto)
                    <img src="{{ url('assets/img/menu/nophoto.png') }}" alt="Profile" width="150px">
                    @else
                    <img src="{{ url('assets/img/menu/'.$row->users->foto) }}" alt="Profile" width="150px">
                    @endempty
                    
                    <h3 class="mt-3">{{ $row->users->name }}</h3>
                    <h5>{{ $row->users->role }}</h5>
                    <h5>{{ $row->users->alamat }}</h5>
                </div>
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="alert alert-warning d-flex flex-column align-items-center" style="width:300px; ">
                        Tanggal : {{ $row->date }}
                        <br/>Isi Pesan : {{ $row->pesan}}
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection