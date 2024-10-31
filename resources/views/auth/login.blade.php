@extends('auth.ilogin')
@section('content')

<!-- Page Header -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Login</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/') }}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/menupelanggan') }}">Login</a></p>
            </div>
        </div>
    </div>
<!-- Page Header End -->



<div class="container-fluid" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="card" style="padding-top: 50px; padding-bottom: 50px; background-color: linen;">
        <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <img src="{{ url('assets/img/3.png')}}"
                    class="img-fluid" alt="Sample image" style="width: 600px; height: 400px; border-radius: 30px;">
                </div>

                <div class="col-md-9 col-lg-9 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div style="margin-bottom: 50px; color:black;"
                    class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3 fw-bold">Sign in Your Account</p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                        required autocomplete="email" autofocus placeholder="Enter a valid email address" />

                        <label class="form-label" for="email" style="margin-top: 2px;">{{ __('Email Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Enter password" />

                        <label class="form-label" for="password" style="margin-top: 2px;">{{ __('Password') }}</label>
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-body" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                    
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}
                        </button>

                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                            <a class="link-danger" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </p>
                    </div>

                    </form>
                </div>
        </div>
    </div>
</div>
@endsection




