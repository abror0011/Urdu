@extends('layouts.admin',['title' => 'Yangiliklar'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Yangiliklar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.posts.create')}}">Yaratish</a>
        </h5>
    </div>
    <div class="card-body table-responsive-sm">
        @include('admin.alerts.main')
        <table class="table table-bordered text-gray-900">
            <thead>
                <th>Rasm</th>
                <th>Sarlavha</th>
                {{-- <th>Maqola</th> --}}
                <th width="180px">Amallar</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td><img src="/storage/{{$post->thumb}}" width="70px" alt=""></td>
                    <td>{{$post->title}} </td>
                    <td>
                        <div class="btn-group " >
                            <div class="">
                                <a href="{{route('admin.posts.show',$post->id)}} " class="btn btn-sm btn-warning mr-1"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="">
                                <a href="{{route('admin.posts.edit',$post->id)}} " class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="">
                                <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav class="blog-pagination float-right justify-content-center d-flex">
            {{ $posts->links()}}                            
        </nav>
        
    </div>
</div>  
@endsection