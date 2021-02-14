@extends('layouts.admin',['title' => 'Yangilikni tahrirlash'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Yangilik qo'shish
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.posts.index')}}"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5>
    </div>
    <div class="card-body">
        @include('admin.alerts.main')
        <form method="POST" enctype="multipart/form-data" action="{{route('admin.posts.update',$post->id)}}">
            @csrf
            @method('PUT')
            <div class="text-gray-900">
                <div class="form-group">
                    <label class="d-block" for="Rasm">Rasm</label>
                    <img src="/storage/{{$post->thumb}}" class="mb-2" width="110px">
                    <input type="file" name="image" id="Rasm" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Sarlavha</label>
                    <input type="text" value="{{$post->title}}" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Maqola</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$post->content}} </textarea>
                </div>
                <button class="btn btn-success float-right">Saqlash</button>
            </div>                        
        </form>
    </div>
</div>   
@endsection