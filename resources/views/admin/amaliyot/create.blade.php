@extends('layouts.admin',['title' => 'Amaliyot qo\'shish'])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">
            Talaba qo'shish
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.amaliyot.index')}}"><i class="fa fa-arrow-left"></i> Orqaga</a>
        </h5>
    </div>
    <div class="card-body text-gray-900">
        @include('admin.alerts.main')        
        <form method="POST" enctype="multipart/form-data" action="{{route('admin.amaliyot.store')}}">
            @csrf
           
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Rasm</span>
                </div>
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Faylni tanlang</label>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Izoh</span>
                </div>
                <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
                      
            <button type="submit" class="btn btn-primary btn-sm float-right">Yuborish</button>                    
        </form>
    </div>
</div>
@endsection
@section('custom-scripts')  
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\StudentRequest') !!}
@endsection