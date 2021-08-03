<?php require "ketnoi.php"?>
<?php require "auth.php"?>
<?php include 'header.php'?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/bg-feedback.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Cho chúng tôi xin</span>
							<h1>Ý kiến của bạn về chất lượng phục vụ</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
			<!-- Code PHP  -->
			<?php 
			if(isset($_POST['submit']))
			{
				$fullname = $_POST['fullname'];
				$sodienthoai = $_POST['sodienthoai'];
				$email_feedback = $_POST['email_feedback'];
				$noidung = $_POST['noidung'];

				if($conn -> query("INSERT INTO feedback (hovaten, sodienthoai, email, noidung) VALUES ('$fullname','$sodienthoai','$email_feedback','$noidung')"))
				{
				echo "<script>alert('Gửi thành công!');</script>";
				}
				else
				{
				echo "<script>alert('Gửi thất bại!');</script>";
				}	           

							}
				$conn->close();
			?>
			<!-- End Code PHP -->
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Phản hồi khách hàng</h3>
					<form action="feedback.php" method="POST">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input name="fullname" type="text" id="name" class="form-control" placeholder="Họ và Tên">
							</div>
							
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Number</label>
								<input name="sodienthoai" type="text" id="number" class="form-control" placeholder="Số điện thoại">
							</div>
						</div>
			
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input name="email_feedback" type="text" id="email" class="form-control" placeholder="Email của bạn">
							</div>
						</div>


						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="noidung" id="message" cols="30" rows="10" class="form-control" placeholder="Nội dung"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input name="submit" type="submit" value="GỬI" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Thông tin liên lạc</h3>
						<ul>
							<li class="address">161 Nguyễn Chí Thanh, Phường 12,  <br> Quận 5, Thành phố Hồ Chí Minh</li>
							<li class="phone"><a href="tel://1234567920">+84 036 5454 067</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">trieuphuisme@gmail.com</a></li>
							<li class="url"><a href="index.html">trieuphutravel.com</a></li>
						</ul>
					</div>


				</div>
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

