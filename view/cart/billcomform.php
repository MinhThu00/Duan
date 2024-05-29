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
<div class="entry-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-header-title">
                    <h2>Thanh toán thành công</h2>
                </div>
            </div>
        </div>
    </div>
</div>
7<div class="checkout-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="checkbox-form">
                                <div class="row">
                                    <h3> Cảm ơn quý khách vì đã đặt hàng! </h3>
                                </div>
                            </div>
                        </div>
                        <div class="table-content table-responsive mb-15 border-1">
                            <h2>Chi tiết đơn hàng</h2>
                            <table>
                                <tbody>
                                    <?php viewcart(0) ?>
                                </tbody>
                            </table>
                        </div>
                      
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Thông tin đơn hàng</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <?php
                                        if (isset($bill) && (is_array($bill))) {
                                            extract($bill);
                                        }
                                        ?>
                                        <div class="row mb">
                                            <div class="boxtitle">Mã đơn hàng</div>
                                            <div class="row boxcontent" style="text-align:center">
                                                <li>MĐH:
                                                    <?= $bill['id']; ?>
                                                </li><br>
                                                <li>Ngày đặt hàng:
                                                    <?= $bill['ngaydathang']; ?>
                                                </li><br>
                                                <li>Tổng đơn hàng:
                                                <?php 
                                            $thanhtien = 0;
                                                foreach ($_SESSION["mycart"] as $key => $value) {
                                                    $tongtien = $value[4] * $value[5];
                                                    $thanhtien += $tongtien;
                                                }
                                                echo $thanhtien;
                                            ?>
                                                </li><br>
                                                <li>Phương thức thanh toán:
                                                    Thanh toán trực tiếp
                                                </li>
                                            </div>
                                        </div>

                                        <div class="your-order">
                                            <h3>Thông tin đặt hàng</h3>
                                            <div class="your-order-table table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Người đặt hàng</th><br>
                                                            <th>
                                                                <?= $bill['name'] ?>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="product-total">Địa chỉ</th><br>
                                                            <th>
                                                                <?= $bill['address'] ?>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="product-total">Email</th><br>
                                                            <th>
                                                                <?= $bill['email'] ?>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="product-total">Số điện thoại</th><br>
                                                            <th>
                                                                <?= $bill['tel'] ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                </div>
                </form>
                <div class="wc-proceed-to-checkout">
                    <a href="index.php?act=mybill">Đơn hàng của bạn</a>
                </div>
            </div>
        </div>
    </div>
</div>
