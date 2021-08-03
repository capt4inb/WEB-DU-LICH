<?php require 'auth.php'?>				
<?php include 'header.php'?>
<?php 
include 'ketnoi.php';
$id_dm = $_GET['id_dm'];
$sqlDm="SELECT * FROM danhmuc_sanpham WHERE id_dm=$id_dm";
$queryDm=mysqli_query($conn,$sqlDm);
$rowDm=mysqli_fetch_array($queryDm);
$sql="SELECT * FROM sanpham WHERE id_dm=$id_dm ORDER BY id_sp DESC LIMIT 9";
$query=mysqli_query($conn,$sql);
?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_6.jpg.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1><?php echo $rowDm['ten_dm'] ?></h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
                <?php 
                    while ($row = mysqli_fetch_array($query)) 
                    {                             
                ?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="chitiet_chuyendi.php" class="fh5co-card-item image-popup">
						<figure>
							<a href="chitiet_chuyendi.php?id_sp=<?php echo $row['id_sp']; ?>"><img src="admin/anh/<?php echo $row['anh_sp']; ?>" alt="" alt="Image" class="img-responsive"></a>
						</figure>
						<div class="fh5co-text">
                            <a href="chitiet_chuyendi.php?id_sp=<?php echo $row['id_sp']; ?>"><h3><?php echo $row['ten_sp']; ?><h3><a>
							<a href="chitiet_chuyendi.php?id_sp=<?php echo $row['id_sp']; ?>"><p><span class="btn btn-primary">Lên lịch cho chuyến đi</span></p>
						</div>
					</a>
				</div>
                <?php
                    }                             
                ?>	
				
			</div>
		</div>
	</div>
	

	
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>NHẬN THÔNG BÁO VỀ CÁC TOUR MỚI NHẤT</h2>
					<p>Hãy là người đầu tiên nhận được thông báo mới nhất về các chuyến đi.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email của bạn...">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">ĐĂNG KÝ</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER START -->
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>VỀ CHÚNG TÔI</h3>
						<p>Là một trang web giới thiệu các tour du lịch về các địa điểm phổ biến nhất trong nước được tổng hợp lại bởi các trang du lịch hàng đầu Việt Nam</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>NƠI ĐẾN</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Miền Bắc</a></li>
							<li><a href="#">Tây Bắc</a></li>
							<li><a href="#">Miền Trung</a></li>
							<li><a href="#">Miền Nam</a></li>
							<li><a href="#">Miền Tây</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Funny Monkeys Homestay</a></li>
							<li><a href="#">Sunset Sanato Resort </a></li>
							<li><a href="#">Hoi An Reverie Villas</a></li>
							<li><a href="#">Sai Gon Ban Me Hotel</a></li>
							<li><a href="#">THU DUY Resort</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>LIÊN HỆ</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +84 036 5454 067</a></li>
							<li><a href="#"><i class="icon-mail2"></i> trieuphuisme@gmail.com</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; ĐỒ ÁN TỐT NGHIỆP - LÊ TRIỆU PHÚ.</small> 
						<small class="block">Designed by LÊ TRIỆU PHÚ </small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- FOOTER END -->
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

