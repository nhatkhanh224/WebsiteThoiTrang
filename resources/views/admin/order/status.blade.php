@extends('layouts.adminLayouts.dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{url('/review-order/status/'.$order->id)}}">
              {{csrf_field()}}
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Trạng thái đơn hàng</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                    <option value="">Tùy chọn</option>
                    <option value="Mới đặt hàng">Mới đặt hàng</option>
                    <option value="Chờ lấy hàng">Chờ lấy hàng</option>
                    <option value="Đang giao">Đang giao</option>
                    <option value="Giao hàng hoàn tất">Giao hàng hoàn tất</option>
                    <option value="Đơn bị hủy">Đơn bị hủy</option>
                    </select>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            


          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection