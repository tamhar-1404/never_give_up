<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
<head>
	<title>Triptip</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
	
						<a class="navbar-brand" style="width:13%;" href="index">
							<img src="asset/Logo 1.png" style="width:100%;" alt="">
						</a>
	
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
	
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li>

									<a class="active" href="/user-login">Beranda <i class="" aria-hidden="true"></i></a>
								</li>
								<li ><a  href="#">Kategori <i class="fa fa-caret-down" aria-hidden="true"></i></a>
									<div class="megadropdown">
										<div class="dropdown-box">
											
											<ul class="dropdown-list">
												<li><a href="/artikel">artikel</a></li>
												<li><a href="/cerpen">cerpen</a></li>
												<li><a href="/puisi">puisi</a></li>
												<li><a href="/photography">fotografi</a></li>
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
								<li><a href="/contact">Hubungi Kami</a></li>	
							</ul>
							<a href="/user-login" class="add-list-btn btn-default">Kembali</a>	
					</div>
				</nav>
			</header>
		<!-- End Header -->

		<!-- add-listing
			================================================== -->
		<section class="add-listing">
			<div class="add-listing__title-box">
				<div class="container">
					<h1 class="add-listing__title">
Buat Postingan Baru					</h1>
				</div>
			</div>

			<!-- user scroll menu box -->
			<div class="user-detail__scroll-menu-box">
				<div class="container">
					<ul class="user-detail__scroll-menu navigate-section">
							<li>
							<a  href="#general-info">Postingan</a>
						</li>
						<!-- <li>
							<a href="#location-box">Location</a>
						</li> -->
						<!-- <li>
							<a href="#opening-box">Opening Hours</a>
						</li> -->
						<li>
							<a href="#gallery-box">Gambar</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- form listing -->
			<form class="add-listing__form">

				<div class="container">
					
					<!-- form box -->
					
					<!-- form box -->


					<!-- form box -->
					<div class="add-listing__form-box" id="general-info">

						<h2 class="add-listing__form-title">
						Postingan:
						</h2>

						<div class="add-listing__form-content">
							<div class="row">
								<div class="col-md-11">
									<label class="add-listing__label" for="list-title">
										Judul Postingan:
									</label>
									<input class="add-listing__input" type="text" name="list-title" id="list-title" placeholder="Judul" />
								</div>
								<!-- <div class="col-md-6">
									<label class="add-listing__label" for="category">
										Kategori:
									</label>
									<select class="add-listing__input js-example-basic-multiple" name="category" id="category">
										<option>Kategori: </option>
										<option>Artikel</option>
										<option>Cerpen</option>
										<option>puisi</option>
										<option>Fotography</option>
										<option>Makalah</option>
										<option>Skripsi</option>
										<option>Karya Ilmiah</option>
										<option>Diary</option>
										<option>Pantun</option>
										<option>Essai</option>
									</select>
								</div> -->
							</div>	
							
						
							<label class="add-listing__label" for="description">
								Isi Cerita Anda:
							</label>
							<textarea  style="resize:none;width: 950px;height:750px;" class="add-listing__textarea" name="description" id="description" placeholder="Tulis Cerita Anda ">
							
							</textarea>
							
						</div>

					</div>
					
					<!-- form box -->
					<!-- <div class="add-listing__form-box" id="location-box">

						<h2 class="add-listing__form-title">
							Your Location:
						</h2>

						<div class="add-listing__form-content">
							<div class="row">
								<div class="col-md-4">
									<label class="add-listing__label" for="country">
										Country:
									</label>
									<input class="add-listing__input" type="text" name="country" id="country" placeholder="Enter your country" />
								</div>
								<div class="col-md-4">
									<label class="add-listing__label" for="city">
										City:
									</label>
									<select class="add-listing__input js-example-basic-multiple" name="city" id="city">
										<option>Select City: </option>
										<option>London</option>
										<option>Liverpool</option>
										<option>Amsterdal</option>
										<option>Berlin</option>
										<option>Hamburg</option>
										<option>Viena</option>
										<option>Istanbul</option>
										<option>New Yourk</option>
										<option>Madrid</option>
									</select>
								</div>
								<div class="col-md-4">
									<label class="add-listing__label" for="address">
										Address:
									</label>
									<input class="add-listing__input" type="text" name="address" id="address" placeholder="Enter address" />
								</div>
							</div>
						</div>

					</div> -->
					
					<!-- form box -->
					<!-- <div class="add-listing__form-box" id="opening-box">

						<h2 class="add-listing__form-title">
							Opening Hours:
						</h2>

						<div class="add-listing__form-content">
							<div class="row">
								<div class="col-lg-1 col-md-2">
									<label class="add-listing__label with-padding-top" for="weekdays">
										Weekdays:
									</label>
								</div>
								<div class="col-lg-11 col-md-10">
									<div class="row">
										<div class="col-md-6">
											<select class="add-listing__input js-example-basic-multiple" name="weekdays" id="weekdays">
												<option>Opening time </option>
												<option>7:00 A.M</option>
												<option>8:00 A.M</option>
												<option>9:00 A.M</option>
												<option>10:00 A.M</option>
												<option>11:00 A.M</option>
												<option>12:00 A.M</option>
												<option>01:00 P.M</option>
												<option>02:00 P.M</option>
												<option>03:00 P.M</option>
												<option>04:00 P.M</option>
												<option>05:00 P.M</option>
												<option>06:00 P.M</option>
												<option>07:00 P.M</option>
												<option>08:00 P.M</option>
												<option>09:00 P.M</option>
												<option>10:00 P.M</option>
												<option>11:00 P.M</option>
												<option>00:00 A.M</option>
											</select>
										</div> -->
										<!-- <div class="col-md-6">
											<select class="add-listing__input js-example-basic-multiple">
												<option>Closing time </option>
												<option>7:00 A.M</option>
												<option>8:00 A.M</option>
												<option>9:00 A.M</option>
												<option>10:00 A.M</option>
												<option>11:00 A.M</option>
												<option>12:00 A.M</option>
												<option>01:00 P.M</option>
												<option>02:00 P.M</option>
												<option>03:00 P.M</option>
												<option>04:00 P.M</option>
												<option>05:00 P.M</option>
												<option>06:00 P.M</option>
												<option>07:00 P.M</option>
												<option>08:00 P.M</option>
												<option>09:00 P.M</option>
												<option>10:00 P.M</option>
												<option>11:00 P.M</option>
												<option>00:00 A.M</option>
											</select>
										</div> -->
									<!-- </div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1 col-md-2">
									<label class="add-listing__label with-padding-top" for="weekends">
										Weekends:
									</label>
								</div>
								<div class="col-lg-11 col-md-10">
									<div class="row">
										<div class="col-md-6">
											<select class="add-listing__input js-example-basic-multiple" name="weekends" id="weekends">
												<option>Opening time </option>
												<option>7:00 A.M</option>
												<option>8:00 A.M</option>
												<option>9:00 A.M</option>
												<option>10:00 A.M</option>
												<option>11:00 A.M</option>
												<option>12:00 A.M</option>
												<option>01:00 P.M</option>
												<option>02:00 P.M</option>
												<option>03:00 P.M</option>
												<option>04:00 P.M</option>
												<option>05:00 P.M</option>
												<option>06:00 P.M</option>
												<option>07:00 P.M</option>
												<option>08:00 P.M</option>
												<option>09:00 P.M</option>
												<option>10:00 P.M</option>
												<option>11:00 P.M</option>
												<option>00:00 A.M</option>
											</select>
										</div>
										<div class="col-md-6">
											<select class="add-listing__input js-example-basic-multiple">
												<option>Closing time </option>
												<option>7:00 A.M</option>
												<option>8:00 A.M</option>
												<option>9:00 A.M</option>
												<option>10:00 A.M</option>
												<option>11:00 A.M</option>
												<option>12:00 A.M</option>
												<option>01:00 P.M</option>
												<option>02:00 P.M</option>
												<option>03:00 P.M</option>
												<option>04:00 P.M</option>
												<option>05:00 P.M</option>
												<option>06:00 P.M</option>
												<option>07:00 P.M</option>
												<option>08:00 P.M</option>
												<option>09:00 P.M</option>
												<option>10:00 P.M</option>
												<option>11:00 P.M</option>
												<option>00:00 A.M</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div> -->
					
					<!-- form box -->
					<div class="add-listing__form-box" id="gallery-box">

						<h2 class="add-listing__form-title">
							Gambar:
						</h2>

						<div class="add-listing__form-content">
							<div class="add-listing__input-file-box">
								<input class="add-listing__input-file" type="file" name="file" id="file"/>
								<div class="add-listing__input-file-wrap">
									<i class="la la-cloud-upload"></i>
									<p>Ketuk Di Sini untuk Upload Gambar</p>
								</div>
							</div>							
						</div>

					</div>
					
					<!-- form box -->
					

					<div class="center-button" >
						<button class="add-listing__submit" type="submit" href="artikel.html">
							<a href="artikel.html"></a><i class="fa fa-paper-plane" aria-hidden="true"></i>
							Preview and Submit Listing
						</button></a>
					</div>

				</div>

			</form>
		</section>
		<!-- End add-listing -->

		<!-- footer block module
			================================================== -->
			<footer class="footer footer-black">
				<div class="container">
	
					<div class="footer__up-part">
						<div class="row">
							<div class="col-md-4">
	
								<div class="footer__widget text-widget">
								<a class="navbar-brand" style="width:60%;" href="index.html">
									<img src="asset/Logo 1.png" style="width:100%;" alt="">
								</a>
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

<!-- Mirrored from nunforest.com/triptip-demo/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
</html>
