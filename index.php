<?php
    session_start();
include ("connect/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<html xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Bán Điện Thoại </title>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" style="style/sheet" href="css/index.css">
<link rel="stylesheet" style="style/sheet" href="slide/engine/style.css">
<script type="text/javascript" src="slide/engine/wowslider.js"></script>
<script type="text/javascript" src="slide/engine/wowslider.mod.js"></script>

<html>
	<head>
		<meta charset="utf-8">
		<title>Cửa hàng điện tử</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="banner">
			<img src="images/download.jpeg">
		</div>
</div><!-- End .menu-header -->
		<div id="menu_top" style="padding-bottom:0px;">
			<ul>
				<li><a href="index.php" title="TRANG CHỦ">TRANG CHỦ</a></li>
				<li><a href="index.php?content=product" title="SẢN PHẨM">SẢN PHẨM</a></li>
				<li><a href="index.php?content=accessories" title="PHỤ KIỆN">PHỤ KIỆN</a></li>
				<li><a href="index.php?content=khuyenmai" title="KHUYẾN MÃI">KHUYẾN MÃI</a></li>
				<li><a href="index.php?content=intro" title="GIỚI THIỆU">GIỚI THIỆU</a></li>
				<li id="signIn">
					<?php 
					if(isset($_SESSION['username'])){
					?>
						<a href="log_out.php" title="Loging Out" style="color:#ff0000;padding-left: 150px;border-right: hidden;"><?php echo("Log out")?></a>
						<?php
						}
					else {
						$string_1="1";?>
						<a href="index.php?content=dangky" title="Đăng kí" style="color: #ff0000;padding-left: 150px;border-right: hidden;"><?php echo("Đăng kí")?></a>
					<?php }?>
				</li>
			</ul>
		</div>
		<div id="slide" style="width: 100%; height: 250px; float: left; background-color: black;">
		</div>
		<div id="menu">
			<div id="menu_left">
				<?php 
					include("include/menu_left_old.php");
				 ?>
				</div>
			<div id ="main" style="width: 600px;">
				<?php
					include("content_page.php");
				?>

			 </div>
			<div id="menu_right">
				<?php 
					include("include/menu_right.php");
				 ?>
			</div>
</div>
	</body>
</html>
