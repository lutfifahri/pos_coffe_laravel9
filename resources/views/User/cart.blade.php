@extends('User.imenupelanggan')
@section('content')
@include('sweetalert::alert')
<!-- Page Header -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
	<div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
		<h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Pesanan</h1>
		<div class="d-inline-flex mb-lg-5">
			<p class="m-0 text-white"><a class="text-white" href="{{ url('/') }}">Home</a></p>
			<p class="m-0 text-white px-2">/</p>
			<p class="m-0 text-white"><a class="text-white" href="{{ url('/cart') }}">Pesanan</a></p>
			<p class="m-0 text-white px-2">/</p>
			<p class="m-0 text-white"><a class="text-white" href="{{ url('/cart') }}">Pesanan Ku</a></p>
		</div>
	</div>
</div>
<!-- Page Header End -->



<!-- Checkout Start -->
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Discover</span>
				<h2 class="">Pesanan Ku</h2>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-cart">
	<div class="container" style="margin-top: -100px;">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>No</th>
								<th>Kode Pesanan</th>
								<th>Foto Menu</th>
								<th>Nama Menu</th>
								<th>Waktu Pesan</th>
								<th>Total Pesan</th>
								<th colspan="2">Total Harga</th>
								<th>Nama Pemesan</th>
								<th>Kode Meja</th>
								<th>Status Pesanan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						@php 
							$no= 1; 
						
							function rupiah($angka){
                                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                                return $hasil_rupiah;
                            }
						@endphp
                		@foreach($pesanan as $row)
						@php
                            $harga = $row->TotalPesan * $row->menu->harga;
                        @endphp
							@if ($row->users->id == Auth::user()->id)
							<tr class="text-center">
								<td scope="row">{{ $no++ }}</td>
								<td>{{ $row->kodePesanan }}</td>
								<td width="7%">
									@empty($row->menu->foto)
									<img src="{{ url('assets/img/menu/nophoto.png') }}" width="100%" alt="Profile" style="border-radius: 5px;">
									@else
									<img src="{{ url('assets/img/menu/'.$row->menu->foto) }}" width="100%" alt="Profile" style="border-radius: 5px;">
									@endempty
								</td>
								<td>{{ $row->menu->namaMenu }}</td>
								<td>{{ $row->waktuPesan }}</td>
								<td>{{ $row->TotalPesan }}</td>
								<td colspan="2">{{ rupiah($harga) }}</td>
								<td>{{ $row->users->name }}</td>
								<td>{{ $row->meja->kodeMeja}}</td>
								<td style="text-align: center;">
									<span class="badge text-white {{ ($row->statusPesanan == 'Pesanan Siap Di Hidangkan') ? 'bg-success' : 'bg-secondary'}}"
										style="padding: 10px; font-size: 12px;">
									{{ ($row->statusPesanan  == 'Pesanan Siap Di Hidangkan') ? 'Pesanan Siap Di Hidangkan' : 'Pesanan Sedang Di Proses'}}
									</span>
								</td>
						
								<td width="15%">
									<form method="POST" id="formDelete">
										@csrf
										@method('DELETE')
										<a class="btn btn-dark" title="Add Bayar"
										style="border-radius: 12px;"
										href="cart/{{ $row->id }}/edit">
											<!-- href="cart/{{ $row->id }}/edit" -->
											Bayar
										</a>

										@if ($row->statusPesanan == 'Pesanan Sedang Di Proses')
										<button type="submit" class="btnDelete" title="Hapus Pesanan"
											style="color: white; background-color: white; border-radius: 12px; padding: 4px; font-size: 13px;" 
											data-action="{{ route('cart.destroy',$row->id) }} ">
											<p style="background-color: red; color: white; padding: 5px; border-radius: 12px;">Hapus</p>
										</button>
										@endif
									</form>
								</td>
							</tr><!-- END TR-->
							@endif
							@endforeach

							<!-- <tr class="text-center">
								<td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>

								<td class="image-prod">
									<div class="img" style="background-image:url(assetsLand/images/dish-2.jpg);"></div>
								</td>

								<td class="product-name">
									<h3>Grilled Ribs Beef</h3>
									<p>Far far away, behind the word mountains, far from the countries</p>
								</td>

								<td class="price">$15.70</td>

								<td class="quantity">
									<div class="w-100"></div>
									<div class="input-group col-md-12 d-flex mb-3">
										<span class="input-group-btn mr-2">
											<button type="button" class="quantity-left-minus btn" data-type="minus" data-field=""><i class="icon-minus"></i></button>
										</span>
										<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
										<span class="input-group-btn ml-2">
											<button type="button" class="quantity-right-plus btn" data-type="plus" data-field=""><i class="icon-plus"></i></button>
										</span>
									</div>
								</td>

								<td class="total">$15.70</td>
							</tr>END TR -->

						</tbody>
					</table>
				</div>
			</div>
		</div>
		
	</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
    $('body').on('click', '.btnDelete', function(e) {
    e.preventDefault();
    var action = $(this).data('action');
    Swal.fire({
        title: 'Apakah Anda yakin ingin menghapus data ini?',
        text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Yakin'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#formDelete').attr('action', action);
            $('#formDelete').submit();
        }
    })
})
</script>


<!-- Checkout End -->

@endsection