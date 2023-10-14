<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
            <form action="index.php?act=danhmuc" method="POST">
                <input type="text" name="keyw" id="">
                <select name="iddm" id="">
                    <option value="0" selected>tat ca</option>
                    <?php
                        foreach($listdanhmuc as $dm){
                            extract($dm);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="clickok" value="tìm">
            </form>
           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>HÌNH</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
            <tr>
                <?php
                    foreach($listsanpham as $sp){
                        extract($sp);
                        $suasp = "index.php?act=suasp&idsp=".$id;
                        $xoasp = "index.php?act=xoasp&idsp=".$id;
                        $hinhpath = "upload/".$img;
                        if(is_file($hinhpath)){
                            $hinhpath ="<img src= '".$hinhpath."' width='100px' height='100px'>";
                        }else{
                            $hinhpath ="<img src= '".$hinhpath."' width='100px' height='100px'>";
                        }
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$hinhpath.'</td>
                        <td>'.$luotxem.'</td>

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

          </form>
         </div>
        </div>



       
    </div>