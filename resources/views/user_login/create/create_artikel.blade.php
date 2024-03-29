<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
<head>
	<title>create artikel</title>

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
		<header class="clearfix white-header-style fullwidth-with-search">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<a class="navbar-brand" href="index04b9.html">
						<img src="images/logo-black.png" alt="">
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
							<li><a href="/kontak">Kontak US</a></li>
						</ul>
						<a href="pilihkategori.html" class="add-list-btn btn-default"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg> </a>
						<!-- <form class="search-form">
							<div class="search-form__input-holders">
								<input class="search-form__input" type="text" name="search-event" placeholder="What are you looking for?" />
								<select class="search-form__input search-form__input-location js-example-basic-multiple">
									<option>Location? </option>
									<option>New York</option>
									<option>California</option>
									<option>Washington</option>
									<option>New Jersey</option>
									<option>Miami</option>
									<option>San Francisco</option>
									<option>Boston</option>
									<option>Pensilvania</option>
									<option>Other</option>
								</select>
							</div>
								
							<button class="search-form__submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form> -->
						<!-- <ul class="navbar-nav ml-auto right-list">
							<li><a href="sign-page.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Sign In</a></li>
							<li><a href="sign-page.html"><i class="fa fa-user-o" aria-hidden="true"></i> Register</a></li>
						</ul>
						<a href="add-listing.html" class="add-list-btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> -->
					</div>
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
							<a class="active" href="#tentang-penulis">Penulis</a>
						</li>
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
						<li>
							<a href="#social-box">Media Sosial</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- form listing -->
			<form action="{{('/simpan_artikel')}}" class="add-listing__form" method="post" enctype="multipart/form-data">
            @csrf 
				<div class="container">
					
					<!-- form box -->
					<div class="add-listing__form-box" id="tentang-penulis">

						<h2 class="add-listing__form-title">
						Posting:
						</h2>

						@foreach ($user as $item)
						<input type="hidden" name="default" value="{{$item->id}}"> 
						@endforeach

					</div>
					
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
									<input class="add-listing__input" type="text" name="judul" id="list-title" placeholder="Judul" />
								</div>
								<!-- <div class="col-md-6">
									<label class="add-listing__label" for="category">
										Kategori:
									</label>
									<select class="add-listing__input js-example-basic-multiple" name="category" id="category">
										<option>Kategori: </option>
										<option>Artikel</option>
										<option>artikel</option>
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
							<textarea  style="resize:none;width: 950px;height:750px;" class="add-listing__textarea" name="isi" id="description" placeholder="Tulis Cerita Anda "></textarea>
						</div>

					</div>
					
					<!-- form box -->
					<div class="add-listing__form-box" id="location-box">

						<h2 class="add-listing__form-title">
							Your Location:
						</h2>

						<div class="add-listing__form-content">
							<div class="row">
								<div class="col-md-12">
									<label class="add-listing__label" for="city">
										Kategori:
									</label>
									<select class="add-listing__input js-example-basic-multiple" name="kategori" id="city">
										@foreach ($kategori as $items)
										<option value="{{$items->id}}">{{$items->kategori}} </option>
										@endforeach
									</select>
								</div>
								
							</div>
						</div>

					</div>
					
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
							Gambar artikel:
						</h2>
						<div class="add-listing__form-content">
							<div class="add-listing__input-file-box">
								<input class="add-listing__input-file" type="file" name="foto" id="file" multiple />
								<div class="add-listing__input-file-wrap">
									<i class="la la-cloud-upload"></i>  
								</div>
							</div>							
						</div>
                       
					</div>
					
					<!-- form box -->
					<div class="center-button" >
						<button class="add-listing__submit" type="submit" >
							<a></a><i class="fa fa-paper-plane" aria-hidden="true"></i>
							Posting
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
								<img src="images/logo.png" alt="triptip-logo">
								<p class="footer__widget-description">
									Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. 
								</p>
							</div>

						</div>
						<div class="col-md-4">

							<div class="footer__widget subscribe-widget">
								<h2 class="footer__widget-title footer__widget-title-white">
									Subscribe
								</h2>
								<p class="footer__widget-description">
									Be notified about new locations
								</p>
								<form class="footer__subscribe-form">
									<input class="footer__subscribe-input" type="text" name="email-sub" id="email-sub" placeholder="Enter your Email" />
									<button class="footer__subscribe-button footer__subscribe-button-primary" type="submit">
										<i class="la la-arrow-circle-o-right" aria-hidden="true"></i>
									</button>
								</form>
							</div>

						</div>
						<div class="col-md-4">

							<div class="footer__widget text-widget">
								<h2 class="footer__widget-title footer__widget-title-white">
									Contact Info 
								</h2>
								<p class="footer__widget-description">
									1000 5th Ave to Central Park, New York <br>
									+1 246-345-0695 <br>
									info@example.com
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
