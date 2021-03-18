<div class="header sticky-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <div class="header-logo">
                <a href="/"
                  ><img
                    class="header-logo-img"
                    src="https://bizweb.dktcdn.net/100/369/010/themes/752396/assets/logo.png?1605325979443"
                    alt=""
                /></a>
              </div>
            </div>

            <div class="col-md-8 navbar-main">
              <div class="header-navbar">
                <ul class="header-navbar-main">
                  <li class="header-navbar-item">
                    <a class="header-navbar-item-link" href="">SHOP</a>
                    <ul class="sub-menu">
                      @foreach ($categories as $cat)
                      <li class="sub-menu-item">
                        <a href="/category/{{$cat->slug}}">{{$cat->category_name}}</a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="header-navbar-item">
                    <a class="header-navbar-item-link" href="">RESTOCKS</a>
                  </li>
                  <li class="header-navbar-item">
                    <a class="header-navbar-item-link" href="">NEWS</a>
                  </li>

                  <li class="header-navbar-item">
                    <a class="header-navbar-item-link" href="">CONTACT</a>
                  </li>
                  <li class="header-navbar-item">
                    <a class="header-navbar-item-link" href="">ABOUT</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="menu-responsive">
              <button class="menu-responsive-button" onclick="showMenu()">
                <i class="fas fa-bars"></i>
              </button>
              <div class="menu-responsive-content">
                <div class="header-logo-responsive">
                  <a href=""
                    ><img
                      class="header-logo-img-menu"
                      src="https://bizweb.dktcdn.net/100/369/010/themes/752396/assets/logo.png?1605325979443"
                      alt=""
                  /></a>
                  <span class="menu-close" onclick="off()">X</span>
                </div>
                <div class="form-group menu-responsive-search">
                  <input
                    type="text"
                    class="form-control"
                    id="usr"
                    placeholder="Search"
                  />
                </div>
                <ul class="">
                  <li>
                    <a href="">SHOP</a>
                  </li>
                  <li>
                    <a href="">RESTOCKS</a>
                  </li>
                  <li>
                    <a href="">NEWS</a>
                  </li>
                  <li>
                    <a href="">CONTACT</a>
                  </li>
                  <li>
                    <a href="">ABOUT</a>
                  </li>
                  <li>
                    <a href="">Đăng ký / đăng nhập</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-2 navbar-main">
              <div class="header-information">
                <ul class="header-information-list">
                  <li class="header-information-item">
                    <a href="header-information-item-link">
                      <i class="fas fa-search header-information-item-font"></i>
                    </a>
                  </li>
                  <li class="header-information-item">
                    <a href="header-information-item-link">
                      <i class="fas fa-user header-information-item-font"></i>
                    </a>
                  </li>
                  <li class="header-information-item">
                    <a href="/cart">
                      <i

                        class="fas fa-shopping-cart header-information-item-font"
                      ></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>