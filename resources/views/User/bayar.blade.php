@extends('User.imenupelanggan')
@section('content')

<!-- Page Header -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
	<div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
		<h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
		<div class="d-inline-flex mb-lg-5">
			<p class="m-0 text-white"><a class="text-white" href="{{ url('/') }}">Home</a></p>
			<p class="m-0 text-white px-2">/</p>
			<p class="m-0 text-white"><a class="text-white" href="{{ url('/menupelanggan') }}">Menu</a></p>
			<p class="m-0 text-white px-2">/</p>
			<p class="m-0 text-white"><a class="text-white" href="{{ url('/bayar') }}">Pembayaran</a></p>
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
				<h2 class="">History Pembayaran</h2>
			</div>
		</div>
	</div>
</section>
	
<section class="ftco-section ftco-cart">
	<div class="container" style="margin-top: -100px;">
		<div style="margin-bottom: 15px; border-radius: 30px;">
			<a class="btn btn-danger btn-sm" style="border-radius: 5px;" title="Cetak History Pembayaran" 
				href=" {{ url('bayar-pdf') }}">
				<i class="fas fa-file-pdf" style="margin-right: 5px;"></i> Cetak History 
			</a>
		</div>
		
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
                                <th>No</th>
                                <th>User</th>
                                <th>Metode Pembayaran</th>
                                <th>tanggal</th>
                                <th>Kode Pesanan</th>
								<th>Bukti Pembayaran</th>
                                <th>Status Pembayaran</th>
							</tr>
						</thead>
						<tbody>
						@php $no= 1; @endphp
                        @foreach($pembayaran as $row)

						@if ($row->users->id == Auth::user()->id)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td>{{ $row->users->name }}</td>
                            <td>{{ $row->metodePembayaran }}</td>
                            <td>{{ $row->tanggal }}</td>
                            <td>{{ $row->pesanan->kodePesanan }}</td>
							<td width="7%">
								@empty($row->buktiPembayaran)
								<img src="{{ url('assets/img/bukti/nophoto.png') }}" alt="Profile" style="border-radius: 5px; width: 60px; height: 60px;">
								@else
								<img src="{{ url('assets/img/bukti/'.$row->buktiPembayaran) }}" alt="Profile" style="border-radius: 5px; width: 60px; height: 60px;">
								@endempty
							</td>
                            
                            <td style="text-align: center;">
                                <span class="badge text-white {{ ($row->statusPembayaran == 'Sudah Di Konfirmasi') ? 'bg-success' : 'bg-danger'}}"
                                    style="padding: 10px; font-size: 12px;">
                                {{ ($row->statusPembayaran  == 'Sudah Di Konfirmasi') ? 'Sudah Di Konfirmasi' : 'Belum Di Konfirmasi'}}
                                </span>
                            </td>
                        </tr>
						@endif
                        @endforeach

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