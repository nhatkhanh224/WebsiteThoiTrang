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
              <h3 class="card-title">Danh sách loại sản phẩm</h3><br>
              <span><a href="/products/trash" style="font-size:20px">Thùng rác ({{$countDeletedProduct}})</a></span>
              <div class="mt-4 d-flex align-items-center">
              <div class="form-group ">
                  <label for="exampleFormControlSelect1"></label>
                  <select class="form-control form-control-sm checkbox-select-all-options" name="action"
                      required>
                      <option value="">--Action--</option>
                      <option value="delete">Delete</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary btn-check-all check-all-submit-btn btn-sm disabled"
                  style="margin-top: 10px;">Action</button>
            </div>
            </div>
            

            @if(session('alert'))

              <section class='alert alert-success'>{{session('alert')}}</section>
            
            @endif  

            <!-- /.card-header -->
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
                @foreach($product as $pro)
                <tr>
                  <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="productIds[]"
                            value="{{$pro->id}}" id="defaultCheck1">
                    </div>
                  </td>
                  
                  <td>
                      {{$pro->product_name}}
                  </td>
                  <td><img src="{{asset('Product/large/'.$pro->image)}}" style="width:120px;"></td>
                  <td>{{$pro->code}}</td>
                  <td>{{$pro->color}}</td>
                  <td>{{$pro->price}} đ</td>
                  <td>{{$pro->created_at}}</td>
                  <td><a href="{{url('product/edit/'.$pro->id)}}">Edit <i class="fas fa-edit"></i></a><a href="{{url('product/delete/'.$pro->id)}}" data-toggle="modal" data-id="{{$pro->id}}"
                  data-target="#delete-product-model"> Delete <i class="fas fa-trash"></i></a><a href="{{url('product/insert-image/'.$pro->id)}}"> Add more pictures <i class="far fa-images"></i></a></td>
                  
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Chọn tất cả</th>
                  
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
  
  <!-- Modal -->
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
                deleteForm.action = 'product/delete/' + productId;
                deleteForm.submit();
            }
            //Checlbox all changed
            checkboxAll.change(function () {
                var isCheckedAll = $(this).prop('checked');
                productItemCheckbox.prop('checked', isCheckedAll);
                renderCheckAllSubmitBtn();
            })
            //Product item checkbox changed
            productItemCheckbox.change(function () {
                var isCheckedAll = productItemCheckbox.length === $('input[name="productIds[]"]:checked').length;
                checkboxAll.prop('checked', isCheckedAll);
                renderCheckAllSubmitBtn();
            })
            checkAllSubmitBtn.click(function (e) {
                e.preventDefault();
                var isSubmitable = !$(this).hasClass('disabled');
                if (isSubmitable) {
                  containerForm.submit();
                }
            })
            checkAllSubmitBtn.on('submit', function (e) {
                var isSubmitable = !$(this).hasClass('disabled');
                if (!isSubmitable) {
                  e.preventDefault();
                }
            })
            //Render checkall submit button
            function renderCheckAllSubmitBtn() {
                var checkedCount = $('input[name="productIds[]"]:checked').length;
                if (checkedCount > 0) {
                    checkAllSubmitBtn.removeClass('disabled');
                } else {
                    checkAllSubmitBtn.addClass('disabled');
                }
            }
        });
    </script>
@endsection