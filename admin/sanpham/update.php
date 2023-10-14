<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }

    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinhpath="<img src='".$hinhpath."' width='100px' height='100px'>";
    }else{
        $hinhpath = "lỗi";
    }

?>


<div class="row2">
         <div class="row2 font_title">
          <h1>SỬA LOẠI sản phẩm</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">

          <div class="row2 mb10 form_content_container">
           <label> Loại sản phẩm </label> <br>
            <select name="iddm" id="">
                    <option value="0">tat ca</option>
                    <?php
                        foreach($listdanhmuc as $key=>$dm){
                            if($iddm==$dm['id']){
                                echo '<option value="'.$dm['id'].'"selected>'.$dm['name'].'</option>';
                            }else{
                                echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                            }
                        }
                    ?>
            </select>
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Tên Sản Phẩm </label> <br>
            <input type="text" name="tensanpham" value="<?=$name?>">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Hình ảnh </label> <br>
            <input type="file" name="hinhanh">
            <?php
                echo $hinhpath;
            ?>
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Mô tả sản phẩm </label> <br>
            <textarea name="mota" id="" cols="30" rows="10"></textarea>
           </div>

           <div class="row2 mb10">
            <label>Gía Sản Phẩm </label> <br>
            <input type="text" name="giasp" value="<?=$price?>">
           </div>
           <div class="row mb10 ">
         <input type="hidden" name="id" value="<?=$id?>">
         <input class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao) && ($thongbao != '')){
              echo $thongbao;
              header("location: index.php?act=listsp");
            }
           ?>
          </form>
         </div>
        </div>