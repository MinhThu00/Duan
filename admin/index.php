<?php
include "../model/pdo.php";
include "../model/the_loai.php";
include "../model/truyen.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/binhluan.php";
include "header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addtl':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tentruyentl = $_POST['tentruyentl'];
                insert_the_loai($tentruyentl);
                $thongbao = "Thêm thành công";
            }
            include "the_loai/add.php";
            break;

        case 'listtl':
            $listtl = loadall_the_loai();
            include "the_loai/list.php";
            break;

        case 'suatl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $tl = loadone_the_loai($_GET['id']);
            }
            include "the_loai/update.php";
            break;

        case 'updatetl':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tentruyen = $_POST['tentruyen'];
                $id = $_POST['id'];
                update_the_loai($id, $tentruyen);
                $thongbao = "Cập nhật thành công";
            }
            $listtl = loadall_the_loai();
            include "the_loai/list.php";
            break;
        case 'xoatl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_the_loai($_GET['id']);
            }
            $listtl = loadall_the_loai();
            include "the_loai/list.php";
            break;


       
        case 'addsp':
            // người dùng có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $price = $_POST['giasp'];
                $mota = $_POST['mota'];

                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // 
                } else {
                }

                insert_sanpham($tensp, $price, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }

            $listtheloai = loadall_the_loai();
            include "truyen/add.php";
            break;
        // DANH MỤC 
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listtheloai = loadall_the_loai();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "truyen/list.php";
            break;
        // SỬA SẢN PHẨM 
        case 'suasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }

            $listtheloai = loadall_the_loai();
            include "truyen/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $price = $_POST['giasp'];
                $mota = $_POST['mota'];

                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // 
                } else {
                }
                update_sanpham($id, $iddm, $tensp, $price, $hinh, $mota);
                $thongbao = "Cập nhật thành công";
            }

            $listtheloai = loadall_the_loai();
            $listsanpham = loadall_sanpham("", 0);
            include "truyen/list.php";
            break;

        // XÓA SẢN PHẨM
        case 'xoasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "truyen/list.php";
            break;

        // CONTROLLER QUẢN LÝ KHÁCH HÀNG ======================================================================
        case 'dstk':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'addtk':
            // người dùng có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenkh = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                insert_taikhoan($email, $user, $pass, $address, $tel);
                $thongbao = "Thêm thành công";
            }
            include "taikhoan/add.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'suatk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $taikhoan = loadall_taikhoan();
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/update.php";
            break;

        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenkh = $_POST['tenkh'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $thongbao = "Cập nhật thành công";
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        // CONTROLLER ĐƠN HÀNG =================================================
        case 'listbill':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listbill = loadall_bill($kyw = "", $id_user = 0);
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "bill/listbill.php";
            break;
        case 'suabill':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bill = loadone_bill($_GET['id']);
            }
            include "bill/update.php";
            break;

        case 'updatebill':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $status = $_POST['status'];
                $id = $_POST['id'];
                update_bill($id,$status);
                $thongbao = "Cập nhật thành công";
            }
            $listbill = loadall_bill();
            include "bill/listbill.php";
            break;
            case 'xoabill':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    delete_bill($_GET['id']);
                }
                $listbill = loadall_bill();
                include "bill/listbill.php";
                break;
            
        // CONTROLLER BÌNH LUẬN =================================================
        case 'listbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        // XÓA BÌNH LUẬN
        case 'xoabl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;


        // // CONTROLLER THỐNG KÊ ======================================================================
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;

        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;

        case 'trangkh':
            header('Location: ../index.php');
            ;
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}