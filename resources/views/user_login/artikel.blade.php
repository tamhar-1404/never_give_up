<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
<head>
	<title>Artikel</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="css/triptip-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* body{
            padding-top: 5%;
			background-image: url();
        } */
		.card-text{
			text-align: center;
		}
		.card-text-judul{
			text-align: center;
			color: black;
		}
    </style>

</head>
<body><section class="services" style="padding: 80px;">
	<div class="container">

	<!-- Container -->
	<div id="container">
		<header class="clearfix dark-header-style fullwidth-with-search" >

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container">

					<a class="navbar-brand" style="width:13%;" href="/index04b9">
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

		<!-- add-listing
			================================================== -->
		<!-- <section class="add-listing">
			<div class="add-listing__title-box">
				<div class="container">
					<h1 class="add-listing__title">
						Add New Listing
					</h1>
				</div>
			</div> -->
			<div class="listing-detail__buttons listing-detail__buttons-icons ">
			<div style="margin-bottom: 2%; display: flex; justify-content: space-between " >
			<h1 >													
				Artikel	</h1>
				<form class="search-form"  >
					<div class="search-form__input-holders" style="width: 100% ;">
						<input class="search-form__input" type="text" name="search-event" placeholder="Cari Judul Postingan" >
							<a class="btn-default" href="#">
								<i class="fa fa-search" aria-hidden="true"></i>
							</a>
							</div>
						</form >
					</div>
				</div>
			<!-- form listing -->
			<div class="user-detail__favorites-box iso-call" data-item-showen="3" style="margin-bottom: 5%;">
				<div class="item">
		@foreach ($artikel as $item)
					<!-- place-post module  fotografi -->
					<div class="col-0">
						<div class="card" style="border-radius: 15px;">
						<div class="card-body">
							<div style=" display: flex; justify-content:space-between;">
								<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="asset/{{$item -> user -> foto}}" alt="">
								<a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

								<p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
								{{$item -> user -> username}}
							   </p>
							   <div >
								<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
							   </div>
							</div>
							<img style="border-radius: 10px;" src="asset/{{$item -> foto}}" class="card-img-top" alt="" srcset="">
							<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
							<p class="card-text-judul">{{$item-> judul}}</p>
							<center>
							<p class="" >{!!$item -> isi!!}</p>
							</center>
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/artikel-sukses" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
						</div>
						</div>
					</div>
					<!-- end place-post module fotografi-->
		@endforeach

			</div>	
			
		<br>
		<!-- <div style="display: flex; justify-content: center;">
			<nav aria-label="Page navigation example" >
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" style="color:rgb(236, 107, 128);" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
				  </li>
				  
				  <li  class="page-item"><a class="page-link" style="color:rgb(236, 107, 128);" href="#">1</a></li>
				  <li class="page-item"><a class="page-link" style="color:rgb(236, 107, 128);" href="#">2</a></li>
				  <li class="page-item"><a class="page-link" style="color:rgb(236, 107, 128);" href="#">3</a></li>
				  <li class="page-item">
					<a class="page-link" style="color:rgb(236, 107, 128);" href="#" aria-label="Next">
					  <span aria-hidden="true">&raquo;</span>
					</a>
				  </li>
				</ul>
			  </nav>
			</div> -->
		</section>
					
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
					<!-- <div class="add-listing__form-box" id="gallery-box">

						<h2 class="add-listing__form-title">
							Gallery:
						</h2>

						<div class="add-listing__form-content">
							<div class="add-listing__input-file-box">
								<input class="add-listing__input-file" type="file" name="file" id="file"/>
								<div class="add-listing__input-file-wrap">
									<i class="la la-cloud-upload"></i>
									<p>Click here to upload your images</p>
								</div>
							</div>							
						</div>

					</div> -->
					
					<!-- form box -->
					<!-- <div class="add-listing__form-box" id="social-box">

						<h2 class="add-listing__form-title">
							Social Networks:
						</h2>

						<div class="add-listing__form-content">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<label class="add-listing__label" for="facebook">
										Facebook <span>(optional)</span>:
									</label>
									<input class="add-listing__input" type="text" name="facebook" id="facebook" placeholder="Facebook URL" />
								</div>
								<div class="col-md-3 col-sm-6">
									<label class="add-listing__label" for="twitter">
										Twitter <span>(optional)</span>:
									</label>
									<input class="add-listing__input" type="text" name="twitter" id="twitter" placeholder="Twitter URL" />
								</div>
								<div class="col-md-3 col-sm-6">
									<label class="add-listing__label" for="youtube">
										YouTube <span>(optional)</span>:
									</label>
									<input class="add-listing__input" type="text" name="youtube" id="youtube" placeholder="YouTube URL" />
								</div>
								<div class="col-md-3 col-sm-6">
									<label class="add-listing__label" for="pinterest">
										Pinterest <span>(optional)</span>:
									</label>
									<input class="add-listing__input" type="text" name="pinterest" id="pinterest" placeholder="Pinterest URL" />
								</div>
							</div>
						</div>

					</div>

					<div class="center-button">
						<button class="add-listing__submit" type="submit">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
							Preview and Submit Listing
						</button>
					</div>

				</div>

			</form>
		</section> -->
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