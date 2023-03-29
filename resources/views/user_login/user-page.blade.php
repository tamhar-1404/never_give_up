<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/user-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
<head>
	<title>Triptip</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="{{asset('css/triptip-assets.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<style>
.btnn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 12px;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
 
  
}
.btnn:hover, .btn:focus {
  color: #e98b8b;
  outline: 0;
}
.third {
  border-color: #db3458;
  color: #e98b8b;
  box-shadow: 0 0 40px 40px #db3458 inset, 0 0 0 0 #db3458;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #db3458 inset, 0 0 10px 4px #db3458;
}

</style>
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

		<!-- user-detail
			================================================== -->
		<section class="user-detail">
			<div class="user-detail__profile">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="user-detail__profile-box">
								<a class="user-detail__profile-image" href="#"><img style="width: 80px; height: 80px; border-radius: 100%;" src="foto/{{Auth()->User()->foto}}" alt=""></a>
								<div>
									<h3 class="user-detail__profile-title">
										<a href=/prf>{{Auth()->user()->username}}</a>
									</h3>
									<a href="/prf" style="color: #db3458; margin-top: 10px;">Edit Profil</a>
								</div>
								
									<p></p>
									<br>
									
								
							</div>
							</div>
						<div class="col-lg-7">
							
							<ul class="user-detail__profile-list">
								<li>
									<span>42</span>
									like
								</li>
								<li>
									<span>{{$setuju}}</span>
									postingan
								</li>
							
							
								
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- user scroll menu box -->
			<div class="user-detail__scroll-menu-box">
				<div class="container">
					<ul class="user-detail__scroll-menu navigate-section">
						<li>
							<a class="#" href="#my-lists-box" data-offset="30">menunggu</a>
						</li>
						
						<li>
							<a class="#" href="#my-proses-box" data-offset="30">postingan</a>
						</li>
						
						<li>
							<a href="#favorites-box" data-offset="30">favorit</a>
						</li>

					
						
					</ul>
				</div>
			</div>

			<!-- my lists box -->
			<div class="user-detail__mylist" id="my-lists-box">
				<div class="container">
					<h2 class="user-detail__subtitle">menunggu   <span>({{$pandding}})</span></h2>
					<div class="user-detail__mylist-box iso-call">
					@foreach($pendingPosts as $item)
						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;  margin:3%;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="foto/{{$item->user->foto}}" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
											{{$item->user->username}}
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/{{$item -> foto}}" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class="" >{{$item -> kategori -> kategori}} | {{$item->status}}</p>

										<center><p class=""></p>{{$item->judul}}</center>
										<p class="card-text mb-50" style="overflow: hidden; text-overflow: ellipsis; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; ">{{strip_tags($item->
											)}}</p>										<div style="width: 100%; display: flex; justify-content: center;  " >
										<div style="width: 100%; display: flex; justify-content: center;  " >
								<a class="contact-form__submit" href="" style="margin-right: 20px; margin-bottom: 10px; ">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Baca
								</a>
							</div>
										<!-- @if ($item -> kategori -> id  == 1)
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
							@endif -->

										</div>									</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					
					</div>
				</div>
			</div>

			<div class="user-detail__mylist" id="my-proses-box">
				<div class="container">
					<h2 class="user-detail__subtitle">postingan   <span>({{$setuju}})</span></h2>
					<div class="user-detail__mylist-box iso-call">
					@foreach($approvedPosts as $item)
						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;  margin:3%;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="foto/{{$item->user->foto}}" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
											{{$item->user->username}}
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/{{$item -> foto}}" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class="" >{{$item -> kategori -> kategori}} | {{$item->status}}</p>
										
										<center><p class=""></p>{{$item->judul}}</center>
										<p class="card-text mb-50" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; ">{!!$item->isi!!}</p>										<div style="width: 100%; display: flex; justify-content: center;  " >
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

										</div>									</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					
					</div>
				</div>
			</div>

			<!-- my lists box -->
			<div class="user-detail__favorites" id="favorites-box">
				<div class="container">
					<h2 class="user-detail__subtitle">favorit <span>(7)</span></h2>
					<div class="user-detail__favorites-box iso-call" data-item-showen="3">
					
					




						<div class="item">
							
							<!-- place-post module -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/baik.jpg" class="place-post__image" src="upload/g2.jpg" alt="place-image">
									<!-- <span class="place-post__rating">9.3</span> -->
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
								<h2 class="place-post__title">
										<a href="#">My Diary</a>
									</h2>
									<p class="place-post__description">
										Fotografi<span class="place-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											54 Reviews
										</span>
									</p>
									<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/makalah-pkn" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>	

									</div>
							</div>
							<!-- end place-post module -->

						</div>


						<div class="item">
							
							<!-- place-post module -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/diaryb.jpg" class="place-post__image" src="upload/g2.jpg" alt="place-image">
									<!-- <span class="place-post__rating">9.3</span> -->
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
								<h2 class="place-post__title">
										<a href="#">My Diary</a>
									</h2>
									<p class="place-post__description">
										Fotografi<span class="place-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											54 Reviews
										</span>
									</p>
									<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/makalah-pkn" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>	

									</div>
							</div>
							<!-- end place-post module -->

						</div>

						<div class="item">

							<!-- place-post module -->
							<!-- place-post module  fotografi -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img style="border-radius: 10px;" src="asset/sukses2.jpg" class="place-post__image" src="upload/g2.jpg" alt="place-image">
									<!-- <span class="place-post__rating">9.3</span> -->
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
								<h2 class="place-post__title">
										<a href="#">Beberapa Hal Yang Perlu Diterapkan Agar Sukses</a>
									</h2>
									<p class="place-post__description">
										Fotografi<span class="place-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											54 Reviews
										</span>
									</p>
									<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/makalah-pkn" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>	

									</div>
							</div>
							<!-- end place-post module fotografi-->
							<!-- end place-post module -->

						</div>

						<div class="item">
							
							<!-- place-post module -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img class="place-post__image" src="upload/1.jpg" alt="place-image">
								
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
								
									<h2 class="place-post__title">
										<a href="#">judul</a>
									</h2>
									<p class="place-post__description">
										kategori
										
										<span class="place-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											54 komentar
										</span>
									</p>
									
								</div>
							</div>
							<!-- end place-post module -->

						</div>
					
						<div class="item">

						<!-- place-post module -->
						<div class="place-post">
							<div class="place-post__gal-box">
								<img class="place-post__image" src="upload/1.jpg" alt="place-image">
							
								<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
							</div>
							<div class="place-post__content">
							
								<h2 class="place-post__title">
									<a href="#">judul</a>
								</h2>
								<p class="place-post__description">
									kategori
									
									<span class="place-post__description-review">
										<i class="fa fa-comment-o" aria-hidden="true"></i>
										54 komentar
									</span>
								</p>
								
							</div>
						</div>
						<!-- end place-post module -->	

						</div>
					
						

					</div>
					<div class="center-button">
						<a  href="#" 
							class="text-btn load-others"
							data-less-text="Show Less Favorites"
							data-more-text="Show More Favorites"
							data-parent-class="user-detail__favorites-box">
							<i class="la la-angle-down"></i>
							<span>Show More Favorites</span>
						</a>
					</div>
				</div>
			</div>

			<div class="user-detail__favorites" id="komen-box">
			</div>
			
			<!-- <h2 class="user-detail__subtitle">Komentar </h2> -->
			
			

		

		</section>
		<!-- End user-detail -->

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
										Menggembangkan dunia Lihat tulis menggunakan website menuju dunia digital. Temukan berbagai artikel, postingan, cerita, jurnal dan buat postinganmu sendiri disini	
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

<!-- Mirrored from nunforest.com/triptip-demo/user-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:30 GMT -->
</html>