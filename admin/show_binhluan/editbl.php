
<?php
    if(is_array($binhluan)){
        extract($binhluan);
    }
    

?>
<div class="row2">
         <div class="row2 font_title">
          <h1>SỬA BÌNH LUẬN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=editbl" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> NỘI DUNG</label> <br>
            <input type="text" name="noidung" value="<?=$noidung;?>">
           </div>


           <div class="ro   w mb10 ">
        <input type="hidden" name="id" value="<?=$id?>">
         <input class="mr20" name="editbl" type="submit" value="SỬA BÌNH LUẬN">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=binhluan"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao) && ($thongbao != '')){
              echo $thongbao;
              header("location: index.php?act=binhluan");
            }
           ?>
          </form>
         </div>
        </div>  