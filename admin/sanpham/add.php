<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI LOẠI sản phẩm</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">

          <div class="row2 mb10 form_content_container">
           <label> Loại sản phẩm </label> <br>
            <select name="iddm" id="">
                    <option value="0" selected>tat ca</option>
                    <?php
                        foreach($listdanhmuc as $dm){
                            extract($dm);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
            </select>
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Tên Sản Phẩm </label> <br>
            <input type="text" name="tensanpham" placeholder="nhập vào tên sản phẩm">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Hình ảnh </label> <br>
            <input type="file" name="hinhanh">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Mô tả sản phẩm </label> <br>
            <textarea name="mota" id="" cols="30" rows="10"></textarea>
           </div>

           <div class="row2 mb10">
            <label>Gía Sản Phẩm </label> <br>
            <input type="text" name="giasp" placeholder="nhập vào giá sản phẩm">
           </div>
           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
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