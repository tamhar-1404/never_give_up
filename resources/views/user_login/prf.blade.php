<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="css/triptip-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
   <style>
        body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
	padding: 10%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .aboutt {
    margin: 1rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

    </style>
</head>
<body>
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
	
		
    <div class="container">
		<form method="POST" action="/upprof/{id}" enctype="multipart/form-data">
		@csrf
<div class="row">

<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<!-- <img src="asset/{{Auth()->User()->foto}}" alt="Maxwell Admin"> -->
					<img src="{{ asset('storage/' . $user->foto) }}" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">{{$user->username}}</h5>
				<h6 class="user-email">{{$user->email}}</h6><br>
				<input type="file" name="foto" class="filestyle" data-input="false" data-buttonname="btn-secondary" style="width: 43%;   font-size: 12px;" value="{{Auth::User()->foto}}">
			</div>
			<div class="aboutt">
				<h5>Profil</h5>
				<p>Saya Yuki, memiliki hobi menulis dari kecil. Saya menuangkan hobi dengan menulis cerpen pada website ini</p><br>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Data Pribadi</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 co l-sm-6 col-12">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" id="username" value="{{$user->username}}">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="namalengkap">Nama Lengkap</label>
					<input type="text" class="form-control" name="namalengkap" id="fullName" value="{{$user->namalengkap}}">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Nomor Telepon</label>
					<input type="text" class="form-control" id="phone" name="notlp" value="{{$user->notlp}}">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="tgllahir">Tanggal Lahir</label>
					<input type="date" class="form-control" id="tgllahir" name="tgllahir" value="{{$user->tgllahir}}">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Medsos</label>
					<input type="text" class="form-control" id="phone" name="medsos" value="{{$user->medsos}}">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="askot">Asal Kota</label>
					<input type="text" class="form-control" id="askot" name="askot" value="{{$user->askot}}">
				</div>	
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<a href="/user-page" class="btn btn-secondary" type="button" id="submit" name="submit">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
					<!-- <a class="btn btn-primary" type="submit" name="submit">Simpan</a> -->
					<!-- <button type="button" id="submit" name="submit" class="btn btn-primary">Simpan</button> -->
				</div>
			</div>
			
		</div>
	</div>
</div>
</div>
</div>
</form>

</div>
</body>
</html>