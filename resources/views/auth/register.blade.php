@extends('layouts.auth')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">{{ __('Ro\'yxatdan o\'tish') }}</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" placeholder="@lang('Ism')"  required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="phone" type="tel" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"  required autocomplete="phone"  placeholder="@lang('Telefon raqamingizni kiriting, masalan: 997775566')">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control form-control-user  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="@lang('Parol')" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="@lang('Parolni takrorlang')">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0 ">

                                <div data-date-format="mm-dd-yyyy">
                                    <input id="datepicker" class="form-control form-control-user @error('birth_day') is-invalid @enderror" type="text" name="birth_day" required placeholder="Tug'ilgan sana"/>
                                </div>
                                @error('birth_day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <select class="custom-select" id="sex" name="sex">
                                        <option value="1">@lang('Erkak')</option>
                                        <option value="0">@lang('Ayol')</option>
                                    </select>
                                    <div class="input-group-append">
                                      <label class="input-group-text" for="sex">Jins</label>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Saqlash') }}
                            </button>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">{{ __('Allaqachon ro\'yxatdan o\'tganmisiz? Kirish!') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
