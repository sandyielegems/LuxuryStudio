<?php
include("includes/header.php");
?>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2 class="mb-4">Foto's</h2>
				<!-- <p class="work-category">
					<span class="px-2"><a href="#" class="active">All</a></span>
					<span class="px-2"><a href="#">Make Up</a></span>
					<span class="px-2"><a href="#">Massage</a></span>
					<span class="px-2"><a href="#">Facial</a></span>
					<span class="px-2"><a href="#">Spa</a></span>
					<span class="px-2"><a href="#">Hair</a></span>
					<span class="px-2"><a href="#">Nail</a></span>
				</p> -->
			</div>
		</div>

		<!-- gallery -->
		<div class="col-md-4 ftco-animate">
			<a href="#">
				<div>
					<h3>Title</h3>
					<p>paragraaf</p>
				</div>
			</a>

			<a href="#">
				<div>
					<h3>Title</h3>
					<p>paragraaf</p>
				</div>
			</a>

			<a href="#">
				<div>
					<h3>Title</h3>
					<p>paragraaf</p>
				</div>
			</a>

		</div>

		<!-- upload form  -->
		<div>
			<form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
				<input type="text" name="filename" placeholder="File name ...">
				<input type="text" name="filetitle" placeholder="Image title ...">
				<input type="text" name="filedesc" placeholder="Image description ...">

			</form>

		</div>



		<div class="row">
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Lips Makeover</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Hair Style</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Makeup</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Lips Makeover</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Hair Style</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Makeup</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Lips Makeover</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Hair Style</h3>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 ftco-animate">
				<a href="#" class="work-entry">
					<img src="images/work-9.jpg" class="img-fluid" alt="Colorlib Template">
					<div class="info d-flex align-items-center">
						<div>
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
								<span class="icon-search"></span>
							</div>
							<h3>Makeup</h3>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="ftco-footer ftco-section img">
	<div class="overlay"></div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-3">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">About Us</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Recent Blog</h2>
					<div class="block-21 mb-4 d-flex">
						<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
							<div class="meta">
								<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
								<div><a href="#"><span class="icon-person"></span> Admin</a></div>
								<div><a href="#"><span class="icon-chat"></span> 19</a></div>
							</div>
						</div>
					</div>
					<div class="block-21 mb-4 d-flex">
						<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
							<div class="meta">
								<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
								<div><a href="#"><span class="icon-person"></span> Admin</a></div>
								<div><a href="#"><span class="icon-chat"></span> 19</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="ftco-footer-widget mb-4 ml-md-4">
					<h2 class="ftco-heading-2">Spa Center</h2>
					<ul class="list-unstyled">
						<li><a href="#" class="py-2 d-block">Body Care</a></li>
						<li><a href="#" class="py-2 d-block">Massage</a></li>
						<li><a href="#" class="py-2 d-block">Hydrotherapy</a></li>
						<li><a href="#" class="py-2 d-block">Yoga</a></li>
						<li><a href="#" class="py-2 d-block">Sauna</a></li>
						<li><a href="#" class="py-2 d-block">Aquazone</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
							<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
							<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>