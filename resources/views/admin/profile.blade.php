@extends('layouts.admin',['title' => 'Profilni tahrirlash'])

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Profilni tahrirlar
                </h6>
            </div>
            <div class="card-body">
                @include('admin.alerts.main')
                <form method="POST" action="{{route('admin.profile_update')}} " enctype="multipart/form-data">
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
                                <label for="">Ismi</label>
                                <input class="form-control" value="{{$user->student->first_name}} " name="name" type="text" required>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Familiyasi</label>
                                        <input class="form-control" value="{{$user->student->last_name}}" name="last_name"  type="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Tel</label>
                                        <input class="form-control" value="{{$user->phone}}" name="phone"  type="phone" required>
                                    </div>     
                                </div>
                            </div>    
                            <button type="submit" class="btn btn-success">Saqlash</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                   Parolni tahrirlash
                </h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.password_update')}} ">
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
                    <button type="submit" class="btn btn-primary mt-3">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection