<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web bán hàng</title>
    <link rel="stylesheet" href="{{asset('web/css/payment.css')}}" />
    
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="./font/fontawesome-free-5.14.0/css/all.min.css"
    />
    <link
      rel="shortcut icon"
      type="image/png"
      href="https://bizweb.dktcdn.net/100/369/492/themes/741260/assets/logo.png?1594607980046"
    />
  </head>
  <body>
    <div class="app">
      <div class="container">
        <div class="content">
          <div class="input-information">
            <div class="input-information-left">
              <h2 class="input-information-left-title">Dirtycoins</h2>
              <div class="input-information-left-header">
                <span>Thông tin mua hàng</span>
                <a href="">Đăng nhập</a>
              </div>
              <div class="input-information-body">
                <form action="">
                  <div class="input-information-email">
                    <input type="text" placeholder="Email" value="{{$user->email}}" />
                  </div>
                  <div class="input-information-name">
                    <input type="text" placeholder="Họ và tên" value="{{$user->name}}" />
                  </div>
                  <div class="input-information-phone">
                    <input type="text" placeholder="Số điện thoại(tùy chọn)" value="{{$user->phone}}" />
                  </div>
                  <div class="input-information-address">
                    <input type="text" placeholder="Địa chỉ(tùy chọn)" value="{{$user->address}}" />
                  </div>

                  
                  <div>
                    <textarea
                      class="textarea-input"
                      name=""
                      id=""
                      cols="50"
                      rows="2"
                      placeholder="Ghi chú(tùy chọn)"
                    ></textarea>
                  </div>
                </form>
              </div>
            </div>
            <div class="input-information-right">
              <div class="input-information-right-header">
                <p>Vận chuyển</p>
                <div class="input-information-right-header-content">
                  <span>Giao hàng tận nơi</span>
                  <span>40.000 đ</span>
                </div>
              </div>
              <div class="input-information-shipment">
                <p>Thanh toán</p>
                <div class="input-information-shipment-header">
                  <span>Thanh toán khi giao hàng</span>
                </div>
                <div class="input-information-shipment-content">
                  Bạn chỉ phải thanh toán khi nhận được hàng
                </div>
              </div>
            </div>
          </div>
          <div class="order">
            <div class="container">
              <h3>Đơn hàng</h3>
              <hr />
              @foreach($cart as $item)
              <div class="order-product">
                <div class="product-infor">
                    <img
                    src="{{asset('Product/large/'.$item->thumbnail)}}"
                    alt=""
                    style="width:40px"
                  />
                  <span>{{$item->product_name}}</span>
                </div>
                <div class="order-product-price">
                  <span>4.200.000 đ</span>
                </div>
              </div>
              @endforeach
              <hr />
              <div class="order-product-discount">
                <input type="text" placeholder="Nhập mã giảm giá" />
                <button type="submit">Áp dụng</button>
              </div>
              <hr />
              <div class="order-summary">
                <table>
                  <tbody>
                    <tr>
                      <th>Tạm tính</th>
                      <td>2.100.000 đ</td>
                    </tr>
                    <tr>
                      <th>Phí vận chuyển</th>
                      <td>40.000 đ</td>
                    </tr>
                    <tr>
                      <th>Tổng cộng</th>
                      <td>2.100.000 đ</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="order-option">
                <a href="cart.html">Quay về giỏ hàng</a>
                <button type="submit">ĐẶT HÀNG</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
