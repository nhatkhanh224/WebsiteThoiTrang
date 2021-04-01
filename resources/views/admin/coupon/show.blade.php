@extends('layouts.adminLayouts.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mã giảm giá</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mã giảm giá/li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách mã giảm giá</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Mã giảm giá</th>
                  <th>Giảm</th>
                  <th>Ngày bắt đầu</th>
                  <th>Ngày kết thúc</th>
                  <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($coupon as $coupon)
                <tr>
                  <td>{{$coupon->id}}</td>
                  <td>
                      {{$coupon->coupon_name}}
                  </td>
                  <td>{{$coupon->money}}</td>
                  <td>{{$coupon->start_date}}</td>
                  <td>{{$coupon->expiry_date}}</td>
                  <td><a href="{{url('coupon/edit/'.$coupon->id)}}">Edit</a><a href="{{url('coupon/delete/'.$coupon->id)}}"> Delete</a></td>
                  
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>STT</th>
                  <th>Mã giảm giá</th>
                  <th>Giảm</th>
                  <th>Ngày tạo</th>
                  <th>Ngày kết thúc</th>
                  <th>Tùy chọn</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection