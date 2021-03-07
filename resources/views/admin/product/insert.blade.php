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
              <form role="form" method="POST" action="{{url('/product/insert')}}" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập sản phẩm" name="product_name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Loại sản phẩm</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="id_category">
                    <option value="">Chọn loại sản phẩm</option>
                    @foreach ($category as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Ảnh đại diện</label>
                    <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Miêu tả</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã code" name="code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Màu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập màu" name="color">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Giá</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá" name="price">
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