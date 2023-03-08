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
    <style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
.body{
	padding:3px;
}
    </style>
</head>
<body >

	<!-- Container -->
	<div id="container" >
		<!-- Header
		    ================================================== -->
			<header class="clearfix ">

				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container">
	
						<a class="navbar-brand" href="/">
							<img src="images/logo.png" alt="">
						</a>
	
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
	
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li>
									<a class="" href="/">Home <i class="" aria-hidden="true"></i></a>
								</li>
								<li ><a  href="#">kategori <i class="fa fa-caret-down" aria-hidden="true"></i></a>
									<div class="megadropdown">
										<div class="dropdown-box">
											
											<ul class="dropdown-list">
												<li><a href="/artikel">artikel</a></li>
												<li><a href="/cerpen">cerpen</a></li>
												<li><a href="/puisi">puisi</a></li>
												<li><a href="/fotografi">fotografi</a></li>
												<li><a href="/pantun">pantun</a></li>
												<li><a href="/esai">esai</a></li>
											</ul>
										</div>
										<div class="dropdown-box">
											<ul class="dropdown-list">
												<li><a href="/diary">diary</a></li>
												<li><a href="/ilustrasi">ilustrasi</a></li>
												<li><a href="/makalah">makalah</a></li>
												<li><a href="/skripsi">skripsi</a></li>
												<li><a href="/ilmiah">karya ilmiah</a></li>
											</ul>
										</div>
										
									</div>
								</li>
								
							</ul>
							<ul class="navbar-nav ml-auto right-list">
								<li><a href="/sing-page"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Sign In</a></li>
								
							</ul>
							
						</div>
					</div>
				</nav>
			</header>
			<!-- End Header -->

		<!-- sign-block
			================================================== -->
		<!-- <section class="sign" style="background-image: url('upload/slide1.jpg'); background-attachment:fixed ; background-size: cover; background-position: start; background-repeat: no-repeat;" >
			<div class="sign__area" style="background-color: #d7dae0;">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a style="color:black;" class="nav-item nav-link active" id="nav-sign-tab" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="true">Login</a>
						
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab"> -->

						<!-- sign-form-module -->
						<!-- <form method="POST" action="{{ route('user_login') }}" class="sign-form" >
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
							
						</form> -->

						<!-- End sign-form-module -->

					<!-- </div>
					
				</div>
			</div>
		
		</section> -->

		<section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form method="POST" action="{{ route('user_login') }}" class="sign-form" >
                @csrf
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <h1 class="mb-5">Sign in</h1>
                </div>
      
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input class="sign-form__input-text" type="text" name="email" :value="old('email')" required autofocus id="email" placeholder="Email@gmail.com " />
                  <label class="form-label" for="username">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input class="sign-form__input-text" type="password"  name="password" required id="password" placeholder="Password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
      
                <!-- <div class="d-flex justify-content-between align-items-center"> -->
                  <!-- Checkbox -->
                  <!-- <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div> -->
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-danger btn-lg" id="submit-loggin" style="background-color: rgb(228, 72, 98)" 
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Tidak Punya Akun? <a href="/user_register"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	
</body>

<!-- Mirrored from nunforest.com/triptip-demo/sign-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 10:04:22 GMT -->
</html>