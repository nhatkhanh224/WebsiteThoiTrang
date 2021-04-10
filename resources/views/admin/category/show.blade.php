@extends('layouts.adminLayouts.dashboard')
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
              <h3 class="card-title">Danh sách loại sản phẩm</h3>
            </div>
            @if(session('alert'))

              <section class='alert alert-success'>{{session('alert')}}</section>
            
            @endif  
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Loại sản phẩm</th>
                  <th>Ngày tạo</th>
                  <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $cat)
                <tr>
                  <td>{{$cat->id}}</td>
                  <td>
                      {{$cat->category_name}}
                  </td>
                  <td>{{$cat->created_at}}</td>
                  <td><a href="{{url('category/edit/'.$cat->id)}}">Edit</a><a href="{{url('category/delete/'.$cat->id)}}"> Delete</a></td>
                  
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>STT</th>
                  <th>Loại sản phẩm</th>
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