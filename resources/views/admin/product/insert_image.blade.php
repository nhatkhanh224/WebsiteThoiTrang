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
                <h3 class="card-title">{{$product->code}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/product/insert-image/{{$product->id}}" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="card-body">
                  
                  
                <div class="form-group">
                    <label for="exampleInputFile">Thêm ảnh</label>
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

      <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>
                    <div class="form-check">
                      <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="checkbox-all"
                              value="">Chọn tất cả
                      </label>
                    </div>
                  </th>
                  <th>Image Id</th>
                  <th>Product Id</th>
                  <th>Image</th>
                  <th>Ngày tạo</th>
                  <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                  
                @foreach($productImg as $productImg)
                <tr>
                <td>
                    
                  </td>
                  <td>{{$productImg->id}}</td>
                  <td>{{$productImg->id_product}}</td>
                  <td><img src="{{asset('Product/large/'.$productImg->image)}}" style="width:120px;"></td>
                  <td>{{$productImg->created_at}}</td>
                  <td><a href="" data-toggle="modal" data-id="{{$productImg->id}}"
                  data-target="#delete-product-model"> Delete <i class="fas fa-trash"></i></a></td>
                </tr>
                  
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  
                  <th>Chọn tất cả</th>
                  <th>Image Id</th>
                  <th>Product Id</th>
                  <th>Image</th>
                  <th>Ngày tạo</th>
                  <th>Tùy chọn</th>
                </tr>
                </tfoot>
              </table>
            </div>
    </section>
    
  
    <!-- /.content -->
  </div>
  <div class="modal fade" id="delete-product-model" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to delete ?
                    </div>
                    <div class="modal-footer">
                        <button id="btn-delete-product" type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
    </div>
    <form method="POST" name="delete-product-form">
    {{csrf_field()}}
    </form>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
            var productId;
            var deleteForm = document.forms['delete-product-form'];
            var checkboxAll = $('#checkbox-all');
            var productItemCheckbox = $('input[name="productIds[]"]');
            var checkAllSubmitBtn = $('.check-all-submit-btn');
            var containerForm = document.forms['container-form'];
            $('#delete-product-model').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                productId = button.data('id'); //Get id
            });
            var btnDeleteProduct = document.getElementById('btn-delete-product');
            btnDeleteProduct.onclick = function (event) {
                deleteForm.action = '/product/image/delete/' + productId;
                deleteForm.submit();
            }
            
        });
    </script>
@endsection