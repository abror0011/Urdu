@extends('layouts.admin',['title' => 'Amaliyotlar'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Amaliyotlar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.home')}}">Orqaga</a>
        </h5>
    </div>
    <div class="card-body row text-gray-900">
       @foreach ($amaliyot as $item)
        <div class="card col-sm-4 p-3 mb-3 mb-sm-0" style="width: 16rem;">
            <img src="/storage/{{$item->images->thumb}} " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">{{$item->title}} </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
        </div>
       @endforeach 
    </div>
</div>
@endsection