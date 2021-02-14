@extends('layouts.admin',['title' => 'AdminProfile'])
@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Profilni tahrirlash
                </h6>
            </div>
            <div class="card-body">
                @include('admin.alerts.main')
                <form method="POST" action="{{ route('admin.admin_profile_update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-3">
                            <img class="rounded-circle w-100 img-thumbnail" src="{{$user->getAvatar()}}">
                            <div class="form-group pretty-file-selector">
                                <input class="form-control-file d-none" type="file" name="img">
                                <button type="button" class="btn btn-outline-primary btn-block mt-2">
                                    <i class="fa fa-image"></i> Rasmni tanlang
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="">Tel:</label>
                                <input class="form-control" value="{{$user->phone}} " name="phone" type="text" required>
                            </div>
                               
                            <button type="submit" class="btn btn-success">Saqlash</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                   Parolni tahrirlash
                </h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.admin_update')}} ">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Yangi parol</label>
                        <input class="form-control" name="password" type="password" required>
                    </div>
                    <div class="form-group">
                        <label for="">Yangi parolni tastiqlash</label>
                        <input class="form-control"  name="password_confirmation"  type="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
</div>    

@endsection