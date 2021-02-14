@extends('layouts.admin',['title' => 'Talabalar'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Talabalar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.students.create')}}"><i class="fas fa-plus-circle"></i> Yaratish</a>
        </h5>
    </div>
    <div class="card-body table-responsive-sm">
        @include('admin.alerts.main')
        <table class="table table-bordered text-gray-900">
            <thead>
                <th>Ismi</th>
                <th>Familiyasi</th>
                <th>Kursi</th>
                <th>Guruhi</th>
                <th>Amaliyot manzili</th>
                
                <th width="100px">Amallar</th>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->course}}</td>
                    <td>{{$student->group}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <a href="{{route('admin.students.show',$student->id)}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-eye"></i>
                            </a>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="{{route('admin.students.edit',$student->id)}}"><i class="fa fa-edit"></i> @lang('Tahrirlash')</a>
                                    <button class="dropdown-item delete-btn" data-url="{{route('admin.students.destroy',$student->id)}}"><i class="fa fa-trash"></i> @lang('O\'chirish')</button>
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
            {{ $students->links()}}                            
        </nav>
        
    </div>
</div>
@endsection