<!-- header-area-end -->
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="#" class="active">Giỏ hàng</a></li>
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
                    <h2>Giỏ hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- entry-header-area-end -->
<!-- cart-main-area-start -->
<div class="cart-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="#">
                    <div class="table-content table-responsive mb-15 border-1">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Hình ảnh</th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng</th>
                                    <th class="product-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $tong = 0;
                               $i = 0;
                               foreach ($_SESSION['mycart'] as $cart) {
                                   $hinh = $img_path . $cart[2];
                                   $ttien = $cart[3] * $cart[4];
                                   $tong += $ttien;
                                    $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"</a>';
                                    echo '<tr>
                                               <td class="product-thumbnail"><a href="#"><img src="' . $hinh . '" alt="man" /></a></td>
                                                <td class="product-name"><a href="#">' . $cart[1] . '</a></td>
                                                <td class="product-price"><span class="amount">' . $cart[3] . '</span></td>
                                                <td>' . $cart[4] . '</td>
                                                <td class="product-subtotal">' . $ttien . '</td>
                                                <td class="product-remove">' . $xoasp . '</td>
                                            </tr>';
                                    $i += 1;
                                }
                                echo '<tr>
                                        <td colspan="4">Tổng đơn hàng</td>
                                        <td class="product-subtotal">' . $tong . '</td>
                                        <td class="product-remove"></td>
                                    </tr>';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="buttons-cart mb-30">
                    <ul>
                        <!-- <li><a href="#">Cập nhật giỏ hàng</a></li> -->
                        <li><a href="index.php">Tiếp tục mua sắm</a></li>
                    </ul>
                </div>
                <!-- <div class="coupon">
                    <h3>Phiếu giảm giá</h3>
                    <p>Nhập phiếu giảm giá của bạn nếu có.</p>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <a href="#">Áp dụng phiếu giảm giá</a>
                    </form>
                </div> -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="cart_totals">
                    <h2>Tổng sản phẩm trong giỏ hàng</h2>
                    <table>
                        <tbody>
                            <tr class="cart-subtotal">
                                <!-- <th>Tổng tiền đơn hàng</th> -->
                                <td>
                                    <span class="amount"></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Phương thức thanh toán:</th>
                                <td>
                                    <ul id="shipping_method">
                                        <li>
                                            <!-- <input type="radio"> -->
                                            <label>
                                                <span class="amount">Thanh toán trực tiếp</span>
                                            </label>
                                        </li>
                                        <!-- <li>
                                            <input type="radio">
                                            <label> Miễn phí vận chuyển </label>
                                        </li> -->
                                    </ul>
                                    <!-- <a href="#">Tính phí vận chuyển</a> -->
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
                                <th>Tổng cộng</th>
                                <td>
                                    <strong>
                                        <span class="amount"><?php echo $thanhtien;?></span>
                                    </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout">
                        <a href="index.php?act=bill">Tiến hành thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area-end -->