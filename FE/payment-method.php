<?php require_once 'layout/header-pay.php'?>
<!-- Payment Method Section Begin -->
<section class="payment-method spad">
    <div class="container">
        <div class="payment-method__form">
            <h4 class="text-center mb-4">Chọn hình thức thanh toán</h4>
            <div class="row justify-content-center">
                <!-- Thanh toán qua VNPAY -->
                <div class="col-lg-6 col-md-6 mb-4 text-center">
                    <a href="#" class="payment-option d-block p-4 shadow rounded">
                        <img src="img/pay-methods/vnpay.png" alt="VNPAY" class="img-fluid mb-3 payment-logo">
                        <h5 class="mt-2">Thanh toán qua VNPAY</h5>
                    </a>
                </div>

                <!-- Thanh toán khi nhận hàng -->
                <div class="col-lg-6 col-md-6 mb-4 text-center">
                    <a href="#" class="payment-option d-block p-4 shadow rounded">
                        <img src="img/pay-methods/tienmat.png" alt="Cash on Delivery" class="img-fluid mb-3 payment-logo">
                        <h5 class="mt-2">Thanh toán khi nhận hàng</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Payment Method Section End -->

<?php require_once 'layout/footer-pay.php'?>

<!-- Custom CSS to improve design -->
<style>
    .payment-option {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-decoration: none;
        color: inherit;
    }

    .payment-option:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .payment-logo {
        width: 150px; 
        height: 150px;
        object-fit: contain; 
    }

    .payment-option img {
        transition: transform 0.3s ease;
    }

    .payment-option:hover img {
        transform: scale(1.1);
    }
</style>
