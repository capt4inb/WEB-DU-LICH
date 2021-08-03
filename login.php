<?php include 'header.php'?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">					
					<div class="row row-mt-15em">
							<div class="form-wrap">														
									<div class="container tab-content  ">                                       
										<div class="tab-content" data-content="signup">
											<h3>Đăng nhập</h3>
											<form action="index.php" method="POST">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Email</label>
														<input name="email" type="email" id="fullname" placeholder="Email của bạn..." class="form-control">
													</div>
												</div>

												<div class="row form-group">
                                                <div class="col-md-12">
														<label for="fullname">Password</label>
														<input name="password" type="password" id="password" placeholder="Hãy nhập mật khẩu..." class="form-control">
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<input name="login" type="submit" class="btn btn-primary btn-block" value="Đăng nhập">
													</div>
												</div>
												<?php require 'auth.php'?>
											</form>	
										</div>

										
									</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

    




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
