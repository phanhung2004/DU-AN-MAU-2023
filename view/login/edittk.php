<!-- END HEADER -->

<main class="catalog  mb ">

    <div class="boxleft">

        <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php if(isset($_SESSION['user']) && (is_array($_SESSION['user']))) 
            {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edittk" method="post"> 
                <div>
                    <p>Email</p>
                    <input type="email" name="email" value="<?=$email;?>">
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" value="<?=$user?>">
                </div>
                Mật khẩu
                <div>
                    <input type="text" name="pass" value="<?=$pass?>">
                </div>
                <div>
                    <p>ĐỊA CHỈ</p>
                    <input type="text" name="address" value="<?=$address?>">
                </div>
                <div>
                    <p>ĐIỆN THOẠI</p>
                    <input type="text" name="tel" value="<?=$tel?>">
                </div>
                <input type="hidden" name="id" value="<?=$id;?>">
                <input type="submit" value="cap nhat" name="capnhat">
                <input type="reset" value="Nhập lại">
            </form>
            <?php 
                if(isset($capnhat_connect) && ($capnhat_connect != "")) {
                    echo $capnhat_connect;
                }
            ?>
        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>
