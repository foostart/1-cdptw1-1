<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<body>
    <ul class="cd-items cd-container">
        <li class="cd-item">
            <img src="images/item-1.jpg" alt="Item Preview">
            <div  class="cd-trigger"></div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>
            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-2.jpg" alt="Item Preview">
            <div class="cd-trigger">
            </div>       
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>
            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-3.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>

            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-3.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>

            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-5.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>

            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-6.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>

            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-4.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>

            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-6.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>

            <a class="name-view">Artistic Wood Hanger</a>
            <p class="price-view">$150.00</p>
            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-5.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>

            <p class="price-view">$150.00</p>


            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-9.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>

            <p class="price-view">$150.00</p>


            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-8.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>
            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>

            <p class="price-view">$150.00</p>


            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->

        <li class="cd-item">
            <img src="images/item-7.jpg" alt="Item Preview">
            <div  class="cd-trigger">
            </div>

            </div>
            <div class="icon-stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star " ></i>
            </div>
            <a class="name-view">Artistic Wood Hanger</a>

            <p class="price-view">$150.00</p>


            <div class="add-to-cart">
                <a href="#">ADD TO CART</a>
            </div>
        </li> <!-- cd-item -->
    </ul>

    <div class="cd-quick-view">
        <div class="cd-slider-wrapper">
            <ul class="cd-slider">
                <li class="selected"><img src="images/item-1.jpg" class="img-infor" alt="Product 2"></li>
                <li><img src="images/item-2.jpg" class="img-infor" alt="Product 2"></li>
                <li><img src="images/item-3.jpg"  class="img-infor" alt="Product 3"></li>
            </ul> <!-- cd-slider -->

            <ul class="cd-slider-navigation">
                <li><a class="cd-next" href="#0">Prev</a></li>
                <li><a class="cd-prev" href="#0">Next</a></li>
            </ul> <!-- cd-slider-navigation -->
        </div> <!-- cd-slider-wrapper -->

        <div class="cd-item-info">
            <h2>Iphone Xs </h2>
            <p>Sản phẩm chỉ áp dụng với hình thức thanh toán trả trước.</p>
            <p>-Hàng chính hãng VN/A, được bảo hành tại Apple VN. Màn Retina tai thỏ 5.8", tràn màn hình, HDR sắc nét</p>
            <p class="text3">- Chuẩn chống nước và chống bụi IP68. Face ID nhanh nhạy hơn, 1 Nano SIM và 1 eSIM. Tốc độ mượt mà với chip A12 Bionic 6 nhân mạnh mẽ. Hệ thống camera kép 12MP với cảm biến kết hợp ISP và Neural Engin</p>
            <a href="#0" class="more-infor">Learn more...</a>
            <div class="infor-price">
                <span class="price">$150.00</span> <span class="price-more">Trả góp 0%</span>

            </div>
            <ul class="cd-item-action">
                <li><button class="add-to-cart"> <i class="fa fa-shopping-cart"></i> Add to cart</button></li>					

            </ul> <!-- cd-item-action -->
        </div> <!-- cd-item-info -->
        <a href="#0" class="cd-close">Close</a>
    </div>

    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/velocity.min.js"></script>
    <script src="js/1831.js" ></script>
</body>