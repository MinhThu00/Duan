<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">Thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- entry-header-area-start -->
<div class="entry-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-header-title">
                    <h2>Thanh toán</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- entry-header-area-end -->
<!-- coupon-area-area-start -->
<div class="coupon-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="coupon-accordion">
                    <h3>Khách hàng quay lại? <span id="showlogin">Nhấn vào đây để đăng nhập</span></h3>
                    <div class="coupon-content" id="checkout-login">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Tên người dùng hoặc Email <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Mật khẩu <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                    <input type="submit" value="Login">
                                    <label>
                                        <input type="checkbox">
                                        Nhớ mật khẩu
                                    </label>
                                </p>
                                <p class="lost-password">
                                    <a href="#">Quên mật khẩu?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- <h3>Có phiếu giảm giá? <span id="showcoupon">Nhấp vào đây để nhập mã giảm giá</span></h3>
                    <div class="coupon-checkout-content" id="checkout_coupon">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input type="text" placeholder="Mã giảm giá">
                                    <input type="submit" value="Nhập mã">
                                </p>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- coupon-area-area-end -->
<!-- checkout-area-start -->
<div class="checkout-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="checkbox-form">
                                <h3>Chi tiết thanh toán</h3>

                                <div class="row">
                                    <div class=" col-lg-12">
                                        <div class="country-select">
                                            <label>Quốc gia <span class="required">*</span></label>
                                            <select>
                                                <option value="volvo">Việt Nam</option>
                                                <option value="saab">Nhật Bản</option>
                                                <option value="mercedes">Hàn Quốc</option>
                                                <option value="audi">Trung Quốc</option>
                                                <option value="audi2">Mỹ</option>
                                                <option value="audi3">Thái Lan</option>
                                                <option value="audi4">Anh</option>
                                                <option value="audi5">Pháp</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="checkout-form-list">
                                        <?php
                                if (isset($_SESSION['user'])) {
                                    $name = $_SESSION['user']['name'];
                                    $address = $_SESSION['user']['address'];
                                    $email = $_SESSION['user']['email'];
                                    $tel = $_SESSION['user']['tel'];
                                } else {
                                    $name = "";
                                    $address = "";
                                    $email = "";
                                    $tel = "";
                                }
                                ?>
                                            <label>Họ tên <span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="Nhập vào họ tên của bạn"
                                                value="<?= $name ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="checkout-form-list">
                                            <!-- <label>Địa chỉ <span class="required">*</span></label>
                                            <input type="text" name="address" placeholder="Nhập vào địa chỉ của bạn"
                                                value="<?=$address ?>"> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ mail <span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Nhập vào email của bạn"
                                                value="<?= $email ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại <span class="required">*</span></label>
                                            <input type="text" name="tel" placeholder="Nhập vào số điện thoại của bạn"
                                                value="<?=$tel?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="checkout-form-list create-acc">
                                            <input type="checkbox" id="cbox">
                                            <a href="index.php?act=dangky">Tạo tài khoản?</a>
                                        </div>
                                        <div class="checkout-form-list create-account" id="cbox_info"
                                            style="display: none;">
                                            <p>Tạo tài khoản bằng cách nhập thông tin bên dưới. Nếu bạn đã có tài khoản,
                                                vui lòng đăng nhập ở đầu trang.</p>
                                            <label>Mật khẩu tài khoản <span class="required">*</span></label>
                                            <input type="password" placeholder="password">
                                        </div>
                                    </div>
                                </div>
                                <?php viewcart(0); ?>
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Gửi hàng đến địa chỉ khác?</label>
                                            <input type="checkbox" id="ship-box">
                                        </h3>
                                    </div>
                                    <div class="row" id="ship-box-info" style="display: none;">
                                        <div class="col-lg-12">
                                            <div class="country-select">
                                                <label>Quốc gia <span class="required">*</span></label>
                                                <select>
                                                    <option value="volvo">Việt Nam</option>
                                                    <option value="saab">Nhật Bản</option>
                                                    <option value="mercedes">Hàn Quốc</option>
                                                    <option value="audi">Trung Quốc</option>
                                                    <option value="audi2">Mỹ</option>
                                                    <option value="audi3">Thái Lan</option>
                                                    <option value="audi4">Anh</option>
                                                    <option value="audi5">Pháp</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Họ tên <span class="required">*</span></label>
                                                <input type="text" name="name" placeholder="Nhập vào họ tên của bạn"
                                                    value="<?= $name ?>">
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text" name="address" placeholder="Nhập vào địa chỉ của bạn"
                                                    value="<?= $address ?>">
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ email <span class="required">*</span></label>
                                                <input type="email" name="email" placeholder="Nhập vào email của bạn"
                                                    value="<?= $email ?>">
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại <span class="required">*</span></label>
                                                <input type="text" name="tel"
                                                    placeholder="Nhập vào số điện thoại của bạn" value="<?= $tel ?>">
                                            </div>
                                        </div> -->

                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Ghi chú đơn hàng</label>
                                            <textarea placeholder="Vui lòng note lại yêu cầu của bạn(nếu có)." rows="10"
                                                cols="30" id="checkout-mess"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Đơn đặt hàng của bạn</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tổng cộng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr class="shipping">
                                                <th>Phương thức thanh toán:</th><br>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <!-- <input type="radio" name="pttt"> -->
                                                            <label>
                                                                Thanh toán khi nhận hàng: <span class="amount"></span>
                                                            </label>
                                                        </li>
                                                        <!-- <li>
                                                            <input type="radio" name="pttt">
                                                            <label>Thanh toán online:</label>
                                                        </li> -->
                                                        <li></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                            <?php 
                                            $thanhtien = 0;
                                                foreach ($_SESSION["mycart"] as $key => $value) {
                                                    $tongtien = $value[4] * $value[5];
                                                    $thanhtien += $tongtien;
                                                }
                                            ?>
                                                <th>Tổng giá trị:</th>
                                                <td><strong><span class="amount"><?php echo $thanhtien; ?></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text" name="address" placeholder="Nhập vào địa chỉ của bạn"
                                                    value="<?= $address ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại <span class="required">*</span></label>
                                                <input type="text" name="tel"
                                                    placeholder="Nhập vào số điện thoại của bạn" value="<?= $tel ?>">
                                            </div>
                                        </div>

                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="collapses-group">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a data-bs-toggle="collapse" data-bs-parent="#accordion"
                                                                href="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne" name="pttt">
                                                                Chuyển khoản trực tiếp
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                        role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body" name="pttt">
                                                            <p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng
                                                                tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu
                                                                tham khảo thanh toán. Đơn đặt hàng của bạn sẽ không được
                                                                giao cho đến khi tiền được chuyển vào tài khoản của
                                                                chúng tôi.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                                data-bs-parent="#accordion" href="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Kiểm tra thanh toán
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <p>Vui lòng gửi thông tin thanh toán đến tên cửa hàng, đường
                                                                cửa hàng, thành phố/quận của cửa hàng, mã bưu điện của
                                                                cửa hàng.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                                data-bs-parent="#accordion" href="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseThree">
                                                                PayPal <img src="view/img/2.png" alt="payment" />
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <p>Thanh toán qua PayPal: Bạn có thể thanh toán bằng thẻ tín
                                                                dụng nếu bạn không có tài khoản PayPal.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wc-proceed-to-checkout">
                                        <form method="POST" action="index.php?act=billcomform">
                                            <input type="hidden" name="name" value="<?php echo $name; ?>" />
                                            <!-- <input type="text" name="address" /> -->
                                            <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                            <!-- <input type="text" name="tel" /> -->
                                            <input type="hidden" name="pttt" value="<?php echo 1; ?>" />
                                            <input name="thanhtoan" type="submit" value="Thanh Toán">
                                        </form>
                                        <!-- <input type="submit" name="thanhtoan"  value="Thanh toán"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area-end -->