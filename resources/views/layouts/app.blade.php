@include('auth.header')
    <!-- Page Header -->
        <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
            <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
                <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Login</h1>
                <div class="d-inline-flex mb-lg-5">
                    <p class="m-0 text-white"><a class="text-white" href="{{ url('/') }}">Home</a></p>
                    <p class="m-0 text-white px-2">/</p>
                    <p class="m-0 text-white"><a class="text-white" href="{{ url('/login') }}">Login</a></p>
                    <p class="m-0 text-white px-2">/</p>
                    <p class="m-0 text-white"><a class="text-white" href="{{ url('/reset') }}">Reset</a></p>
                </div>
            </div>
        </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="section-title">
			<div class="col-md-12 heading-section ftco-animate text-center">
				<h4 class="subheading">DigiCoffee</h4>
            	<h1 class="mb-4">Bagian Kita</h1>
			</div>
		</div>
    </div>

<main class="py-4">
    @yield('content')
</main>

@include('auth.footer')

