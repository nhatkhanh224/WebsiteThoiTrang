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
    <link rel="stylesheet" href="{{asset('web/css/profile.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}" />
  </head>
  <body>

    <div id="overlay" onclick="off()"></div>
    <div class="app">
    @include('layouts.frontLayouts.header',['categories'=>\App\Models\Category::all()])
      <!-- End Header -->
     <div class="container">
     <div class="profile">
              <div>
                <h3>Hồ sơ của tôi</h3>
                <span>Tên</span>
                <input type="text" value="{{$user->name}}">
              </div>
              <div>
                <span>Email: {{$user->email}} <a href=""> Thay đổi</a></span>
              </div>
              <div>
                <span>Số điện thoại: {{$user->phone}} <a href=""> Thay đổi</a></span>
              </div>
              <div>
                <span>Địa chỉ: {{$user->address}} <a href="/profile/address"> Thay đổi</a></span>
              </div>
              <button class="btn btn-success">Lưu</button>
          </div>

     </div>

      @include('layouts.frontLayouts.footer')

    </div>
  </body>
  <script src="{{asset('web/js/cart.js')}}"></script>
  
</html>
