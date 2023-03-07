<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:30 GMT -->
<head>
	<title>Triptip</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="css/triptip-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
			<header class="clearfix dark-header-style fullwidth-with-search">

				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container">
	
						<a class="navbar-brand" href="/index">
							<img src="images/logo.png" alt="">
						</a>
	
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
	
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li>
									<a class="active" href="/index04b9">Beranda <i class="" aria-hidden="true"></i></a>
								</li>
								<li ><a  href="#">Kategori <i class="fa fa-caret-down" aria-hidden="true"></i></a>
									<div class="megadropdown">
										<div class="dropdown-box">
											
											<ul class="dropdown-list">
												<li><a href="/artikel">artikel</a></li>
												<li><a href="/cerpen">cerpen</a></li>
												<li><a href="/puisi">puisi</a></li>
												<li><a href="/fotografi">fotografi</a></li>
												</ul>
										</div>
										<div class="dropdown-box">
											<ul class="dropdown-list">
											
												<li><a href="/makalah">makalah</a></li>
												<li><a href="/skripsi">skripsi</a></li>
												<li><a href="/ilmiah">karya ilmiah</a></li>
											</ul>
										</div>
										<div class="dropdown-box">
											<ul class="dropdown-list">
												<li><a href="/diary">diary</a></li>
												<li><a href="/ilustrasi">ilustrasi</a></li>
												<li><a href="/pantun">pantun</a></li>
												<li><a href="/essai">esai</a></li>
											
												</ul>
										</div>
									</div>
								</li>
								<li><a href="/kontak">Hubungi Kami</a></li>	
							</ul>\
							<a href="/index04b9" class="add-list-btn btn-default">Kembali</a>
	
					</div>
				</nav>
			</header>
		<!-- End Header -->

		<!-- contact-page-block
			================================================== -->
			
		<section class="contact-page">
			<div class="container">
				<span class="contact-page__short-title">
				Pusat Informasi Kami				</span>
				<h1 class="contact-page__title">
					Hubungi Kami
				</h1>
				<p class="contact-page__description">
				Silahkan Hubungi kami jika ada kendala				</p>

				<div class="row">
					<div class="col-lg-5 col-md-8">
						
						<!-- Contact form module -->
						<h2 class="contact-form__title">
							Isi Formulir
						</h2>
						<form action="/kirim_kontak" class="contact-form" id="contact-form" method="post">
							@method('post')
							@csrf
							<div class="row">
								<div class="col-md-6">
									<input class="contact-form__input-text" type="text" name="name" id="name" placeholder="Username:" />
								</div>
								<div class="col-md-6">
									<input class="contact-form__input-text" type="text" name="email" id="mail" placeholder="Email:" />
								</div>
							</div>
							<textarea class="contact-form__textarea" name="alasan" id="comment" placeholder="Alasan:"></textarea>
							<button type="submit">kirim pesan</button>
						</form>
						<!-- End Contact form module -->

					</div>

					<div class="col-lg-6 offset-lg-1 col-md-4">

						<!-- contact-post-module -->
						<div class="col-lg-8">
							<div class="sidebar">
							<div class="sidebar__widget sidebar__widget-author">
									<h2 class="sidebar__widget-title">
						<div class="contact-post">
							<i class="la la-map-marker"></i>
							<div class="contact-post__content">
								<h2 class="contact-post__title">
									Lokasi:
								</h2>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9521455536947!2d112.60469731450998!3d-7.900068680795726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881c2c4637501%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1677661130053!5m2!1sid!2sid" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								<p class="contact-post__description">
									1000 5th Karangploso, Malang
								</p>
							</div>
						</div>
						<!-- End contact-post-module -->
						
						<!-- contact-post-module -->
						<div class="contact-post">
							<i class="la la-phone"></i>
							<div class="contact-post__content">
								<h2 class="contact-post__title">
									No. Telepon:
								</h2>
								<p class="contact-post__description">
									(123) 098 - 87 - 54 <br> (123) 074 - 43 - 54
								</p>
							</div>
						</div>
						
						<!-- End contact-post-module -->

						<!-- contact-post-module -->
						<div class="contact-post">
							<i class="la la-envelope"></i>
							<div class="contact-post__content">
								<h2 class="contact-post__title">
									Email:
								</h2>
								<p class="contact-post__description">
									ngu@gmail.com <br> support_nvrgveup@gmail.com
								</p>
							</div>
						</div>
						<!-- End contact-post-module -->

					</div>

				</div>

			</div>
		</section>
		<!-- End contact-page-block -->

		<!-- map block
			================================================== -->
		<!-- End map block -->


		<!-- footer block module
			================================================== -->
		<footer class="footer footer-black">
			<div class="container">

				<div class="footer__up-part">
					<div class="row">
						<div class="col-md-4">

							<div class="footer__widget text-widget">
								<img src="images/logo.png" alt="triptip-logo">
								<p class="footer__widget-description">
									Menggembangkan dunia baca tulis menggunakan website menuju dunia digital. Temukan berbagai artikel, postingan, cerita, jurnal dan buat postinganmu sendiri disini	
								</p>
							</div>

						</div>
						<div class="col-md-4">

							<div class="footer__widget subscribe-widget">
								<h2 class="footer__widget-title footer__widget-title-white">
									Alamat
								</h2>
								<p class="footer__widget-description">
									Jl. Pandawa No. 66, Dusun Mawar RT 001 RW 001 Desa Pandan
								</p>
								
							</div>

						</div>
						<div class="col-md-4">

							<div class="footer__widget text-widget">
								<h2 class="footer__widget-title footer__widget-title-white">
									Kontak 
								</h2>
								<p class="footer__widget-description">
									+62 898-1342-6657<br>
									info@example.com <br>
									YouTube: ngu_never122
								</p>
							</div>

						</div>
					</div>
				</div>

				<div class="footer__down-part footer__down-part-black">
					<div class="row">
						<div class="col-md-7">
							<p class="footer__copyright">
								© Copyright 2018 - All Rights Reserved
							</p>
						</div>
						<div class="col-md-5">
							<ul class="footer__social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.migrate.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI"></script>
	<script src="js/triptip-plugins.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/script.js"></script>
	
</body>

<!-- Mirrored from nunforest.com/triptip-demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:30 GMT -->
</html>