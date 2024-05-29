<?php

if (is_array($bill)) {
    extract($bill);
}
?>

<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT TRẠNG THÁI ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatebill" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã đơn hàng: </label> <br>
                <input type="text" name="madh" placeholder="nhập vào mã đơn hàng">
            </div>
            <div class="row2 mb10">
                <label>Trạng thái đơn hàng: </label> <br>
                <input type="text" name="status" placeholder="nhập vào trạng thái đơn hàng" value="<?php if (isset($status) && $status != "") echo $status; ?>">
            </div>
            <div class="row mb10 ">
                <input type="hidden" value="<?php if (isset($id)&&($id>0)) echo $id; ?>" name="id">
                <input class="mr20" type="submit" value="Cập nhật" name="capnhat">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listbill"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>