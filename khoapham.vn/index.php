<?php
session_start();
require "lb/tinmoinhat.php";
$db = connectDb();
if(isset($_GET['p'])) {
    $p = $_GET['p'];
    echo $p;
} else {
    $p = '';
    echo "khong co gia tri p";
}
?>
<!-- dang nhap -->
<?php
    if(isset($_POST['dangnhap'])){
        $username = $_POST['txtname'];
        $password = $_POST['txtpassword'];
        $password = md5($password);
        $qr = "SELECT * FROM Users WHERE Username = '$username' AND Password =  '$password'";
        $user = mysqli_query($db, $qr);
        if( mysqli_num_rows($user) == 1) {
            $row = mysqli_fetch_array($user);
            $_SESSION['idUser'] = $row['idUser'];
            $_SESSION['HoTen'] = $row['HoTen'];
            $_SESSION['Password'] = $row['Password'];
        }
    }
?>
<?php
    // thoat
    if(isset($_POST['btnThoat'])){
        unset($_SESSION['idUser']);
        unset( $_SESSION['HoTen']);
        unset( $_SESSION['Password']);
    }
?>
<!-- dang ky -->
<?php
    if(isset($_POST['dangky'])){
        require "blocks/dangky.php";
    }
?>
<?php
    if(isset($_POST['dangky'])){
            $username   = $_POST['txtUsername'];
            $password   = $_POST['txtPassword'];
            $email      = $_POST['txtEmail'];
            $fullname   = $_POST['txtFullname'];
            $birthday   = $_POST['txtBirthday'];
            $sex        = $_POST['txtSex'];
                
            //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
            if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex)
            {
                echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
                
                // Mã khóa mật khẩu
                $password = md5($password);
                
            //Kiểm tra tên đăng nhập này đã có người dùng chưa
            if (mysqli_num_rows(mysqli_query($db,"SELECT Username FROM users WHERE Username='$username'")) > 0){
                echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
                
            //Kiểm tra email có đúng định dạng hay không
            if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
            {
                echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
                
            //Kiểm tra email đã có người dùng chưa
            if (mysqli_num_rows(mysqli_query($db,"SELECT Email FROM users WHERE Email='$email'")) > 0)
            {
                echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            //Kiểm tra dạng nhập vào của ngày sinh
            if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday))
            {
                    echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }
                
            //Lưu thông tin thành viên vào bảng
            @$addmember = mysqli_query($db,"
                INSERT INTO users (
                    Username,
                    Password,
                    Email,
                    HoTen,
                    NgaySinh,
                    GioiTinh
                )
                VALUES (
                    '$username',
                    '$password',
                    '$email',
                    '$fullname',
                    '$birthday',
                    '$sex'
                )
            ");
                  echo $addmember;              
            //Thông báo quá trình lưu
            if ($addmember)
                echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
            else
                echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";

            }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<title>Lap Trinh PHP - KhoaPhamTraining</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>

<body>
<div id="wrap-vp">
	<div id="header-vp">
    	<div id="logo"><img src="images/logo.gif" /></div>
    </div>
    
    <div id="menu-vp">
    	<!--block/menu.php-->
        <?php require "blocks/menu.php"; ?>
    </div>
      <div id="midheader-vp">
    	<div id="left">
        	<ul class="list_arrow_breakumb">
            	<li class="start">
                <a href="javascript:;">Trang nhất</a>
                <span class="arrow_breakumb">&nbsp;</span></li>
           </ul>
        </div>
        <div id="right">
			<!--blocks/thongtinchung.php-->
            <?php require "blocks/thongtinchung.php"; ?>
        </div>
    </div>
    <div class="clear"></div>

    <div id="slide-vp">
    	<!--blocks/top_trang_chu.php-->
        <?php require "blocks/top_trang_chu.php"; ?>

        <div id="slide-right">
        <!--blocks/quangcao_top_phai.php-->
        <?php require "blocks/quangcao_top_phai.php"; ?>
        </div>
    </div>

  	<div id="content-vp">
    	<div id="content-left">
		<!--blocks/cot_trai.php-->
        <?php require "blocks/cot_trai.php"; ?>
        </div>
        <div id="content-main">
            <?php
                switch($p){
                    case 'tintrongloai':
                        require "pages/tintrongloai.php";
                        break;
                    case 'chitiettin':
                        require "pages/chitiettin.php";
                        break;
                    default:
                        require "pages/trangchu.php";
                }

            ?>
			<!--PAGES-->
            
        </div>
        <div id="content-right">
        <?php
            if(!isset($_SESSION['idUser'])){
                require "blocks/dangnhap.php";
            }else {
                require "blocks/dadangnhap.php";
            }
        ?>

		<!--blocks/cot_phai.php-->
        <?php require "blocks/cot_phai.php"; ?>
        </div>

    <div class="clear"></div>
    	
    </div>
    
     <div id="thongtin">
    	<!--blocks/thongtindoanhnghiep.php-->
        <?php require "blocks/thongtindoanhnghiep.php"; ?>
    </div>
    <div class="clear"></div>
    <div id="footer">
    	<!--blocks/footer.php-->
        <?php require "blocks/footer.php"; ?>
        
        <div class="ft-bot">
            <div class="bot1"><img src="images/logo.gif" /></div>
            <div class="bot2">
                     <p>© <span>Copyright 1997 VnExpress.net,</span>  All rights reserved</p>
                     <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
            </div>
            <div class="bot3">
                
                     <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a>   <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
                     <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>
                  
            </div>
        </div>
    </div>
    
    
    
    
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>
