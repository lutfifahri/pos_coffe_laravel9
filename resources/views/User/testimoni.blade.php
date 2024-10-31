
@extends('User.itestimoni')
@section('content')
@include('sweetalert::alert')
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Testimonial</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/Home">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="/testimoni">Testimonial</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

 
 <!-- Testimonial Start -->
 <div class="container-fluid py-5">
        <div class="container">
 
            <div class="section-title">
				<div class="col-md-12 heading-section ftco-animate text-center">
					<h4 class="subheading">DigiCoffee</h4>
                	<h1 class="mb-4">Bagian Kita</h1>
				</div>
			</div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($testimoni as $row)
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        @empty($row->users->foto)
                            <img src="{{ url('assets/img/user/nophoto.png') }}" width="100%" alt="Profile" style="border-radius: 5px;">
                        @else
                            <img src="{{ url('assets/img/user/'.$row->users->foto) }}" width="100%" alt="Profile" style="border-radius: 5px;">
                        @endempty
                        <!-- <img class="img-fluid" src="img/pr.jpg" alt=""> -->
                        <div class="ml-3">
                            <h4>{{$row->users->name}}</h4>
                            <p>{{$row->users->role}}</p>
                            <i>{{$row->date}}</i>
                        </div>
                    </div>
                    <p>{{$row->pesan}}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    
    <!-- Testimonial End -->

    @endsection