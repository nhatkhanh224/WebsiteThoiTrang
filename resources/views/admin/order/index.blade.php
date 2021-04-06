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
              <li class="breadcrumb-item active">Đơn đặt hàng</li>
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
              <h3 class="card-title">Danh sách các đơn đặt hàng</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên khách hàng</th>
                  <th>Email</th>
                  <th>Địa chỉ giao hàng</th>
                  <th>Số điện thoại</th>
                  <th>Mã giảm giá</th>
                  <th>Tổng số tiền</th>
                  <th>Tình trạng</th>
                  <th>Ngày đặt hàng</th>
                  <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $order )
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->user_email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->coupon}}</td>
                        <td>{{$order->total}} đ</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->created_at}}</td>
                        <td><a href="{{url('review-order/detail/'.$order->id)}}">Xem chi tiết</a><br><a href="{{url('review-order/status/'.$order->id)}}">Sửa trạng thái đơn hàng</a></td>
                    </tr>

                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>STT</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Địa chỉ giao hàng</th>
                <th>Số điện thoại</th>
                <th>Mã giảm giá</th>
                <th>Tổng số tiền</th>
                <th>Tình trạng</th>
                <th>Ngày đặt hàng</th>
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