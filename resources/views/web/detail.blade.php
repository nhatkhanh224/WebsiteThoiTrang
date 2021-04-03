<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dirty Coins</title>
    <link
      rel="shortcut icon"
      href="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/favicon.png?1605610691002"
      type="image/png"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="{{asset('web/css/detail.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}" />
  </head>
  <body>
    <div id="overlay" onclick="off()"></div>
    
    <div class="app">
    @include('layouts.frontLayouts.header',['categories'=>\App\Models\Category::all()])
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        
        <h4 class="modal-title"><i class="far fa-check-square"></i>THÊM VÀO GIỎ HÀNG THÀNH CÔNG</h4>
        <button class="close" onclick="closeModal();"></button>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="col-sm-4 col-xs-5">
            <img style="width: 100%" src="https://bizweb.dktcdn.net/100/369/010/products/dico-polo-3-w.jpg?v=1608052574267" alt="">
          </div>
          <div class="col-sm-8 col-xs-7">
            <h3>Shirt</h3>
            <span>Số lượng mua: 1</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button>Tiếp tục mua sắm</button>
      <button>Xem giỏ hàng</button>
      </div>
      </div>
    </div>
      <!-- End Header -->
      <div class="product">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xs-12 col-sm-12">
              <div class="product-image">
                <img
                  src="{{asset('Product/large/'.$product->image)}}"
                  alt="" 
                />
              </div>
              <div class="product-image-small">
              @foreach($image_product as $image)
                <img
                  src="{{asset('Product/large/'.$image->image)}}"
                  onclick="changeImage('{{$image->id}}')"
                  id="{{$image->id}}"
                  alt=""
                />
              @endforeach
              </div>
            </div>
          
            <div class="col-md-4 col-xs-12 col-sm-12">
            <form action="{{url('/addToCart')}}" method="POST">
            {{csrf_field()}}
            <div class="product-information">
                <input type="hidden" name="id_product" value="{{$product->id}}" />
                <input type="hidden" name="product_name" value="{{$product->product_name}}" />
                <input type="hidden" name="product_code" value="{{$product->code}}" />
                <input type="hidden" name="thumbnail" value="{{$product->image}}" />
                <input type="hidden" name="price" value="{{$product->price}}" />
                
                <h1>{{$product->product_name}}</h1>
                <span class="product-price"><?php echo number_format($product->price, 0, '', ','); ?> đ</span>
                <div class="form-group">
                  <select class="form-control" id="sel1" name="size">
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" id="sel1" name="color">
                    <option>{{$product->color}}</option>
                    
                  </select>
                </div>
                <button type="submit" class="product-button" onclick="showPanel()">THÊM VÀO GIỎ</button>
                <button class="product-button add-to-cart">MUA NGAY</button>
                <div class="product-detail">
                  <p>Chi tiết sản phẩm:</p>
                  <ul>
                    <li>{{$product->description}}</li>
                  </ul>
                </div>
              </div>
            </form>
              
            </div>
          </div>
        </div>
      </div>
      <div class="related-product">
        <div class="container">
          <h2 class="related-product-title">SẢN PHẨM LIÊN QUAN</h2>
          <div id="mixedSlider">
            <div class="MS-content">
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
            </div>
            <div class="MS-controls">
              <button class="MS-left">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
              </button>
              <button class="MS-right">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.frontLayouts.footer')
    </div>
  </body>
  <script src="{{asset('web/js/multislider.js')}}"></script>
  <script src="{{asset('web/js/detail.js')}}"></script>
</html>
