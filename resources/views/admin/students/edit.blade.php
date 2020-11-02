@extends('layouts.admin')
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
        <form method="POST" enctype="multipart/form-data" action="{{route('admin.students.update',$student->id)}}">
            @csrf
            @method('PUT')
            <div class="row text-gray-900">
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="form-group">
                            <label for="name">Ismi</label>
                            <input value="{{$student->first_name}}" id="name" class="form-control" name="first_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Familiyasi</label>
                            <input value="{{$student->last_name}}" class="form-control" name="last_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Kursi</label>
                            <input class="form-control" value="{{$student->course}}" name="course" type="number">
                        </div>
                        <div class="form-group">
                            <label for="">Guruhi</label>
                            <input class="form-control" value="{{$student->group}}" name="group" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="form-group">
                            <label for="">Amaliyot manzili</label>
                            <input class="form-control" value="{{$student->address}}" name="address" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Login</label>
                            <input class="form-control" value="{{$student->user_name}}" name="user_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Parol</label>
                            <input value="{{$student->password}} " class="form-control" name="password" type="password">
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