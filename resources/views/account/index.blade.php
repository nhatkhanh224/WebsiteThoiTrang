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
    <link rel="stylesheet" href="{{asset('web/css/account.css')}}" />
    
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}" />
  </head>
  <body>
    <div id="overlay" onclick="off()"></div>
    <div class="app">
        @include('layouts.frontLayouts.header',['categories'=>\App\Models\Category::all()])
        <div class="container">
        <div class="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-login">
                <h3 class="title">ĐĂNG NHẬP</h3>
                <form action="" name="formLogin">
                  <div class="form-group">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <input
                      type="text"
                      class="form-input"
                      placeholder="Email của bạn"
                      name="email"
                    />
                    <span class="not-null"> * </span>
                  </div>
                  <div class="form-group">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <input
                      type="password"
                      class="form-input"
                      placeholder="Nhập mật khẩu"
                      name="password"
                    />
                    <span class="not-null"> * </span>
                  </div>
                  <button type="submit" class="button-login">Đăng nhập</button>
                </form>
                <div class="forgot-password">
                  <a href="">Quên mật khẩu ?</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-login">
                <h3 class="title">ĐĂNG KÝ THÀNH VIÊN MỚI</h3>
                <form action="" name="formRegis">
                  <div class="form-group">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <input
                      type="text"
                      class="form-input"
                      placeholder="Tên"
                      name="name"
                      
                    />
                    <span class="not-null"> * </span>
                  </div>
                  <div class="form-group">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <input
                      type="text"
                      class="form-input"
                      placeholder="Họ"
                      name="surname"
                      
                    />
                    <span class="not-null"> * </span>
                  </div>
                  <div class="form-group">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <input
                      type="text"
                      class="form-input"
                      placeholder="Email"
                      name="email"
                    />
                    <span class="not-null"> * </span>
                  </div>
                  <div class="form-group">
                    <span class="icon"><i class="fas fa-phone-alt"></i></span>
                    <input
                      type="text"
                      class="form-input"
                      placeholder="Số điện thoại"
                      name="phoneNumber"
                      
                    />
                    <span class="not-null"> * </span>
                  </div>
                  <div class="form-group">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <input
                      type="password"
                      class="form-input"
                      placeholder="Mật khẩu"
                      name="password"
                    />
                    <span class="not-null"> * </span>
                  </div>
                  <button type="submit" class="button-login">Đăng ký</button>
                </form>
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
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="{{asset('web/js/account.js')}}"></script>
 
</html>
