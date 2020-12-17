@extends('layouts.auth')

@section('content')
 <!-- Outer Row -->
 <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                <form method="POST" class="user" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group">
                    <input placeholder="Phone" id="phone" type="tel" 
                      class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autofocus>
                      @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror 
                  </div>
                  <div class="form-group">
                    <input placeholder="Password" id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>

                        <label class="custom-control-label" for="customCheck">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-user">
                    {{ __('Login') }}
                </button>
                  <hr>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
@section('custom-scripts')  
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\LoginRequest') !!}
@endsection
