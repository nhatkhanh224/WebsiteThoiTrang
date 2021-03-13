@extends('layouts.frontLayouts.web')
@section('content')
<div class="product">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xs-12 col-sm-12">
              <div class="product-image">
                <img
                  src="https://bizweb.dktcdn.net/100/369/010/products/xv.jpg?v=1603948518243"
                  alt=""
                />
              </div>
              <div class="product-image-small">
                <img
                  src="https://bizweb.dktcdn.net/100/369/010/products/monarch-print-shirt-2-w.jpg?v=1592668368750"
                  onclick="changeImage('1')"
                  id="1"
                  alt=""
                />
                <img
                  src="https://bizweb.dktcdn.net/100/369/010/products/monarch-print-shirt-2-w.jpg?v=1592668368750"
                  onclick="changeImage('2')"
                  alt=""
                  id="2"
                />
                <img
                  src="https://bizweb.dktcdn.net/100/369/010/products/monarch-print-shirt-2-w.jpg?v=1592668368750"
                  onclick="changeImage('3')"
                  alt=""
                  id="3"
                />
              </div>
            </div>

            <div class="col-md-4 col-xs-12 col-sm-12">
              <div class="product-information">
                <h1>BXD - MONOGRAM SHIRT/BLACK</h1>
                <span class="product-price">500,000đ</span>
                <div class="form-group">
                  <select class="form-control" id="sel1">
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" id="sel1">
                    <option>Đen</option>
                    <option>Trắng</option>
                  </select>
                </div>
                <button class="product-detail-button">THÊM VÀO GIỎ</button>
                <button class="product-detail-button add-to-cart">MUA NGAY</button>
                <div class="product-detail">
                  <p>Chi tiết sản phẩm:</p>
                  <ul>
                    <li>100% Polyester</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="related-product">
        <div class="container">
          <h2 class="related-product-title">SẢN PHẨM LIÊN QUAN</h2>
          <div id="mixedSlider">
            <div class="MS-content">
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
              <div class="item">
                <div class="imgTitle">
                  <img
                    src="//bizweb.dktcdn.net/thumb/large/100/369/010/products/monarch-butterflys-bla-1-w.jpg?v=1603731135000"
                    alt=""
                  />
                </div>
                <div class="product-suggestion-infor">
                  <h3>Adidas NEO</h3>
                  <span>2,000,000 đ</span>
                </div>
              </div>
            </div>
            <div class="MS-controls">
              <button class="MS-left">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
              </button>
              <button class="MS-right">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
@endsection