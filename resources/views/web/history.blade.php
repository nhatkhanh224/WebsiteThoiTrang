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
    <link rel="stylesheet" href="{{asset('web/css/cart.css')}}" />
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}" />
  </head>
  <body>

    <div id="overlay" onclick="off()"></div>
    <div class="app">
    @include('layouts.frontLayouts.header',['categories'=>\App\Models\Category::all()])
    <div class="container">
    <div class="historyOrder">
    <h3>Thông tin tài khoản</h3>
    <p>Xin chào {{$name}}</p>
    <p>Đơn hàng gần nhất</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Đơn hàng #</th>
      <th scope="col">Ngày</th>
      <th scope="col">Chuyển đến</th>
      <th scope="col">Giá trị đơn hàng</th>
      <th scope="col">Tình trạng thanh toán</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($order as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->created_at}}</td>
      <td>{{$order->address}}</td>
      <td><?php echo number_format($order->total, 0, '', ','); ?> đ</td>
      <td>{{$order->status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    @include('layouts.frontLayouts.footer')  

   

    </div>
  </body>
  <script src="{{asset('web/js/cart.js')}}"></script>
  
</html>
