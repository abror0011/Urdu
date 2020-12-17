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
       @foreach ($amaliyot as $index => $item)
        <div class="card col-sm-4 p-3 mb-3 mb-sm-0" style="width: 16rem;">
            <img src="/storage/{{$item->images->thumb}} " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-graduate"></i> {{$item->student->first_name}} {{$item->student->last_name}} </h5>
                    <h5 class="card-title"><i class="fas fa-users"></i> {{$item->student->course}}-kurs {{$item->student->group}}-guruh</h5>
                    <p class="card-text">{{$item->title}}</p>
                    <p class="cart-text">{{$item->rayting}} </p>
                    <form method="POST" action="{{route('admin.rayting',$item->id)}}" >
                        @csrf
                        @method('PUT')
                        <fieldset class="rating">
                            <input type="radio" id="{{$index}}" name="rating" value="5" /><label class = "full" for="{{$index}}" title="Awesome - 5 stars"></label>
                            <input type="radio" id="{{$index+1}}" name="rating" value="4" /><label class = "full" for="{{$index+1}}" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="{{$index+2}}" name="rating" value="3" /><label class = "full" for="{{$index+2}}" title="Meh - 3 stars"></label>
                            <input type="radio" id="{{$index+4}}" name="rating" value="2" /><label class = "full" for="{{$index+4}}" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="{{$index+5}}" name="rating" value="1" /><label class = "full" for="{{$index+5}}" title="Sucks big time - 1 star"></label>
                        </fieldset>
                        
                            
                        <button type="submit" class="btn btn-primary">
                            Baholash                                                      
                        </button>
                    </form>
                     {{-- <a href="{{route('admin.batafsil',$item)}} " class="btn btn-outline-info">Batafsil</a>    --}}
                </div>
        </div>
       @endforeach 
    </div>
</div>
@endsection