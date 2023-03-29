<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
<head>
	<title>buat postingan</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="../css/triptip-assets.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- Summernote css -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css" />
	<!--bootstrap-wysihtml5-->
	<link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css">

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
                        Buat Postingan {{$kategori -> kategori}}				
					</h1>
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
			<form action="{{('/posting')}}" class="add-listing__form" method="post" enctype="multipart/form-data">
			
					@csrf 
					
				
				<div class="container">
					
					<!-- form box -->
					<div class="add-listing__form-box" id="tentang-penulis">

						@foreach ($user as $item)
						<input type="hidden" name="default" value="{{$item->id}}"> 
						@endforeach
						<input type="hidden" name="kategori" value="{{$kirim_kategori}}">
						
						

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
								
							</div>	
							
						
							<label class="add-listing__label" for="description">
								Isi Cerita Anda:
						
							</label>
							<textarea name="isi" id="summernote" cols="30" rows="10"></textarea>	
							<!-- <textarea  style="resize:none;width: 950px;height:750px;" class="add-listing__textarea" name="isi" id="description" placeholder="Tulis Cerita Anda "></textarea> -->
						</div>

					</div>
					@if (!in_array($kirim_kategori,[3]))
					
					<!-- form box -->
					<div class="add-listing__form-box" id="gallery-box">

                        <h2 class="add-listing__form-title">
							Gambar @if(in_array($kirim_kategori, [5,7,9,10,11,12]))
							sampul postingan
							@else
							{{$kategori -> kategori}}:
							@endif
						</h2>
						<div class="add-listing__form-content">
							<div class="add-listing__input-file-box">
								<input class="add-listing__input-file @error('foto') is-invalid @enderror" type="file" name="foto" id="file" multiple  />
								<div class="add-listing__input-file-wrap">
									<i class="la la-cloud-upload"></i>  
								</div>
							</div>							
						</div>
                       
					</div>
					@endif
					@if (in_array($kirim_kategori, [5,7,9,10,11]))
					<div class="add-listing__form-box" >

                        <h2 class="add-listing__form-title">
							Gambar
							 @if (in_array($kirim_kategori, [7,9,10,11]))
								foto lainya
							 @else
							 {{$kategori -> kategori}}
							@endif
							:	
						</h2>
						<div class="add-listing__form-content">
							<div class="add-listing__input-file-box">
								<input class="add-listing__input-file @error('foto') is-invalid @enderror" type="file" name="filename[]" id="filename" value="{{old('filename[]')}}"  multiple  />
								<div class="add-listing__input-file-wrap">
									<i class="la la-cloud-upload"></i>  
								</div>
							</div>							
						</div>
                       
					</div>
					
					@endif
					@if (in_array($kirim_kategori, [7,9,10,11]))
					<div class="add-listing__form-box" >

                        <h2 class="add-listing__form-title">
							File {{$kategori -> kategori}}:
						</h2>
						<div class="add-listing__form-content">
							<div class="add-listing__input-file-box">
								<input class="add-listing__input-file @error('foto') is-invalid @enderror" type="file" name="pdf" id="file" multiple  />
								<div class="add-listing__input-file-wrap">
									<i class="la la-cloud-upload"></i>  
								</div>
							</div>							
						</div>
                       
					</div>
					@endif
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
								<a class="navbar-brand" style="width:60%;" href="index.html">
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
	
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.migrate.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI"></script>
	<script src="../js/triptip-plugins.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.countTo.js"></script>
	<script src="../js/script.js"></script>
	 <!--Summernote js-->
	 <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
      $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100
      });
    </script>
	
	
	
</body>

<!-- Mirrored from nunforest.com/triptip-demo/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
</html>
