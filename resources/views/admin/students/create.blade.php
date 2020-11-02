@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Talaba qo'shish
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.students.index')}}"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5>
    </div>
    <div class="card-body">
        @include('admin.alerts.main')
        <form method="POST" enctype="multipart/form-data" action="{{route('admin.students.store')}}">
            @csrf
            <div class="row text-gray-900">
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="form-group">
                            <label for="name">Ismi <span style="color: red">*</span></label>
                            <input value="{{@old('first_name')}}" id="name" class="form-control @error('name') is-invalid @enderror" name="first_name" type="text">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror  
                        </div>
                        <div class="form-group">
                            <label for="">Familiyasi <span style="color: red">*</span></label>
                            <input value="{{@old('last_name')}}" class="form-control" name="last_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Kursi <span style="color: red">*</span></label>
                            <input class="form-control" value="{{@old('course')}}" name="course" type="number">
                        </div>
                        <div class="form-group">
                            <label for="">Guruhi <span style="color: red">*</span></label>
                            <input class="form-control" value="{{@old('group')}}" name="group" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="form-group">
                            <label for="">Amaliyot manzili<span style="color: red">*</span></label>
                            <input class="form-control" value="{{@old('address')}}" name="address" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email<span style="color: red">*</span></label>
                            <input class="form-control" value="{{@old('email')}}" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Login<span style="color: red">*</span></label>
                            <input class="form-control" value="{{@old('user_name')}}" name="user_name" type="text" >
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="password">Parol<span style="color: red">*</span></label>
                                <input id="password" class="form-control" 
                                    name="password" type="password" required autocomplete="new-password">
                                    {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror --}}
                                     
                            </div>
                            <div class="col-sm-6">
                                <label for="password-confirm">Parolni takrorlang<span style="color: red">*</span></label>
                                <input id="password-confirm" class="form-control" name="password_confirmation" type="password" required autocomplete="new-password">

                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success btn-block">Saqlash</button>
                        </div>
                    </div>
                </div>           
            </div>                        
        </form>
    </div>
</div>
@endsection
@section('custom-scripts')  
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\StudentRequest') !!}
@endsection