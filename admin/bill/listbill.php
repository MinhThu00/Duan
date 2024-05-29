<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=listbill" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>THÀNH TIỀN</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                    </tr>
                    <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh=$bill["name"].'<br>' . $bill["email"] . '
                        <br>' . $bill["address"] . '
                        <br>' . $bill["tel"];
                        $ttdh=get_ttdh($bill['status']);
                        $countsp=loadall_cart_count($bill['id']);
                        $suabill = "index.php?act=suabill&id=" . $id;
                        $xoabill = "index.php?act=xoabill&id=" . $id;
                        echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>' . $bill['id'] . '</td>
                                            <td>'.$kh.'</td>
                                            <td>'.$countsp.'</td>
                                            <td>'.$bill['total'].'</td>
                                            <td>'.$ttdh.'</td>
                                            <td>'.$bill['ngaydathang'].'</td>
                                            <td>
                                                <a href="' . $suabill . '"> <input type="button" value="Sửa"> </a> 
                                                <a href="' . $xoabill . '"> <input type="button" value="Xóa"> </a>
                                            </td>
                                         </tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            </div>
        </form>
    </div>
</div>