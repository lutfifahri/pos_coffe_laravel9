@extends('User.imenupelanggan')
@section('content')

<!-- Page Header -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/Home') }}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/menupelanggan') }}">Menu</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

	
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">Discover</span>
						<h2 class="mb-4" style="margin-top: 20px;">Our Menu</h2><br><br>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-6 mb-5 pb-3">
						<h3 class="mb-5 heading-pricing ftco-animate">Coffee</h3>
							@php 
								$no= 1; 
							
								function rupiah($angka){
									$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
									return $hasil_rupiah;
								}
							@endphp
							@foreach($coffee as $row)
							<div class="pricing-entry d-flex ftco-animate">
								@empty($row->foto)
									<img src="{{ url('assets/img/menu/nophoto.png') }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@else
									<img src="{{ url('assets/img/menu/'.$row->foto) }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@endempty
								<div class="desc pl-3">
									<div class="d-flex text align-items-center" style="padding-bottom: 10px;">
										<h3><span>{{$row->namaMenu}}</span></h3>
										<span class="price" style="padding-bottom: 20px;">{{ rupiah($row->harga) }}</span>
									</div>
									<div class="d-block" style="margin-top: -20px;">
										<p>{{$row->status}}</p>
									</div>
								</div>
							</div>
							@endforeach
					</div>

					<div class="col-md-6 mb-5 pb-3">
						<h3 class="mb-5 heading-pricing ftco-animate">Non Coffee</h3>
						@foreach($noncoffee as $row)
						<div class="pricing-entry d-flex ftco-animate">
								@empty($row->foto)
									<img src="{{ url('assets/img/menu/nophoto.png') }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@else
									<img src="{{ url('assets/img/menu/'.$row->foto) }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@endempty
								<div class="desc pl-3">
									<div class="d-flex text align-items-center" style="padding-bottom: 10px;">
										<h3><span>{{$row->namaMenu}}</span></h3>
										<span class="price" style="padding-bottom: 20px;">{{ rupiah($row->harga) }}</span>
									</div>
									<div class="d-block" style="margin-top: -20px;">
										<p>{{$row->status}}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>

					<div class="col-md-6 mb-5 pb-3">
						<h3 class="mb-5 heading-pricing ftco-animate">Traditional Coffee</h3>
						@foreach($tc as $row)
						<div class="pricing-entry d-flex ftco-animate">
								@empty($row->foto)
									<img src="{{ url('assets/img/menu/nophoto.png') }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@else
									<img src="{{ url('assets/img/menu/'.$row->foto) }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@endempty
								<div class="desc pl-3">
									<div class="d-flex text align-items-center" style="padding-bottom: 10px;">
										<h3><span>{{$row->namaMenu}}</span></h3>
										<span class="price" style="padding-bottom: 20px;">{{ rupiah($row->harga) }}</span>
									</div>
									<div class="d-block" style="margin-top: -20px;">
										<p>{{$row->status}}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>

					<div class="col-md-6 mb-5 pb-3">
						<h3 class="mb-5 heading-pricing ftco-animate">Snack</h3>
						@foreach($snack as $row)
						<div class="pricing-entry d-flex ftco-animate">
								@empty($row->foto)
									<img src="{{ url('assets/img/menu/nophoto.png') }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@else
									<img src="{{ url('assets/img/menu/'.$row->foto) }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@endempty
								<div class="desc pl-3">
									<div class="d-flex text align-items-center" style="padding-bottom: 10px;">
										<h3><span>{{$row->namaMenu}}</span></h3>
										<span class="price" style="padding-bottom: 20px;">{{ rupiah($row->harga) }}</span>
									</div>
									<div class="d-block" style="margin-top: -20px;">
										<p>{{$row->status}}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>

					<div class="col-md-6 mb-5 pb-3">
						<h3 class="mb-5 heading-pricing ftco-animate">Makanan Ringan</h3>
						@foreach($mr as $row)
						<div class="pricing-entry d-flex ftco-animate">
								@empty($row->foto)
									<img src="{{ url('assets/img/menu/nophoto.png') }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@else
									<img src="{{ url('assets/img/menu/'.$row->foto) }}" class="img" width="10%" alt="Profile" style="border-radius: 100%;">
								@endempty
								<div class="desc pl-3">
									<div class="d-flex text align-items-center" style="padding-bottom: 10px;">
										<h3><span>{{$row->namaMenu}}</span></h3>
										<span class="price" style="padding-bottom: 20px;">{{ rupiah($row->harga) }}</span>
									</div>
									<div class="d-block" style="margin-top: -20px;">
										<p>{{$row->status}}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
    	</section>


		<section class="ftco-menu mb-5 pb-5">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">Discover</span>
						<h2 class="mb-4">Our Menu</h2>
					</div>
				</div>
				<div class="row d-md-flex">
					<div class="col-lg-12 ftco-animate p-md-5">
						<div class="row">
							<div class="col-md-12 nav-link-wrap mb-5">
								<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
									aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
										role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee</a>

									<a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
										aria-controls="v-pills-1" aria-selected="false">Non Coffee</a>

									<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
										aria-controls="v-pills-2" aria-selected="false">Traditional
										Coffee</a>

									<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
										aria-controls="v-pills-3" aria-selected="false">Snack</a>

									<a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
										aria-controls="v-pills-4" aria-selected="false">Makanan
										Ringan</a>
								</div>
							</div>
							<div class="col-md-12 d-flex align-items-center">
								<div class="tab-content ftco-animate" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
										aria-labelledby="v-pills-0-tab">
										<div class="row">
											@foreach($coffee as $row)
											<div class="col-md-4">
												<div class="menu-entry">
													@empty($row->foto)
													<img src="{{ url('assets/img/menu/nophoto.png') }}" class="img" width="100%"
														alt="Profile">
													@else
													<img src="{{ url('assets/img/menu/'.$row->foto) }}" class="img" width="100%"
														alt="Profile">
													@endempty
													<div class="text text-center pt-4">
														<h3><a href="{{ url('/detail') }}">{{$row->namaMenu}}</a>
														</h3>
														<p >{{ rupiah($row->harga) }}</p>
														<p>{{$row->status}}</p>
														<p><a href="{{ route('cart.create') }}"
																class="btn btn-primary btn-outline-primary">
																Pesan Sekarang
															</a>
														</p>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>

									<div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
										<div class="row">
											@foreach($noncoffee as $row)
											<div class="col-md-5 text-center">
												<div class="menu-entry">
													@empty($row->foto)
													<img src="{{ url('assets/img/menu/nophoto.png') }}"
														class="menu-img img mb-4" width="100%" alt="Profile">
													@else
													<img src="{{ url('assets/img/menu/'.$row->foto) }}"
														class="menu-img img mb-4" width="100%" alt="Profile">
													@endempty
													<div class="text">
														<h3><a href="{{ url('/detail') }}">{{$row->namaMenu}}</a>
														</h3>
														<p >{{ rupiah($row->harga) }}</p>
														<p>{{$row->status}}</p>
														<p><a href="{{ route('cart.create') }}"
																class="btn btn-primary btn-outline-primary">
																Pesan Sekarang
															</a>
														</p>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>

									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
										<div class="row">
											@foreach($tc as $row)
											<div class="col-md-4">
												<div class="menu-entry">
													@empty($row->foto)
													<img src="{{ url('assets/img/menu/nophoto.png') }}"
														class="menu-img img mb-4" alt="Profile">
													@else
													<img src="{{ url('assets/img/menu/'.$row->foto) }}"
														class="menu-img img mb-4" alt="Profile">
													@endempty
													<div class="text text-center pt-4">
														<h3><a href="{{ url('/detail') }}">{{$row->namaMenu}}</a>
														</h3>
														<p >{{ rupiah($row->harga) }}</p>
														<p>{{$row->status}}</p>
														<p><a href="{{ route('cart.create') }}"
																class="btn btn-primary btn-outline-primary">
																Pesan Sekarang
															</a>
														</p>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>

									<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
										<div class="row">
											@foreach($snack as $row)
											<div class="col-md-4">
												<div class="menu-entry">
													@empty($row->foto)
													<img src="{{ url('assets/img/menu/nophoto.png') }}"
														class="menu-img img mb-4" alt="Profile">
													@else
													<img src="{{ url('assets/img/menu/'.$row->foto) }}"
														class="menu-img img mb-4" alt="Profile">
													@endempty
													<div class="text text-center pt-4">
														<h3><a href="{{ url('/detail') }}">{{$row->namaMenu}}</a>
														</h3>
														<p >{{ rupiah($row->harga) }}</p>
														<p>{{$row->status}}</p>
														<p><a href="{{ route('cart.create') }}"
																class="btn btn-primary btn-outline-primary">
																Pesan Sekarang
															</a>
														</p>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>

									<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
										<div class="row">
											@foreach($mr as $row)
											<div class="col-md-3">
												<div class="menu-entry">
													@empty($row->foto)
													<img src="{{ url('assets/img/menu/nophoto.png') }}"
														class="menu-img img mb-4" alt="Profile">
													@else
													<img src="{{ url('assets/img/menu/'.$row->foto) }}"
														class="menu-img img mb-4" alt="Profile">
													@endempty
													<div class="text text-center pt-4">
														<h3><a href="{{ url('/detail') }}">{{$row->namaMenu}}</a>
														</h3>
														<p >{{ rupiah($row->harga) }}</p>
														<p>{{$row->status}}</p>
														<p><a href="{{ route('cart.create') }}"
																class="btn btn-primary btn-outline-primary">
																Pesan Sekarang
															</a>
														</p>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <!-- Menu End -->

    @endsection