@extends('admin.layouts.layout')
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
              <form role="form" method="POST" action="/category/edit/{{$oldCategory->id}}">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Loại sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại sản phẩm" name="category_name" value="{{$oldCategory->category_name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tiêu đề</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$oldCategory->description}}</textarea>
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