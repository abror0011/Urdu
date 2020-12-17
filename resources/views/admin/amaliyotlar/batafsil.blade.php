@extends('layouts.admin',['title' => 'Amaliyot batafsil'])
@section('content')
<div class="card mb-3" ">
    <div class="row no-gutters">
      <div class="col-md-6">
        <img src="/storage/{{$batafsil->images->image}}" width="150px" class="card-img" alt="...">
      </div>
      <div class="col-md-6 text-gray-900    ">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <form action="{{route('admin.rayting',$batafsil->id)}}" method="POST">
            @csrf
            @method('PUT')
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset> 
            <button type="submit" class="btn btn-outline-primary">Baholash</button> 
        </form>
          
        </div>
      </div>
    </div>
  </div>
@endsection