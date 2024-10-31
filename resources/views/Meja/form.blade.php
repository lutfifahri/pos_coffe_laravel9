@extends('Admin.home')
@section('content')
<section class="section">
    <h2 style="margin: 10px 0px 10px 10px; ">Dashboard</h2>
        <nav>
            <ol class="breadcrumb mb-4 " style="margin-left: 10px;">
            <li class="breadcrumb-item"><a style="text-decoration: none; color: black;" href="{{ url('meja') }}">Meja</a></li>
                <li class="breadcrumb-item active">Form Input Meja</li>
            </ol>
        </nav>
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="mt-4" style="width:550px; margin-left:18px;">
                    <a class="btn btn-warning btn-sm fw-bold" title="Kembali" 
                        href=" {{ url('meja') }}">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>

                <div class="card-body">
                    <h5 class="card-title text-center mb-5">Form Input Meja</h5>

                    <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif -->
                    <form class="row g-3" method="POST" action="{{ route('meja.store')}}">
                        @csrf
                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Kode Meja</label>
                            <input type="text" class="form-control @error('kodeMeja') is-invalid @enderror" 
                                name="kodeMeja" placeholder="Kode Meja" value="{{ old('kodeMeja') }}">
                            @error('kodeMeja')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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