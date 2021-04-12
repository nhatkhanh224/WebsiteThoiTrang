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
    
        
        <div class="profile" >
            <h3>Địa chỉ giao hàng</h3>
            <div class="profile-address">
             
              <select id="province">
              <option value="" disabled selected>Chọn Tỉnh/Thành Phố</option>
                @foreach($province as $pro)
                <option value="{{$pro->id}}">{{$pro->_name}}</option>
                @endforeach
              </select>
             
            </div>
            <div class="profile-address">
              <select id="district">
                
                <option value="">Vui lòng chọn Tỉnh/Thành Phố</option>
                
              </select>
            </div>
           <div class="profile-address">
              <input type="text" value="25 Kim Đồng">
           </div>
            
            <div><button class="btn btn-success">Lưu</button></div>
            
        </div>

     </div>

      @include('layouts.frontLayouts.footer')

    </div>
  </body>
  <script src="{{asset('web/js/cart.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('#province').on('change', function () {
        let id=$(this).val();
        $('#district').empty();
        $('#district').append(`<option value="0" disabled selected>Đang xử lí...</option>`);
        $.ajax({
          type: "GET",
          url: '/getLocation/'+id,
          success: function (response) {
            var response=JSON.parse(response);
            console.log(response);
            $('#district').empty();
            $('#district').append(`<option value="0" disabled selected>Chọn quận huyện</option>`);
            response.forEach(element=>{
              $('#district').append(`<option value="${element[`id`]}">${element[`_name`]}</option>`);
            })
          }
        });
      });
    });
  </script>
  
</html>
