@extends('layouts.admin')

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
             Talaba
             <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.students.index') }}"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Ismi</th>
                <td>{{$student->first_name}}</td>
            </tr>
            <tr>
                <th>Familiyasi</th>
                <td>
                    {{$student->last_name}}
                </td>
            </tr>
            <tr>
                <th>Kursi</th>
                <td>
                    {{$student->course}} 
                </td>
            </tr>
            <tr>    
                <th>Guruhi</th>
                <td>
                    {{$student->group}}
                </td>
            </tr>
            <tr>
                <th>Amaliyot manzili</th>
                <td>
                    {{$student->address}}
                </td>
            </tr>
            <tr>
                <th>Login</th>
                <td>
                    {{$student->user->name}}
                </td>
            </tr>
            <tr>
                <th>Parol</th>
                <td>
                    {{-- {{$users->password}} --}}
                </td>
            </tr>
            <tr>
                <th>Bahosi</th>
                <td>
                    {{$student->reyting}}
                </td>
            </tr>
            
        </table>
    </div>
</div>
@endsection