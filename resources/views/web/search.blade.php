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
      <div class="container">
        
        <div class="product" style="margin-top:50px;">
        <span>Tìm thấy {{$count}} kết quả với từ khóa "{{$key}}" ...</span>
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
      </div>
        
        
        
      </div>

      @include('layouts.frontLayouts.footer')
    </div>
  </body>
  <script src="{{asset('web/js/product.js')}}"></script>
</html>
