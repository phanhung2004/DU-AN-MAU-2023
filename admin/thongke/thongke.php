

<div class="row2">
         <div class="row2 font_title">
          <h1>THỐNG KÊ SẢN PHẨM</h1>
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
                <th>Mã Danh mục</th>
                <th>TÊN DANH MỤC</th>
                <th>TỔNG SẢN PHẨM</th>
                <th>GIÁ NHỎ NHẤT</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                <th></th>
            </tr>
            <tr>
                <?php
                    foreach($listthongke as $thongke){
                        extract($thongke);
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$minprice.'</td>
                        <td>'.$maxprice.'</td>
                        <td>'.$avgprice.'</td>
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
<a href="index.php?act=bieudo"> <input  class="mr20" type="button" value="XEM BIỀU ĐỒ"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>