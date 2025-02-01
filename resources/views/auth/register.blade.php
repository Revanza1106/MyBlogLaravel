@extends('layouts.app')

@section('content')
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form method="POST" action="{{ route('register') }}" style="width: 23rem;">
            @csrf

            <h3 class="fw-normal mb-2 pb-3" style="letter-spacing: 1px;">Register</h3>

            <div class="form-outline mb-2">
              <label class="form-label" for="name">{{ __('Name') }}</label>
              <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-outline mb-2">
              <label class="form-label" for="email">{{ __('Email Address') }}</label>
              <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-outline mb-2">
              <label class="form-label" for="password">{{ __('Password') }}</label>
              <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
              <input type="password" id="password-confirm" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="pt-1 mb-4">
              <button type="submit" class="btn btn-info btn-lg btn-block">
                {{ __('Register') }}
              </button>
            </div>

            @if (Route::has('login'))
              <p>Already have an account? <a href="{{ route('login') }}" class="link-info">{{ __('Login Here') }}</a></p>
            @endif

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
@endsection