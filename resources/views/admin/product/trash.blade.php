@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loại sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Loại sản phẩm</li>
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
              <h3 class="card-title">Thùng rác</h3><br>
              <span><a href="/products" style="font-size:20px">Danh sách sản phẩm</a></span>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Sản phẩm</th>
                  <th>Ảnh</th>
                  <th>Mã code</th>
                  <th>Màu</th>
                  <th>Giá</th>
                  <th>Ngày tạo</th>
                  <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($deletedProduct as $pro)
                <tr>
                  <td>{{$pro->id}}</td>
                  <td>
                      {{$pro->product_name}}
                  </td>
                  <td><img src="{{asset('Product/large/'.$pro->image)}}" style="width:120px;"></td>
                  <td>{{$pro->code}}</td>
                  <td>{{$pro->color}}</td>
                  <td>{{$pro->price}}</td>
                  <td>{{$pro->created_at}}</td>
                  <td><a href="{{url('product/delete/'.$pro->id)}}">Khôi phục</a><a href="{{url('product/delete/'.$pro->id)}}"> Xóa vĩnh viễn</a></td>
                  
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                
                <th>STT</th>
                  <th>Sản phẩm</th>
                  <th>Ảnh</th>
                  <th>Mã code</th>
                  <th>Màu</th>
                  <th>Giá</th>
                  <th>Ngày tạo</th>
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