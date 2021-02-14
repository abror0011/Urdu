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
        
            @if ($amaliyot->isEmpty())
            <div class="text-center col-lg-12">
                <h5 class="">Yangi qo'shilgan amaliyotlar yo'q!</h5>                
            </div>
            @endif
        
       @foreach ($amaliyot as $index => $item)
        <div class="card col-lg-4 mt-3" style="width: 27rem;">
            <img src="/storage/{{$item->images->thumb}} " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-graduate"></i> {{$item->student->first_name}} {{$item->student->last_name}} </h5>
                    <h5 class="card-title"><i class="fas fa-users"></i> {{$item->student->course}}-kurs {{$item->student->group}}-guruh</h5>
                    <p class="card-text">{{$item->title}}</p>
                    
                    <form method="POST" action="{{route('admin.rayting',$item->id)}}" >
                        @csrf
                        @method('PUT')
                        <fieldset class="rating">
                            <input type="radio" id="{{$index+10000}}" name="rating" value="5" /><label class = "full " for="{{$index+10000}}" title="Awesome - 5 stars"> </label>
                            <input type="radio" id="{{$index+20000}}" name="rating" value="4" /><label class = "full" for="{{$index+20000}}" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="{{$index+30000}}" name="rating" value="3" /><label class = "full" for="{{$index+30000}}" title="Meh - 3 stars"></label>
                            <input type="radio" id="{{$index+40000}}" name="rating" value="2" /><label class = "full" for="{{$index+40000}}" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="{{$index+50000}}" name="rating" value="1" /><label class = "full" for="{{$index+50000}}" title="Sucks big time - 1 star"></label>
                        </fieldset>
                        <button type="submit" class="btn btn-sm btn-primary mt-3 ml-2"><i class="fas fa-check"></i></button> 
                        
                    </form>
                     {{-- <a href="{{route('admin.batafsil',$item)}} " class="btn btn-outline-info">Batafsil</a>    --}}
                </div>
        </div>
       @endforeach 
    </div>
    <nav class="blog-pagination float-right justify-content-center d-flex">
         {{ $amaliyot->links()}}                            
    </nav>

</div>
@endsection