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

		<!-- listing-detail
			================================================== -->
		<section class="listing-detail">
			<div class="listing-detail__gal">
				<ul class="listing-detail__fullwidth-gal">
					<li>
						<img src="upload/g7.jpg" alt="">
					</li>
					<li>
						<img src="upload/g8.jpg" alt="">
					</li>
					<li>
						<img src="upload/g9.jpg" alt="">
					</li>
					<li>
						<img src="upload/g10.jpg" alt="">
					</li>
					<li>
						<img src="upload/g11.jpg" alt="">
					</li>
				</ul>
			</div>
			<div class="container">
			<div class="listing-detail__gal">
				<div class="listing-detail__title-box">
					<div class="container">
						<div class="row">
							<div class="col-sm-9">
							<h2 class="listing-detail__content-title">

								<h1 class="listing-detail__title listing-detail__title-black">
								{{$pantun->judul}}
									<!-- <span cla	ss="listing-detail__rate">9.3 <span>/ 10</span></span> -->
								</h1>
								</div>
								<div style="display: flex; justify-content: space-between;">
								<ul class="single-post__list">
					<li class="single-post__list-item">
						<i class="la la-calendar-check-o"></i>
						<span>{{$pantun->created_at}}</span>
					</li>
					<li class="single-post__list-item">
						<i class="la la-comments"></i>
						<a href="#leave-review">komentar</a>
					</li>
					<li class="single-post__list-item">
						<i class="fa fa-heart-o" aria-hidden="true"></i>
							suka
					</li>
				</ul>
			</div>
			</div>
			</div>
			</div>


			<div class="listing-detail__content">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="blog-page__box">

								<div class="listing-detail_content-box listing-detail_content-box-nopadding">

									<!-- overview box -->
									<div class="single-post">

									<img class="single-post__image" src="{{asset('asset/' . $pantun->foto)}}" alt="">

									</div>
									<!-- overview box -->
									<div class="listing-detail__overview" id="overview-box">
										<!-- <h2 class="listing-detail__content-title">Overview</h2> -->
										<div style="text-align: center; text-color: blck;">
											<!-- <h2>Ibu Pertiwi</h2> -->
											
											<p></p>{!!$pantun->isi!!}
											
										</div>
										
									</div>

									<!-- Contact form module -->
									<form action="/komentar/{{$pantun->id}}" method="POST" enctype="multipart/form-data" class="contact-form inner-review" id="leave-review">
										@csrf
										<div class="inner-review__form">
											<div class="inner-review__form-box">
												<textarea class="contact-form__textarea" name="komentar" id="komentar" placeholder="Silahkan tinggalkan komentar"></textarea>
												<!-- <a href="{{url('cerpenbaik')}}" class="contact-form__submit" type="submit" name="submit-contact" id="submit_contact" value="Kirim" > -->
												<button  class="contact-form__submit" type="submit" id="submit" name="submit-contact" >Kirim</button>
												</a>
											</div>
										</div>
									</form>
									<!-- End Contact form module -->

									<!-- tips & reviews-box -->
									<div class="listing-detail__reviews" id="tips-reviews-box">
										<h2 class="listing-detail__content-title">
											komentar 
										</h2>
										<div class="listing-detail__reviews-box">
											<!-- reviews list -->
											<ul class="reviews-list">
												@foreach($komen as $item)
												<li class="reviews-list__item">
													<div class="reviews-list__item-box">
														<img class="reviews-list__item-image" src="{{asset('foto/' .  	$item->user->foto)}}" alt="">
														<div class="reviews-list__item-content">
															<h3 class="reviews-list__item-title">
																{{$item->user->username}}
															</h3>
															<span class="reviews-list__item-location">
																</span>
																<p class="reviews-list__item-date">
																Posting {{$item->created_at->diffForHumans()}}
																</p>
																<p class="reviews-list__item-description">
																{{$item->komentar}}
															</p>
															
														</div>	
													</div>
												</li>
												@endforeach
											<!-- reviews-list -->
										</div>
									</div>

									<!-- gallery-box -->
									

								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<!-- sidebar -->
						<div class="sidebar">

								
								<div class="sidebar_widget sidebar_widget-listing-details">
									<h2 class="sidebar__widget-title">
										Detail
									</h2>
									<ul class="sidebar__listing-list">
										<li>
											<i class="la la-map-marker"></i>
											{{$pantun->user->askot}}
										</li>
										<li>
											<i class="la la-mobile-phone"></i>
											0{{$pantun->user->notlp}}
										</li>
										<li>
											<i class="la la-link"></i>
											{{$pantun->user->email}}
										</li>
										<!-- <li>
											<i class="la la-clock-o"></i>
											<span class="color-close">Closed until Noon</span>
											<div>
												<p>
													Mon–Thu, Sun <span class="right-align">Noon–Midnight</span>
												</p>
												<p>
													Fri–Sat <span class="right-align">Noon–1:00 AM</span>
												</p>
											</div>
										</li> -->
									</ul>
								</div>

								<div class="sidebar_widget sidebar_widget-author">
									<h2 class="sidebar__widget-title">
										Pembuat
									</h2>
									
									<!-- Author-wrapper module -->
									<div class="author-wrapper">
										<div class="author-wrapper__profile">
											<div class="row">
												<div class="col-7">
													<div class="author-wrapper__content">
														<a class="author-wrapper__image" href=""><img src="{{asset('foto/' .  	$pantun->user->foto)}}" alt=""></a>
														<h3 class="author-wrapper__title">
															<a href="">{{$pantun->user->username}}</a>
															<span class="author-wrapper__location">
															{{$pantun->user->medsos}}
															</span>
														</h3>
													</div>
												</div>
												<!-- <div class="col-5">
													<a class="author-wrapper__btn follow-btn" href="#">
														<i class="la la-eye"></i>
														Follow
													</a>
												</div> -->
											</div>
										</div>
								
									</div>
									<!-- End Author-wrapper module-->
								</div>

								<div class="sidebar_widget sidebar_widget-tags">
									<h2 class="sidebar__widget-title">
										Kategori
									</h2>
									<ul class="sidebar__tags-list">
										<li><a href="/artikel">Artikel</a></li>
										<li><a href="/cerpen">Cerpen</a></li>
										<li><a href="/puisi">Puisi</a></li>
										<li><a href="/diary">Diary</a></li>
										<li><a href="/photography">Fotografi</a></li>
										<li><a href="/ilustrasi">Ilustrasi</a></li>
										<li><a href="/makalah">Makalah</a></li>
										<li><a href="/skripsi">Skripsi</a></li>
										<li><a href="/pantun">Pantun</a></li>
										<li><a href="/essai">Esai</a></li>
										<li><a href="/ilmiah">Karya Ilmiah</a></li>
									</ul>
								</div>

								
							</div>
						<!-- End sidebar -->
						</div>
					</div>
				</div>
			</div>

			
		</section>
		<!-- End listing-detail -->

		<!-- trending-places-block
			================================================== -->
	
		<!-- End trending-places-block -->

		<!-- listing-detail
			================================================== -->
		<section class="listing-detail">

			<div class="listing-detail__content">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="listing-detail__content-box">

								
								<!-- tips & reviews-box -->
								
						</div>
						
					</div>
				</div>
			</div>
			
		</section>
		<!-- End listing-detail -->

		<!-- footer block module
			================================================== -->
			<footer class="footer footer-black">
				<div class="container">
	
					<div class="footer__up-part">
						<div class="row">
							<div class="col-md-4">
	
								<div class="footer__widget text-widget">
								<a class="navbar-brand" style="width:60%;" href="/user-login">
									<img src="{{asset('/asset/logo 1.png')}}" style="width:100%;" alt="">
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
	
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/jquery.migrate.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI"></script>
	<script src="{{asset('js/triptip-plugins.min.js')}}"></script>
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.countTo.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
	
</body>

<!-- Mirrored from nunforest.com/triptip-demo/listing-detail-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:03:50 GMT -->
</html>