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
      <!-- End Header -->
      <div class="cart">
        <div class="container">
          <h3 class="cart-title">GIỎ HÀNG</h3>
          <div class="row">
            <div class="col-md-8">
              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                @if(is_null($cart))
                
                <span>Không có sản phẩm <a href="/">Quay lại trang chủ</a></span>
                @else
                @foreach($cart as $cart)
                  <tr>
                    <th>
                      <img
                        class="cart-img"
                        src="{{asset('Product/large/'.$cart->thumbnail)}}"
                        alt=""
                        
                      />
                      <p class="cart-product-name">
                        {{$cart->product_name}}
                      </p>
                      <span class="cart-product-price"><?php echo number_format($cart->price, 0, '', ','); ?> đ</span>
                    </th>
                    <td class="qty">
                      <div class="qty-number">
                        @if($cart->quantum>1)
                        <input
                          type="button"
                          value="<"
                          class="qtyminus"
                          field="quantity"
                          onclick="minus('{{$cart->id}}');"
                        />
                        @endif
                        <input
                          type="text"
                          size="4"
                          name="quantity"
                          value="{{$cart->quantum}}"
                          class="tc item-quantity eventnone qty"
                          style="text-align: center;"
                        />
                        <input type="button" value=">" class="qtyplus" field="quantity" onclick="plus('{{$cart->id}}');">
                      </div>
                    </td>
                    <td>60000đ</td>
                    <td><i class="far fa-trash-alt"></i></td>
                  </tr>
                @endforeach
                @endif

                </tbody>
              </table>
            </div>
            <div class="col-md-4">
                <div class="total-cart">
                    <div class="subtotal">
                        <span>Tổng tiền</span>
                        <span class="total">60000đ</span>
                    </div>
                    <div class="final-total">
                        <button>Thanh toán</button>
                    </div>
                </div>
            </div>
          </div>
          <div class="continue-buy">
            <button class="continue-buy-button"><a href="/">Tiếp tục mua sắm</a></button>
          </div>
          
        </div>
        
      </div>

      @include('layouts.frontLayouts.footer')

    </div>
  </body>
  <script src="{{asset('web/js/cart.js')}}"></script>
  <script>
  function minus(id){
    $.ajax({
      type: "GET",
      url: '/cart/update/'+id+'/-1',
      success : function(result) {
							window.location.href = "/cart";
			},
    })
  }
  function plus(id){
    $.ajax({
      type: "GET",
      url: '/cart/update/'+id+'/1',
      success : function(result) {
							window.location.href = "/cart";
			},
    })
  }
</script>
</html>
