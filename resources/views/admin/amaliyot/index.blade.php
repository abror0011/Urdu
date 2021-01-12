@extends('layouts.admin',['title'=>'Amaliyot'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Amaliyotlar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.amaliyot.create')}}"><i class="fas fa-plus-circle"></i> Yaratish</a>
        </h5>
    </div>
    <div class="card-body table-responsive-sm">
        @include('admin.alerts.main')        
        <table class="table table-bordered text-gray-900">
            <thead>
                <th>Rasm</th>
                <th>Izoh</th>                
                <th width="100px">Amallar</th>
            </thead>
            <tbody>
                @foreach($amaliyot as $value)
                    @if ($value->student_id == $user)
                    <tr>
                        {{-- {{dd($value->images->thumb)}} --}}
                        <td><img src="/storage/{{$value->images->thumb}}" width="80px" alt="AAA"> </td>
                        <td>{{$value->title}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <a href="{{route('admin.amaliyot.show',$value->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="{{route('admin.amaliyot.edit',$value->id)}}"><i class="fa fa-edit"></i> @lang('Edit')</a>
                                        <button class="dropdown-item delete-btn" data-url="{{route('admin.amaliyot.destroy',$value->id)}}"><i class="fa fa-trash"></i> @lang('Delete')</button>
                                    </div>
                                </div>
                            </div>                        
                        </td>
                    </tr>
                    @else
                    @continue
                        <div class="text-gray-900">
                            <h6 class="text-center">Sizda hali amaliyot qo'shilmagan! Amaliyot qashish uchun <a href="{{route('admin.amaliyot.create')}} ">Yaratish</a> ni boshing</h6>
                            <h6 class="text-center"></h6>
                        </div>
                    @endif
                    
                @endforeach 
                @include('admin.components.delete-confirm')

            </tbody>
        </table>
       
    </div>
</div>
    
@endsection