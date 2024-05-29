<?php ob_start();
session_start();
// include "./view/home.php";
// include "./view/footer.php";
include "./model/the_loai.php";
include "./model/pdo.php";
include "./model/truyen.php";
include "./model/taikhoan.php";
include "./model/cart.php";
include "global.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_the_loai();
$dstl = loadall_the_loai();
$dsbanchay = loadall_sanpham_top10();


include "./view/header.php";
//include "./view/cart/viewcart.php";


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'truyen':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;

            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tentl = load_ten_tl($iddm);
            include "view/truyen.php";
            break;

        case 'chitiettruyen':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                include "view/chitiettruyen.php";
            } else {
                include "view/home.php";

            }
            break;



        case 'dangky':
            if ((isset($_POST['dangky'])) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập tài khoản";
            }
            include "./view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location:index.php');
                } else {
                    $thongbao = 'Tài khoản không tồn tại.Vui lòng kiểm tra lại đăng ký';
                }

            }
            include "./view/taikhoan/dangnhap.php";
            break;


        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];

                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location:index.php?act=edit_taikhoan');
            }
            include "./view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = check_email($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là :" . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include "./view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('location:index.php');
            break;

            case 'addtocart':
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                // var_dump($_POST['img'] );
                // die();
                $price = $_POST['price'];
    
                if (isset($_POST['number'])) {
                    $soluong = $_POST['number'];
                } else {
                    $soluong = 1;
                }
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
    
                if (isset($_SESSION['mycart'])) {
                    $countEmptyId = 0;
                    $dataSaveSession = $_SESSION['mycart'];
                    for ($i = 0; $i < count($dataSaveSession); $i++) {
                        // var_dump($dataSaveSession[$i][0]);
                        // var_dump($id);
                        if ($dataSaveSession[$i][0] == $id) {
                            $dataSaveSession[$i][4] = $dataSaveSession[$i][4] + $soluong;
                            $countEmptyId++;
                            break;
                        }
                    }
                    if ($countEmptyId > 0) {
                        $_SESSION['mycart'] = $dataSaveSession;
                    } else {
                        array_push($_SESSION['mycart'], $spadd);
                    }
    
                } else {
                    // if ($_SESSION['mycart'] == null) {
                    //     $_SESSION['mycart'] = $spadd;
                    // } else {
                    $_SESSION['mycart'][0] = $spadd;
                    //}
                }
    
                // print_r($_SESSION["mycart"]);
                // die();
    
                $new_food = [
                    'id' => $id,
                    "name" => $name,
                    "img" => $img,
                    "price" => $price,
                ];
                header('location: index.php?act=viewcart');
                break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                if (array_slice($_SESSION['mycart'], $_GET['idcart'])) {
                    array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                }
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include "./view/cart/viewcart.php";
            break;

        case 'bill':
            include "./view/cart/bill.php";
            break;
        case 'billcomform':
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $id = 0;
                }
                $name = $_POST['name'];
                $email = $_POST['email'];
                // $address = $_POST['address'];
                // $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('d/m/Y');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser, $name, $email,$pttt, $ngaydathang, $tongdonhang);

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }

                $_SESSION['cart'] = [];


            }
            $bill = loadone_bill($id);
            $billct = loadall_cart($id);
            include "./view/cart/billcomform.php";
            break;
        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['id']);
            include "./view/cart/mybill.php";
            break;
        case 'blog':
            include './view/blog.php';
            break;

        case 'lienhe':
            include './view/lienhe.php';
            break;
        default:
            include "./view/home.php";
            break;
    }
} else {
    include "./view/home.php";
}
include "./view/footer.php";
ob_end_flush();
?>