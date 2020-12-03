@extends('layouts.admin',['title' => 'Tahrirlash'])
@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Talabani tahrirlash
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.amaliyot.index')}}"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5>
    </div>
    <div class="card-body text-gray-900">
        @include('admin.alerts.main')
        <form method="POST" enctype="multipart/form-data" action="{{route('admin.amaliyot.update',$amaliyot->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-inline" for="">Rasm</label>
                <img src="/storage/{{$amaliyot->images->thumb}}" class="img-thumbnail" width="110px" class="img img-thumbnail" alt="">
                <input class="input-group mt-3" name="image" type="file">
            </div>
            <div class="form-group">
                <label for="">Izoh</label>
                <input value="{{$amaliyot->title}} " type="text" name="title" class="form-control">
            </div>
            <button class="btn btn-success float-right" >Saqlash</button>
        </form>
    </div>
</div>
@endsection