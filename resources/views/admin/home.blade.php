@extends('layouts.admin',['title' => 'Dashboard'])
@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Boshqaruv paneli</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Talabalar soni</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('students')->count()}} ta</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bugungi sana</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{now()}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Row -->

    <div class="">

      <!-- Area Chart -->
      <div class="">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Top 10 Talaba</h6>
          </div>
          <div class="card-body ">
            <table class="table table-border table-responsive-sm table-striped text-gray-900 ">
              <thead>
                <tr>
                  <th>№</th>
                  <th>Ismi</th>
                  <th>Familiyasi</th>
                  <th>Guruhi</th>
                  <th>Umumiy bali</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach ($amaliyot as $item)
                    <tr>
                      <th>{{$index++}} </th>
                      <td>{{$item->first_name}}</td>
                      <td>{{$item->last_name}} </td>
                      <td>{{$item->group}} </td>
                      <td>{{$item->allRating}} ball </td>
                    </tr
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <!-- Pie Chart -->
     
    </div>
  </div>
@endsection