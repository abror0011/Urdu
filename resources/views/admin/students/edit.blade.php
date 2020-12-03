@extends('layouts.admin',['title' => 'Talaba qo\'shish'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Talabani tahrirlash
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.students.index')}}"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5>
    </div>
    <div class="card-body">
        @include('admin.alerts.main')       
            <div class="row text-gray-900">
                <div class="col-lg-6">
                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.students.update',$student->id)}}">
                        @csrf
                        @method('PUT')
                    <div class="p-5">
                        <div class="form-group">
                            <label for="name">Ismi</label>
                            <input value="{{$student->first_name}}" id="name" class="form-control" name="first_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Familiyasi</label>
                            <input value="{{$student->last_name}}" class="form-control" name="last_name" type="text">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="">Kursi</label>
                                <input class="form-control" value="{{$student->course}}" name="course" type="number">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Guruhi</label>
                                <input class="form-control" value="{{$student->group}}" name="group" type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Amaliyot manzili</label>
                            <input class="form-control" value="{{$student->address}}" name="address" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input class="form-control" value="{{$student->user->phone}}" name="user_name" type="text">
                        </div>
                       

                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success btn-block">Saqlash</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">                    
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.password',$student->id)}} ">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="password">Yangi parol <span class="text-danger">*</span></label>
                                    <input name="password" id="name" required type="password" class="form-control">
                                </div> 
                                <div class="form-group">
                                    <label for="password_confirmation">Yangi parolni tasdiqlash <span class="text-danger">*</span></label>
                                    <input name="password_confirmation" id="password_confirmation" required type="password" class="form-control">
                                </div> 
                                <button type="submit" class="btn btn-danger btn-block">O'zgartirish</button>
                            </form>
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
    {!! JsValidator::formRequest('App\Http\Requests\PasswordRequest') !!}
@endsection