@extends('layouts.admin',['title' => 'Amaliyotlar'])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Amaliyotlar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.home')}}">Orqaga</a>
        </h5>
    </div>
    @include('admin.alerts.main') 
    <div class="card-body row text-gray-900">
       @foreach ($amaliyot as $index => $item)
        <div class="card col-lg-4 mt-3" style="width: 27rem;">
            <img src="/storage/{{$item->images->thumb}} " class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title"><i class="fas fa-user-graduate"></i> {{$item->student->first_name}} {{$item->student->last_name}} </h5>
                    <h5 class="card-title"><i class="fas fa-users"></i> {{$item->student->course}}-kurs {{$item->student->group}}-guruh</h5>
                    <p class="card-text ">{{$item->title}}</p>
                    <p class="cart-text text-lg"><i class="fas fa-poll fa-2x mr-2"></i> {{$item->rayting}}  <i class="far fa-star text-primary"></i></p>
                    
                </div>
        </div>
       @endforeach 
    </div>
</div>
@endsection