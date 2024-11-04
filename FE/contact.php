<!DOCTYPE html>
<html lang="zxx">
<?php require_once 'layout/header.php'?>
  
  <!-- Header Section Begin -->
  <header class="header">
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="header__logo">
                      <a href="./index.php"><img src="./img/logo.png" alt=""></a>
                  </div>
              </div>
              <div class="col-lg-7">
                  <nav class="header__menu">
                      <ul>
                          <li><a href="./index.php">Trang chủ</a></li>
                          <li><a href="./shop-grid.php">Sản phẩm</a></li>
                          <li><a href="#">Giỏ hàng</a>
                              <ul class="header__menu__dropdown">
                                  <li><a href="./shop-details.php">Shop Details</a></li>
                                  <li><a href="./shopping-cart.php">Shoping Cart</a></li>
                                  <li><a href="./checkout.html">Check Out</a></li>
                              </ul>
                          </li>
                          <li class="active"><a href="./contact.php">Liên hệ</a></li>
                          <li><a href="">Chính sách</a></li>
                      </ul>
                  </nav>
              </div>
              <div class="col-lg-2">
                  <div class="header__cart">
                      <i class="fa fa-shopping-cart fa-2x"><span></span></i>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- Header Section End -->

  <body>
    <section class="contact spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_phone" style="color: black"></span>
              <h4>Số điện thoại</h4>
              <p>+84 000.000.000</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_pin_alt" style="color: black"></span>
              <h4>Địa chỉ</h4>
              <p>4 Nguyễn Văn Bảo</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_clock_alt" style="color: black"></span>
              <h4>Thời gian hoạt động </h4>
              <p>8h - 22h</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
              <span class="icon_mail_alt" style="color: black"></span>
              <h4>Email</h4>
              <p>codenexus@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->
    
    <!-- Map Begin -->
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3485.1303769395604!2d106.68426510997989!3d10.82216415830519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deb3ef536f31%3A0x8b7bb8b7c956157b!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBUUC5IQ00!5e1!3m2!1svi!2s!4v1727777049318!5m2!1svi!2s" 
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
    <!-- Map End -->
         <!-- Contact Form Begin -->
    <div class="contact-form spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact__form__title">
              <h2>Form liên hệ</h2>
            </div>
          </div>
        </div>
        <form action="#">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <input type="text" placeholder="Nhập họ và tên" />
            </div>
            <div class="col-lg-6 col-md-6">
              <input type="text" placeholder="Nhập email" />
            </div>
            <div class="col-lg-12 text-center">
              <input type="text" name="" id="" placeholder="Nhập số điện thoại">
            </div>
            <div class="col-lg-12 text-center">
              <textarea placeholder="Nội dung"></textarea>
              <button type="submit" class="site-btn">Gửi tin nhắn</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Contact Form End -->
  </body>

  <footer>
      <?php require_once 'layout/footer.php'?>
  </footer>
</html>