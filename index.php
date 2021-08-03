<?php 
include 'ketnoi.php'?>	
<?php include 'header.php'?>
<?php require 'auth.php'?>				
	<!-- NAV END -->
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Hãy kể với chúng tôi về kế hoạch du lịch của bạn !!!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<!-- ĐĂNG KÝ CHUYẾN ĐI START -->
									<?php 
									if(isset($_POST['submit_travel']))
									{
										$email = $_POST['email'];
										$hoatdong = $_POST['hoatdong'];
										$noiden = $_POST['noiden'];
										$datekhoihanh = $_POST['datekhoihanh'];
										if($email == "")
										{
											echo '<script language="javascript">alert("Không thể bỏ trống gmail"); window.location="index.php";</script>';
											die;
										}                 
										if($conn -> query("INSERT INTO regis_travel (email, hoatdong, noiden, datekhoihanh) VALUES ('$email','$hoatdong','$noiden','$datekhoihanh')"))
										{
										echo '<script language="javascript">alert("Gửi thành công"); window.location="index.php";</script>';
										}
										else
										{
											echo '<script language="javascript">alert("Gửi thất bại"); window.location="index.php";</script>';
										}	           
									
									}
									$conn->close();
									?>							
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Đăng ký chuyến đi để được tư vấn</h3>
											<form action="index.php" method="POST">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Email</label>
														<input name="email" type="email" id="fullname" placeholder="Email của bạn..." class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Hoạt Động</label>
														<select name="hoatdong" id="activities" class="form-control">
															<option value="Chèo thuyền Kayak">Chèo thuyền Kayak </option>
															<option value="Đi bộ đường dài">Đi bộ đường dài</option>
															<option value="Thám hiểm ở hang động">Thám hiểm ở hang động</option>
															<option value="Bơi & Lặn biển">Bơi & Lặn biển</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Nơi Đến</label>
														<select name="noiden" id="destination" class="form-control">
															<option value="Miền Bắc">Miền Bắc</option>
															<option value="Tây Bắc">Tây Bắc</option>
															<option value="Miền Trung">Miền Trung</option>
															<option value="Miền Nam">Miền Nam</option>
															<option value="Miền Tây">Miền Tây</option>
														</select>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Ngày Khởi Hành</label>
														<input name="datekhoihanh" type="text" id="date-start" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input name="submit_travel" type="submit" class="btn btn-primary btn-block" value="GỬI">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
									<!-- ĐĂNG KÝ CHUYẾN ĐI END -->
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
		

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Các thành tích của chúng tôi</h2>
					<p>“Đầu tư vào du lịch là một khoản đầu tư cho bản thân.”</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">NƠI ĐẾN</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Hotels</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">CHUYẾN ĐI</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">KHÁCH HÀNG HÀI LÒNG</span>

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

