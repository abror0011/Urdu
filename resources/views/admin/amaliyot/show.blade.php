@extends('layouts.admin' ,['title' => 'Amaliyotni ko\'rish'])

@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
             Amaliyot
             <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.amaliyot.index') }}"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5>
    </div>
    <div class="card-body">
        <table class="table table-responsive-sm text-gray-900">
            <tr>
                <th>Rasm:</th>
            </tr>
            <tr>
                <td>
                    <img src="/storage/{{$show->images->thumb}}" width="200px" alt="">
                </td>
            </tr>
            <tr>
                <th>Izoh:</th>
            </tr>
            <tr>
                <td>
                    {{$show->title}}
                </td>
            </tr>
           
            
        </table>
    </div>
</div>
@endsection