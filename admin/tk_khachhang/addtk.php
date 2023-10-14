<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI TAI KHOAN USER</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addtk" method="POST" enctype="multipart/form-data">


           <div class="row2 mb10 form_content_container">
           <label> Tên tài khoản</label> <br>
            <input type="text" name="tentaikhoan" placeholder="nhập vào tên tài khoản">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Địa thỉ</label> <br>
            <input type="text" name="address" placeholder="địa chỉ">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> pass</label> <br>
            <input type="text" name="pass">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> email</label> <br>
            <input type="text" name="email" id="">
           </div>

           <div class="row2 mb10">
            <label>SĐT</label> <br>
            <input type="text" name="tel" placeholder="tel">
           </div>
           <div class="row mb10 ">
         <input class="mr20" name="themmoitk" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=dstaikhoan"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao) && ($thongbao != '')){
              echo $thongbao;
              header("location: index.php?act=dstaikhoan");
            }
           ?>
          </form>
         </div>
        </div>