<div class="row2">
    <div class="row2 font_title">
        <h1>THỐNG KÊ SÁCH</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=thongke" method="POST">
            <div class="row2 mb10 formds_loai">

                <table>
                    <tr>
                        <th>MÃ THỂ LOẠI</th>
                        <th>TÊN THỂ LOẠI</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo '
                                <tr>
                                    <td>'.$matl.'</td>
                                    <td>'.$tentl.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                        }
                    ?>

                </table>
            </div>
            <div class="row mb10 ">
                <a href="index.php?act=bieudo"> <input class="mr20" type="button" value="Xem biểu đồ"></a>
            </div>
        </form>
    </div>
</div>