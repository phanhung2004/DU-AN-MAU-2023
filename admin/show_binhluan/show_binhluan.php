

<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH BINH LUẬN </h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
            <form action="index.php?act=listsp" method="POST">
                <input type="text" name="keyw" id="">

                <!-- <input type="submit" name="clickok" value="tìm"> -->
            </form>
           <table>
            <tr>
                <th></th>
                <th>ID TÀI KHOẢN</th>
                <th>NỘI DUNG</th>
                <th>IDUSER</th>
                <th>IDPRO</th>
                <th>NGÀY BÌNH LUẬN</th>
                <th></th>
            </tr>
            <tr>
                <?php
                    foreach($listbinhluan as $binhluan){
                        extract($binhluan);
                        $editbl = "index.php?act=editbl_load&idbl=".$id;
                        $deletebl = "index.php?act=deletebl&idbl=".$id;
                        $date = date("d/m/Y", strtotime($binhluan['ngaybinhluan']));
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$date.'</td>
                        <td><a href="'.$editbl.'"><input type="button" value="Sửa"></a>   
                        <td><a href="'.$deletebl.'"><input type="button" onclick="return confirm(\'ban co muon xoa khong\')" value="Xóa"></a>
                    </tr>';
                    }
                ?>

            <!-- <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr> -->
           
            
           </table>
           </div>
           <div class="row mb10 ">
         <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ"> -->
         <!-- <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
<!-- <a href="index.php?act=addtk"> <input  class="mr20" type="button" value="NHẬP THÊM"></a> -->
           </div>
          </form>
         </div>
        </div>



       
    </div>