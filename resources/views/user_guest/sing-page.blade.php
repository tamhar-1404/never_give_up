<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/triptip-demo/sign-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
<head>
	<title>Triptip</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="css/triptip-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body >

	<!-- Container -->
	<div id="container" >
		<!-- Header
		    ================================================== -->
			<header class="clearfix white-header-style">

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container">
	
						<a class="navbar-brand" href="home4.html">
							<img src="images/logo-black.png" alt="">
						</a>
	
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
	
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li>
									<a class="active" href="index04b9.html">Home <i class="" aria-hidden="true"></i></a>
								</li>
								<li ><a  href="#">kategori <i class="fa fa-caret-down" aria-hidden="true"></i></a>
									<div class="megadropdown">
										<div class="dropdown-box">
											
											<ul class="dropdown-list">
												<li><a href="artikel.html">artikel</a></li>
												<li><a href="cerpen.html">cerpen</a></li>
												<li><a href="puisi.html">puisi</a></li>
												<li><a href="fotografi.html">fotografi</a></li>
												<li><a href="pantun.html">pantun</a></li>
												<li><a href="esai.html">esai</a></li>
											</ul>
										</div>
										<div class="dropdown-box">
											<ul class="dropdown-list">
												<li><a href="diary.html">diary</a></li>
												<li><a href="ilustrasi.html">ilustrasi</a></li>
												<li><a href="makalah.html">makalah</a></li>
												<li><a href="skripsi.html">skripsi</a></li>
												<li><a href="ilmiah.html">karya ilmiah</a></li>
											</ul>
										</div>
										
									</div>
								</li>
								
							</ul>
							<ul class="navbar-nav ml-auto right-list">
								<li><a href="sign-page.html"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Sign In</a></li>
								
							</ul>
							
						</div>
					</div>
				</nav>
			</header>
			<!-- End Header -->

		<!-- sign-block
			================================================== -->
		<section class="sign" style="background-image: url('upload/slide1.jpg'); background-attachment:fixed ; background-size: cover; background-position: start; background-repeat: no-repeat;" >
			<div class="sign__area" style="background-color: #d7dae0;">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a style="color:black;" class="nav-item nav-link active" id="nav-sign-tab" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="true">Login</a>
						
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">

						<!-- sign-form-module -->
						<form method="POST" action="{{ route('user_login') }}" class="sign-form" >
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-danger">
                                    {{ session('message') }}
                                </div>
                            @endif
							<label class="sign-form__label" for="username">
                                Email
							</label>
							<input class="sign-form__input-text" type="text" name="email" :value="old('email')" required autofocus id="email" placeholder="Email " />
							<label class="sign-form__label" for="password">
								password
							</label>
							<input class="sign-form__input-text" type="password"  name="password" required id="password" placeholder="Password" />

							<button  class="sign-form__submit" id="submit-loggin" type="submit">
								<a href=""></a><i class="fa fa-sign-in" aria-hidden="true"></i>
								Login</a>
							</button>
							
						</form>

						<!-- End sign-form-module -->

					</div>
					
				</div>
			</div>
		
		</section>
		<!-- End sign-block -->

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

<!-- Mirrored from nunforest.com/triptip-demo/sign-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
</html>