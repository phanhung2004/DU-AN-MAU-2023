<?php 

    /*
    xem để hiểu thêm 1 cách loadall bình luận của thầy longhh
        function loadall_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        $result =  pdo_query($sql);
        return $result;
    }

    **/


    function insert_binhluan($idpro, $noidung, $iduser){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
            VALUES ('$noidung','$iduser','$idpro','$date');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }
    function loadall_binhluanadmin() {
        $sql="select * from binhluan order by id desc";
        $listbinhluan=pdo_query($sql);
        return  $listbinhluan;
    }
    function updatebl($id, $noidung) {
        $sql = "UPDATE `binhluan` SET `noidung` = '{$noidung}' WHERE `id` = '{$id}'";
        pdo_execute($sql);
    }
    function loadone_binhluan($id){
        $sql = "select * from binhluan where `id` = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
    function deletebl($id) {
        $sql = "DELETE FROM `binhluan` WHERE id=".$id;
        pdo_execute($sql);
    }

?>