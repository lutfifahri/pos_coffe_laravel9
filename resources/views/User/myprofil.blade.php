@extends('User.imenupelanggan')
@section('content')
@include('sweetalert::alert')

<!-- Page Header -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Home</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/Home') }}">User</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/myprofil') }}">My Profile</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="ftco-section ftco-cart">
	<div class="container" style="margin-top: -100px;">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table">
						<thead class="thead-primary">
                        <tr class="text-center">
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
						</thead>
						<tbody>
                        @foreach($user as $row)
                        @if ($row->id == Auth::user()->id)
                        <tr>

                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->no_hp}}</td>
                            <td>{{ $row->alamat}}</td>
                            <td width="7%">
                                @empty($row->foto)
                                <img src="{{ url('assets/img/user/nophoto.png') }}" width="100%" alt="Profile" style="border-radius: 5px;">
                                @else
                                <img src="{{ url('assets/img/user/'.$row->foto) }}" width="100%" alt="Profile" style="border-radius: 5px;">
                                @endempty
                            </td>
                            <td width="15%">
                                <form method="POST" id="formDelete">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-success btn-sm" title="Detail Users"
                                        href=" {{ route('myprofil.show',$row->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    &nbsp;
                                    <a class="btn btn-secondary btn-sm" title="Ubah Users"
                                        href=" {{ route('myprofil.edit',$row->id) }}">
                                        <i class="bi bi-pencil-square" style="padding-right: 4px; color: white;"></i>
                                    </a>
                                    &nbsp;
                                </form>
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

@endsection