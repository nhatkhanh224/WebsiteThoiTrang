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
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="{{asset('web/css/index.css')}}" />
    
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}" />
  </head>
  <body>
    <div id="overlay" onclick="off()"></div>
    <div class="app">
        @include('layouts.frontLayouts.header')
        <div class="slide">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/slide-img2.jpg?1606806309918"
              />
              <div class="carousel-caption"></div>
            </div>
            <div class="carousel-item">
              <img
                src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/slide-img2.jpg?1605345188748"
              />
              <div class="carousel-caption"></div>
            </div>
            <div class="carousel-item">
              <img
                src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/slide-img3.jpg?1605345188748"
              />
              <div class="carousel-caption"></div>
            </div>
            <div class="carousel-item">
              <img
                src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/slide-img4.jpg?1605345188748"
              />
              <div class="carousel-caption"></div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <!-- Banner-->
      <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="banner-main">
                <div class="banner-main-cover"></div>
                <img
                  class="banner-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/xxx_4.jpg?1605610691002"
                  alt=""
                />
                <span class="banner-content">Checkerboard Cross Bag </span>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="banner-main">
                <img
                  class="banner-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/xxx_5.jpg?1605610691002"
                  alt=""
                />
                <span class="banner-content">Ball Pocket Short</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Banner-->
      <div class="product">
        <div class="container">
          <div class="product-title">
            <h2>NEW ARRIVAL</h2>
          </div>
          <div class="row">
          @foreach($product as $pro)
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
              <div class="product-main">
              <a href="/{{$pro->slug}}">
                <img
                  class="product-image"
                  src="{{asset('Product/large/'.$pro->image)}}"
                  alt=""
                />
                </a>
                <p class="product-name">{{$pro->product_name}}</p>
                <p class="product-price">{{$pro->price}} đ</p>
              </div>
            </div>
          @endforeach
          </div>

          <button type="button" class="product-button">Xem tất cả</button>
        </div>
      </div>
      <!-- Banner-->
      <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="banner-main">
                <img
                  class="banner-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/xxx_6.jpg?1605610691002"
                  alt=""
                />
                <span class="banner-content"> Dirtycoins Big Logo Hoodie </span>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="banner-main">
                <img
                  class="banner-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/xxx_7.jpg?1605610691002"
                  alt=""
                />
                <span class="banner-content"> PLAID SHORTS IN BRED </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Banner-->
      <div class="product">
        <div class="container">
          <div class="product-title">
            <h2>QUICK SALE</h2>
          </div>
          <div class="row">
          @foreach($product as $pro)
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
              <div class="product-main">
                <a href="/{{$pro->product_name}}">
                <img
                  class="product-image"
                  src="{{asset('Product/large/'.$pro->image)}}"
                  alt=""
                />
                </a>
                <p class="product-name">{{$pro->product_name}}</p>
                <p class="product-price">{{$pro->price}} đ</p>
              </div>
            </div>
          @endforeach
          </div>

          <button type="button" class="product-button">Xem tất cả</button>
        </div>
      </div>
      <div class="brand">
        <div class="container">
          <div class="brand-title">
            <h2>THƯƠNG HIỆU</h2>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              <div class="brand-main">
                <img
                  class="brand-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/brand1.png?1605610691002"
                  alt=""
                />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              <div class="brand-main">
                <img
                  class="brand-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/brand2.png?1605610691002"
                  alt=""
                />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              <div class="brand-main">
                <img
                  class="brand-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/brand3.png?1605610691002"
                  alt=""
                />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              <div class="brand-main">
                <img
                  class="brand-image"
                  src="//bizweb.dktcdn.net/100/369/010/themes/752396/assets/brand4.png?1605610691002"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      
      @include('layouts.frontLayouts.footer')
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{asset('web/js/index.js')}}"></script>
 
</html>
