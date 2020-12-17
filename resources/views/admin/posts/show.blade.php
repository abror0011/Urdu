@extends('layouts.admin',['title' => 'Yangilikni ko\'rish'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
       <h5 class="m-0 font-weight-bold text-primary ">
           Yangilik
        <a href="{{route('admin.posts.index')}} " class="btn btn-sm btn-primary float-right"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5> 
    </div>
    <div class="card-body text-gray-900">
        <div class="card mb-3">
            <div class="text-center">
                <img src="/storage/{{$post->image}} " class="mt-3" width="550px" alt="...">
            </div>
            <div class="card-body">
              <p class="d-inline-block mr-3"><i class="fas fa-calendar"></i> {{$post->created_at->format('H:i d/m/y')}}  </p>
              {{-- <p class="d-inline-block"><i class="fas fa-eye"></i> {{$post->views}}</p>             --}}
              <h4 class="mb-4">{{$post->title}} </h4>
              <p class="card-text">{{$post->content}} </p>
            </div>
          </div>
         
    </div>   
</div>
@endsection()