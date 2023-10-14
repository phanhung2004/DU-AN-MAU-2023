<?php
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listsp":
                if(isset($_POST['clickok']) && ($_POST['clickok'])){
                    $keyw=$_POST['keyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyw='';
                    $iddm=0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($keyw, $iddm);
                include "sanpham/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $tensanpham = $_POST['tensanpham']; 
                    $mota = $_POST['mota'];
                    $giasp = $_POST['giasp'];
                    $hinhanh = $_FILES['hinhanh']['name'];
                    $dir = "../upload/";
                    $upFile = $dir.basename($_FILES['hinhanh']['name']);
                    // echo $upFile;
                    if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $upFile)){
                        // echo "bạn đẫ upload thành công";
                    }else{
                        echo "chua upload anh";
                    }
                    insert_sanpham($tensanpham, $mota, $giasp, $hinhanh, $iddm);
                    $thongbao = "them thanh cong";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;  
            case "suasp":
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0) ){
                    $sanpham=loadone_sanpham($_GET['idsp']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];
                    $tensanpham=$_POST['tensanpham'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinhanh=$_FILES['hinhanh']['name'];
                    $dir="../upload/";
                    $upFile=$dir.basename($_FILES['hinhanh']['name']);
                    if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $upFile)){
                        echo "thanh cong";
                    }else{
                        echo "lỗi";
                    }

                    updatesp($id, $iddm, $tensanpham, $giasp, $mota, $hinhanh);     
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case "xoasp":
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    delete($_GET['idsp']);
                }

                $listsanpham=loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case "dstaikhoan":
                $listtaikhoan=loadall_taikhoan();
                include "tk_khachhang/khachhang.php";
                break;
            case "addtk":
                if(isset($_POST['themmoitk']) && ($_POST['themmoitk'])){
                    // $role = $_POST['role'];
                    $tentaikhoan = $_POST['tentaikhoan']; 
                    $address = $_POST['address'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    add_taikhoan($tentaikhoan, $address, $pass, $email, $tel);
                    $thongbao = "them thanh cong";
                }
                include "tk_khachhang/addtk.php";
                break;
            case "edittk_load":
                if(isset($_GET['idtk']) && ($_GET['idtk'] > 0) ){
                    $taikhoan=loadone_taikhoan($_GET['idtk']);
                }
                // $listdanhmuc=loadall_danhmuc();
                include "tk_khachhang/edittk.php";
                break;

            case "edittk":
                if(isset($_POST['edittk']) && ($_POST['edittk'])){
                    $tentaikhoan = $_POST['tentaikhoan'];
                    $address = $_POST['address'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    
                    updatetk($id, $tentaikhoan, $address, $pass, $email, $tel);
                    header("location: index.php?act=dstaikhoan");
                }
                // post có giá trị, tồn tại, và khác rỗng, mull, 0, fall
                include "tk_khachhang/edittk.php";
                break;
            case "deletetk":
                if(isset($_GET['idtk']) && ($_GET['idtk']>0)){
                    deletetk($_GET['idtk']);
                }

                $listtaikhoan = loadall_taikhoan();
                include "tk_khachhang/khachhang.php";
                break;
            case "binhluan":
                $listbinhluan = loadall_binhluanadmin();
                include "show_binhluan/show_binhluan.php";
                break;
            case "editbl":

                if(isset($_POST['editbl']) && ($_POST['editbl'])){
                    $noidung = $_POST['noidung'];
                    $id = $_POST['id'];
                    
                    updatebl($id, $noidung);
                    header("location: index.php?act=binhluan");
                }
                include "show_binhluan/editbl.php";
                break;
            case "editbl_load":
                if(isset($_GET['idbl']) && ($_GET['idbl'] > 0)){
                    $binhluan = loadone_binhluan($_GET['idbl']);
                }
                // echo $binhluan;
                include "show_binhluan/editbl.php";
                break;
            case "deletebl":
                if(isset($_GET['idbl']) && ($_GET['idbl']>0)){
                    deletebl($_GET['idbl']);
                }

                $listbinhluan=loadall_binhluanadmin();
                include "show_binhluan/show_binhluan.php";
                break;
            case "thongke":
                    $listthongke = loadall_thongke();
                    include "thongke/thongke.php";
                    break;  
            case "bieudo":
                 
                $listthongke = loadall_thongke();
                include "thongke/bieudo.php";
                break;
            case "home":
                    include "home.php"; 
                    break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
