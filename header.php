<?php 
include_once 'ketnoi.php';
$sql="SELECT * FROM danhmuc_sanpham";
$query=mysqli_query($conn,$sql);
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DU LỊCH &mdash; ĐỒ ÁN TỐT NGHIỆP </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ĐỒ ÁN TỐT NGHIỆP" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">VIỆT NAM TRONG TÔI <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
				<ul>
						<li><a href="index.php">Trang Chủ</a></li>
						<li class="has-dropdown">
							<a href="#">Khám phá Việt Nam</a>
							<ul class="dropdown">
								<?php 
									while ($row = mysqli_fetch_array($query)) 
									{										
								?>
								<li><a href="chuyenditheodm.php?id_dm=<?php echo $row['id_dm']; ?>"><?php echo $row['ten_dm']; ?></a></li>
								<?php 
									}
								?>
							</ul>
						</li>
						<li><a href="feedback.php">Phản Hồi</a></li>
						<?php
							if(isset($_SESSION['email']))
							{
								echo "Xin chào".$_SESSION['email'];
								echo "<li><a href='logout.php'>Đăng Xuất</a></li>";
							}
							else
							{
								echo "<li><a href='login.php'>Đăng Nhập</a></li>";
								echo "<li><a href='signup.php'>Đăng Ký</a></li>";
							}
						?>
						<li><a href="admin/index.php">Trang quản trị</a></li>		
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>