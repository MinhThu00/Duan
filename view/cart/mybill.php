<div class="cart-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="#">
                <div class="table-content table-responsive mb-15 border-1">
                            <!-- <h2>Chi tiết đơn hàng</h2>
                            <table>
                                <tbody>
                                </tbody>
                            </table> -->
                        </div>
                    <div class="table-content table-responsive mb-15 border-1">
                        <h2> Đơn hàng của bạn </h2>
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">Mã đơn hàng</th>
                                    <th class="product-price">Ngày đặt</th>
                                    <th class="product-quantity">Số lượng mặt hàng</th>
                                    <th class="product-subtotal">Tổng giá trị đơn hàng</th>
                                    <th class="product-remove">Tình trạng đơn hàng</th>
                                </tr>
                            </thead>
                            <?php
                            if (is_array($listbill)) {
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $ttdh = get_ttdh($bill['status']);
                                    $countsp = loadall_cart_count($bill['id']);
                                    echo '<tr>
                                    <td class="product-name">' . $bill['id'] . '</td>
                                    <td class="product-price">' . $bill['ngaydathang'] . '</td>
                                    <td class="product-quantity">' . $countsp . '</td>
                                    <td class="product-subtotal">' . $bill['total'] . '</td>
                                    <td class="product-remove">' . $ttdh . '</td>
                                </tr>';
                                }
                            }
                            ?>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>