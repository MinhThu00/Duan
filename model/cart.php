<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = "<th>Thao tác</th>";
        $xoasp_td2 = "<td></td>";
    } else {
        $xoasp_th = "";
        $xoasp_td2 = "";
    }
    echo '<form action="#">
    <div class="table-content table-responsive mb-15 border-1">
        <table>
            <thead>
                <tr>
                    <th class="product-thumbnail">Hình ảnh</th>
                    <th class="product-name">Sản phẩm</th>
                    <th class="product-price">Giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="product-subtotal">Tổng</th>

                    ' . $xoasp_th . '
                </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_th = "<th>Thao tác</th>";
            $xoasp_td = '<yd><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"</a></td>';
            $xoasp_td2 = "<td></td>";
        } else {
            $xoasp_th = "";
            $xoasp_td = "";
            $xoasp_td2 = "";
        }
        echo '
        <tr>
        <td class="product-thumbnail"><a href="#"><img src="' . $hinh . '" alt="man" /></a></td>
        <td class="product-name"><a href="#">' . $cart[1] . '</a></td>
        <td class="product-price"><span class="amount">' . $cart[3] . '</span></td>
        <td class="product-quantity">' . $cart[4] . '</td>
        <td class="product-subtotal">' . $ttien . '</td>
        ' . $xoasp_td . '
        </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td class="product-subtotal">' . $tong . '</td>
            ' . $xoasp_td2 . '
        </tr>
        </tbody>
        </table>
    </div>
</form>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function bill_chi_tiet($billct)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<form action="#">
    <div class="table-content table-responsive mb-15 border-1">
        <table>
            <thead>
                <tr>
                    <th class="product-thumbnail">Hình ảnh</th>
                    <th class="product-name">Sản phẩm</th>
                    <th class="product-price">Giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="product-subtotal">Tổng</th>
                </tr>';
    foreach ($billct as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
        <tr>
        <td class="product-thumbnail"><a href="#"><img src="' . $hinh . '" alt="man" /></a></td>
        <td class="product-name"><a href="#">' . $cart['name'] . '</a></td>
        <td class="product-price"><span class="amount">' . $cart['price'] . '</span></td>
        <td class="product-quantity">' . $cart['soluong'] . '</td>
        <td class="product-subtotal">' . $cart['thanhtien'] . '</td>
        </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td class="product-subtotal">' . $tong . '</td>
        </tr>
        </tbody>
        </table>
    </div>
</form>';
}

function insert_bill($iduser,$name, $email,$pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(id_user,name,email,pttt,ngaydathang,total) values('$iduser', '$name', '$email','$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(id_user,id_pro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    // var_dump($bill);
    // die();
    return $bill;
}

function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill($kyw="",$id_user=0)
{
    $sql = "select * from bill where 1";
    if($id_user>0) $sql.=" AND id_user=" . $id_user;
    if($kyw!="") $sql.=" AND id like '%" . $kyw. "%'";
    $sql.=" order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}

function update_bill($id, $status){
    $sql = "update bill set status='".$status."' where id=".$id;
    pdo_execute($sql);
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
function delete_bill($id){
    $sql = "delete from bill where id=". $id;
    pdo_query($sql);
}
function loadall_thongke(){
    $sql = "select theloai.id as matl, theloai.name as tentl, count(truyen.id) as countsp, min(truyen.price) as minprice, max(truyen.price) as maxprice, avg(truyen.price) as avgprice";
    $sql.= " from truyen left join theloai on theloai.id = truyen.id_the_loai";
    $sql.= " group by theloai.id order by theloai.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>