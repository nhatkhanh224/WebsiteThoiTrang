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
    <link rel="stylesheet" href="{{asset('web/css/product.css')}}" />
    <link rel="stylesheet" href="/css/responsive.css" />
  </head>
  <body>
    <div id="overlay" onclick="off()"></div>
    <div class="app">
    @include('layouts.frontLayouts.header',['categories'=>\App\Models\Category::all()])
      <!-- End Header -->
      <div class="header-banner">
        <h1 class="header-banner-title"><?php echo strtoupper($category->slug) ?></h1>
      </div>
      <div class="container">
        <div class="option">
          <div class="filter">
            <!-- <ul class="filter-list">
              <li class="filter-item-price"><span class="filter-price">Lọc giá</span></li>
              <li class="filter-item-brand">Thương hiệu</li>
              <li class="filter-item-type">Loại</li>
              <li class="filter-item-size">Kích thước</li>
              <li class="filter-item-color">Màu sắc</li>
              <div class="sort">
                <li class="sort-button">Thứ tự</li>
              </div>
            </ul> -->
            <form action="{{url('/filter-price')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" value="{{$category->slug}}" name="url">
            <div class="filter-price" onclick="showMenu('filterPrice')">
              <span class="filter-price-title">Lọc giá</span>
              <div class="filter-menu" id="filter-price">
                <ul>
                  <li>
                    <input type="checkbox" onchange="javascript:this.form.submit();" value="0-100000" name="min_price">
                    Giá dưới 100,000đ</li>
                  <li>
                    <input type="checkbox" onchange="javascript:this.form.submit();" value="100000-200000" name="min_price">
                    100,000đ-200,000đ
                  </li>
                    
                  <li>
                  <input type="checkbox" onchange="javascript:this.form.submit();" value="200000-300000" name="min_price">
                    200,000đ-300,000đ
                  </li>
                    
                  <li>
                  <input type="checkbox" onchange="javascript:this.form.submit();" value="300000-500000" name="min_price">  
                  300,000đ-500,000đ
                  </li>
                    
                  <li>
                  <input type="checkbox" onchange="javascript:this.form.submit();" value="500000-9999999999" name="min_price">
                    Trên 500,000đ
                  </li>
                </ul>
              </div>
            </div>
          </form>
            

            <div class="filter-brand" onclick="showMenu('filterBrand')">
              <span class="filter-brand-title">Thương hiệu</span>
              <div class="filter-menu" id="filter-brand">
                <ul>
                  <li><a href="">DIRTYCOINS</a></li>
                </ul>
              </div>
            </div>
            <div class="filter-type" onclick="showMenu('filterType')">
              <span class="filter-type-title">Loại</span>
              <div class="filter-menu" id="filter-type">
                <ul>
                  <li><a href="">ACCESSORIES</a></li>
                  <li><a href="">BACKPACKS</a></li>
                  <li><a href="">SHIRTS</a></li>
                </ul>
              </div>
            </div>
            <div class="filter-size" onclick="showMenu('filterSize')">
              <span class="filter-size-title">Kích thước</span>
              <div class="filter-menu" id="filter-size">
                <ul>
                  <li><a href="">Size S</a></li>
                  <li><a href="">Size M</a></li>
                  <li><a href="">Size L</a></li>
                  <li><a href="">Size XL</a></li>
                </ul>
              </div>
            </div>
            <div class="filter-color" onclick="showMenu('filterColor')">
              <span class="filter-color-title">Màu</span>
              <div class="filter-menu" id="filter-color">
                <ul>
                  <li><a href="">Red</a></li>
                  <li><a href="">Black</a></li>
                  <li><a href="">Blue</a></li>
                  <li><a href="">White</a></li>
                  <li><a href="">Orange</a></li>
                </ul>
              </div>
            </div>
            <div class="sort">
              <div class="sort-button">
                <span>Thứ tự</span>
              </div>

              <ul class="sort-menu">
                <li>
                  <a href="">Giá thấp đến cao</a>
                </li>
                <li>
                  <a href="">Giá cao đến thấp</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="line" />
        <div class="product">
          <div class="row">
            @foreach ($product as $pro)
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
              <div class="product-main">
                <a href="/product/{{$pro->slug}}">
                <img
                  class="product-image"
                  src="{{asset('Product/large/'.$pro->image)}}"
                  alt=""
                />
                </a>
                
                <p class="product-name">{{$pro->product_name}}</p>
                <p class="product-price"><?php echo number_format($pro->price, 0, '', ','); ?> đ</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <hr class="line" />
        <div class="pagination">
          {{$product->links()}}
        </div>
      </div>

      @include('layouts.frontLayouts.footer')
    </div>
  </body>
  <script src="{{asset('web/js/product.js')}}"></script>
</html>
