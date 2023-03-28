<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/listing-detail-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:03:41 GMT -->
<head>
	<title>Triptip</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="{{asset('css/triptip-assets.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<style>
	.listing-detail__content-description{

	 style="display: flex;
  justify-content: center;
  align-items: center;
  height: 50vh;
  margin: 0 auto;
}
</style>
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
			<header class="clearfix dark-header-style fullwidth-with-search">

				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container">
	
						<a class="navbar-brand" style="width:13%;" href="/user-login">
							<img src="{{asset('/asset/logo 1.png')}}" style="width:100%;" alt="">
						</a>
	
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
	
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li>
									<a class="" href="/user-login">Beranda <i class="" aria-hidden="true"></i></a>
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
		<div class="add-listing__title-box">

<div class="listing-detail__buttons listing-detail__buttons-icons ">
<!-- <div style="margin-bottom: 2%; display: flex; justify-content: space-between " > -->
<center><h1 >													
		Hasil Pencarian 	</h1></center>
</div>
</div>
</div>
</div>
		<!-- listing-detail
			================================================== -->
        	<div class="user-detail__favorites-box iso-call" data-item-showen="3">
				
				@foreach ($posts as $item)
					<div class="item">

					<!-- place-post module  fotografi -->
					
					<div class="col-0">
						<div class="card" style="border-radius: 15px; margin:3%;">
						<div class="card-body">
							<div style=" display: flex; justify-content:space-between;">
								<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="foto/{{$item->User->foto}}" alt="">
								<a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

								<p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
								{{$item->user->username}}
							   </p>
							   <div >
								<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
							   </div>
							</div>
							<img style="border-radius: 10px; height:300px" src="asset/{{$item->foto}}" class="card-img-top" alt="" srcset="">
							<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
							<p class="card-text-judul">{{$item->judul}}</p>
							<p class="card-text mb-50" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{!!$item->isi!!}</p>
							@if ($item -> kategori -> id  == 1)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/cerpen-baik/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 2)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/artikel-sukses/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 3)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/pantun-1/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 4)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/puisi-pertiwi/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 5)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/fotografi-1/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 6)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/diary-1/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 7)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/makalah-detail/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 8)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/ilustrasi-1/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 9)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/skripsi-detail/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori -> id  == 10)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/essai-1/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@elseif ($item -> kategori == 11)
							<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="/ilmiah-detail/{{$item->id}}" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
							@endif

						</div>
						</div>
					</div>
					
					<!-- end place-post module fotografi-->

				</div>
				@endforeach
				
			</div>
		<!-- trending-places-block
			================================================== -->
		
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
									</h2><br>
									<p class="footer__widget-description">
										Jl. Pandawa No. 66, Dusun Mawar RT 001 RW 001 Desa Pandan
									</p>
									
								</div>
	
							</div>
							<div class="col-md-4">
	
								<div class="footer__widget text-widget">
									<h2 class="footer__widget-title footer__widget-title-white">
										Kontak Kami
									</h2><br>
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

<!-- Mirrored from nunforest.com/triptip-demo/listing-detail-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:03:50 GMT -->
</html>