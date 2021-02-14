@extends('layouts.admin',['title' => 'Yangiliklar'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Yangiliklar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.posts.create')}}"><i class="fas fa-plus-circle"></i> Yaratish</a>
        </h5>
    </div>
    <div class="card-body table-responsive-sm">
        @include('admin.alerts.main')
        <table class="table table-bordered text-gray-900">
            <thead>
                <th>Rasm</th>
                <th>Sarlavha</th>
                {{-- <th>Maqola</th> --}}
                <th width="100px">Amallar</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td><img  src="/storage/{{$post->thumb}}" width="100px" alt=""></td>
                    <td>{{$post->title}} </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <a href="{{route('admin.posts.show',$post->id)}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-eye"></i>
                            </a>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="{{route('admin.posts.edit',$post->id)}}"><i class="fa fa-edit"></i> @lang('Tahrirlash')</a>
                                    <button class="dropdown-item delete-btn" data-url="{{route('admin.posts.destroy',$post->id)}}"><i class="fa fa-trash"></i> @lang('O\'chirish')</button>
                                </div>
                            </div>
                        </div>                        
                    </td>
                </tr>
                @endforeach
                @include('admin.components.delete-confirm')

            </tbody>
        </table>
        <nav class="blog-pagination float-right justify-content-center d-flex">
            {{ $posts->links()}}                            
        </nav>
        
    </div>
</div>  
@endsection