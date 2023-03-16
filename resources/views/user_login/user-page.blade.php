<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/user-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
<head>
	<title>Triptip</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="css/triptip-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

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

		<!-- user-detail
			================================================== -->
		<section class="user-detail">
			<div class="user-detail__profile">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="user-detail__profile-box">
								<a class="user-detail__profile-image" href="#"><img style="width: 80px; height: 80px; border-radius: 100%;" src="asset/{{Auth()->User()->foto}}" alt=""></a>
								<div>
									<h3 class="user-detail__profile-title">
										<a href="prf.html">{{Auth()->user()->username}}</a>
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
									<span>12</span>
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
							<a class="#" href="#my-lists-box" data-offset="30">postingan</a>
						</li>
						
						<li>
							<a class="#" href="#my-proses-box" data-offset="30">menunggu</a>
						</li>
						
						<li>
							<a href="#favorites-box" data-offset="30">favorit</a>
						</li>

						<li>
							<a href="#komen-box" data-offset="30">komentar</a>
						</li>
						
					</ul>
				</div>
			</div>

			<!-- my lists box -->
			<div class="user-detail__mylist" id="my-lists-box">
				<div class="container">
					<h2 class="user-detail__subtitle">postingan   <span>(2)</span></h2>
					<div class="user-detail__mylist-box iso-call">
						@foreach ($postingan as $item)
						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="asset/{{$item->user->foto}}" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
											{{$item->user->username}}
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/{{$item -> foto}}" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class="">{{$item->status}}</p>
										<p class="">{{$item->judul}}</p>
										<p class="card-text">{!!$item -> isi!!}</p>
										<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/cerpen-baik" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>									</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,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" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
											Monica
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/baik.jpg" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class=""></p>BAIK LUAR DALAM
										
										<p class="card-text">Di suatu siang yang cerah, terdapat dua orang gadis bernama Lisa dan Yeni yang sedang mengerjakan tugas sekolah di rumahnya Lisa. Mereka berdua mengerjakan tugas...</p>
										<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/makalah-pkn" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>	
									</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,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" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
											Monica
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/baik.jpg" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class=""></p>BAIK LUAR DALAM
										
										<p class="card-text">Di suatu siang yang cerah, terdapat dua orang gadis bernama Lisa dan Yeni yang sedang mengerjakan tugas sekolah di rumahnya Lisa. Mereka berdua mengerjakan tugas...</p>
										<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/makalah-pkn" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>	
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="user-detail__mylist" id="my-proses-box">
				<div class="container">
					<h2 class="user-detail__subtitle">menunggu   <span>(2)</span></h2>
					<div class="user-detail__mylist-box iso-call">

						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,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" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/baik.jpg" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class=""></p>BAIK LUAR DALAM
										
										<p class="card-text">Di suatu siang yang cerah, terdapat dua orang gadis bernama Lisa dan Yeni yang sedang mengerjakan tugas sekolah di rumahnya Lisa. Mereka berdua mengerjakan tugas...</p>
										<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/cerpen-baik" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>									
									</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,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" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
											Monica
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/baik.jpg" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class=""></p>BAIK LUAR DALAM
										
										<p class="card-text">Di suatu siang yang cerah, terdapat dua orang gadis bernama Lisa dan Yeni yang sedang mengerjakan tugas sekolah di rumahnya Lisa. Mereka berdua mengerjakan tugas...</p>
										<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/makalah-pkn" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>	
									</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row col-lg-12 "  >
								<div class="col">
									<div class="card" style="border-radius: 15px;">
									<div class="card-body">
										<div style=" display: flex; justify-content:space-between;">
											<img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,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" alt="">
										   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
											Monica
										   </p>
										   <div >
											<ion-icon style="font-size: 30px;" name="ellipsis-vertical-outline"></ion-icon>
										   </div>
										</div>
										<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/baik.jpg" class="card-img-top" alt="" srcset="">
										<ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
										<p class=""></p>BAIK LUAR DALAM
										
										<p class="card-text">Di suatu siang yang cerah, terdapat dua orang gadis bernama Lisa dan Yeni yang sedang mengerjakan tugas sekolah di rumahnya Lisa. Mereka berdua mengerjakan tugas...</p>
										<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/makalah-pkn" style="margin-right: 20px; margin-bottom: 10px; ">
												<i class="fa fa-caret-right" aria-hidden="true"></i>
												Lihat
											</a>
										</div>	
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- my lists box -->
			<div class="user-detail__favorites" id="favorites-box">
				<div class="container">
					<h2 class="user-detail__subtitle">favorit <span>(7)</span></h2>
					<div class="user-detail__favorites-box iso-call" data-item-showen="3">
						<div class="item">

							<!-- place-post module  fotografi -->
							<div class="place-post">
								<div class="place-post__gal-box">
									<img style="border-radius: 10px; max-width: 750px; max-height: 200px;" src="asset/baik.jpg" class="place-post__image" src="upload/g2.jpg" alt="place-image">
									<!-- <span class="place-post__rating">9.3</span> -->
									<a class="place-post__like active" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
								</div>
								<div class="place-post__content">
								<h2 class="place-post__title">
										<a href="#">Baik Luar Dalam</a>
									</h2>
									<p class="place-post__description">
										Fotografi<span class="place-post__description-review">
											<i class="fa fa-comment-o" aria-hidden="true"></i>
											54 Reviews
										</span>
									</p>
									<div style="width: 100%; display: flex; justify-content: center;  " >
											<a class="contact-form__submit" href="/cerpen-baik" style="margin-right: 20px; margin-bottom: 10px; ">
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
			
			<div class="listing-detail__content">
				<div class="container">
					<div class="row">
						<div class="col-lg">
							<div class="listing-detail__content-box">
								<h2>Komentar</h2>
								<ul class="reviews-list">

									<li class="reviews-list__item">
										<div class="reviews-list__item-box">
											<img class="reviews-list__item-image" src="upload/avatar2.jpg" alt="">
											<div class="reviews-list__item-content">
												<h3 class="reviews-list__item-title">
													Nama pengguna
													</h3>
												<span class="reviews-list__item-location">
													kategori
												</span>
												<p class="reviews-list__item-date">
													Posted October 7, 2018
													<span class="reviews-list__item-rating">8.0</span>
												</p>
												<h3 class="reviews-list__item-title">
													judul artikel
												</h3>
												<p class="reviews-list__item-description">
													isi komentar
												</p>
												<a class="reviews-list__item-helpful" href="#">
													<i class="la la-thumbs-o-up"></i>
													Helpfull review
													<span>8</span>
												</a>
												<a class="reviews-list__item-reply" href="#">
													<i class="la la-mail-forward"></i>
													Reply
												</a>
											</div>	
										</div>
									</li>

									<ul class="reviews-list">

										<li class="reviews-list__item">
											<div class="reviews-list__item-box">
												<img class="reviews-list__item-image" src="upload/avatar2.jpg" alt="">
												<div class="reviews-list__item-content">
													<h3 class="reviews-list__item-title">
														Philip W
														</h3>
													<span class="reviews-list__item-location">
														Ormskirk, United Kingdom
													</span>
													<p class="reviews-list__item-date">
														Posted October 7, 2018
														<span class="reviews-list__item-rating">8.0</span>
													</p>
													<h3 class="reviews-list__item-title">
														Good Service but..
													</h3>
													<p class="reviews-list__item-description">
														Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
													</p>
													<a class="reviews-list__item-helpful" href="#">
														<i class="la la-thumbs-o-up"></i>
														Helpfull review
														<span>8</span>
													</a>
													<a class="reviews-list__item-reply" href="#">
														<i class="la la-mail-forward"></i>
														Reply
													</a>
												</div>	
											</div>
										</li>

										
									</ul>
									
								</ul>

							</div>
						</div>
						
					</div>
				</div>
			</div>

		

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

<!-- Mirrored from nunforest.com/triptip-demo/user-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:30 GMT -->
</html>