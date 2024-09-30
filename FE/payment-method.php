<?php require_once 'layout/header-pay.php'?>
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Thông tin thanh toán</h4>
            <form action="process_payment.php" method="POST">
                <div class="row">
                    <!-- Thông tin cá nhân người dùng -->
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Họ và tên<span>*</span></p>
                                    <input type="text" placeholder="Nhập họ và tên của bạn" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số điện thoại<span>*</span></p>
                                    <input type="text" placeholder="Nhập số điện thoại" required>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <input type="text" placeholder="Địa chỉ" class="checkout__input__add" required>
                        </div>
                        <div class="checkout__input">
                            <p>Email<span>*</span></p>
                            <input type="email" placeholder="Nhập địa chỉ email" required>
                        </div>
                        <div class="checkout__input">
                            <p>Ghi chú đơn hàng</p>
                            <input type="text" placeholder="Ghi chú về đơn hàng của bạn, ví dụ như giao vào thời gian nào">
                        </div>

                        <!-- Hiển thị đơn hàng bên dưới ghi chú đơn hàng -->
                        <div class="checkout__order mt-4">
                            <h4>Đơn hàng của bạn</h4>

                            <!-- Tạo bảng để hiển thị danh sách sản phẩm -->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody style="max-height: 200px; overflow-y: auto;">
                                        <tr>
                                            <td>Product 1</td>
                                            <td>1</td>
                                            <td>$100.00</td>
                                        </tr>
                                        <tr>
                                            <td>Product 2</td>
                                            <td>2</td>
                                            <td>$150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Product 3</td>
                                            <td>1</td>
                                            <td>$50.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="checkout__order__subtotal">Tạm tính <span>$300.00</span></div>
                            <div class="checkout__order__total">Tổng cộng <span style="color: red;">$300.00</span></div>
                        </div>
                    </div>

                    <!-- Phương thức thanh toán với hình ảnh -->
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Phương thức thanh toán</h4>
                            <div class="checkout__input__checkbox">
                                <label for="momo">
                                    <img src="img/pay-methods/momo-40-10.png" alt="MoMo" style="width: 30px; height: auto;"> Thanh toán qua MoMo
                                    <input type="radio" id="momo" name="payment_method" value="momo" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="zalopay">
                                    <img src="img/pay-methods/zalo-40.png" alt="ZaloPay" style="width: 30px; height: auto;"> Thanh toán qua ZaloPay
                                    <input type="radio" id="zalopay" name="payment_method" value="zalopay">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="vnpay">
                                    <img src="img/pay-methods/vnpay-40.png" alt="VNPAY" style="width: 30px; height: auto;"> Thanh toán qua VNPAY
                                    <input type="radio" id="vnpay" name="payment_method" value="vnpay">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="cash">
                                    <i class="fa fa-money"></i> Thanh toán khi nhận hàng
                                    <input type="radio" id="cash" name="payment_method" value="cash">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="site-btn">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php require_once 'layout/footer-pay.php'?>
