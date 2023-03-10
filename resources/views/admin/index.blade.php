<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/hexzy/vertical/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 22:31:51 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/users/Dzaky.jpg">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper" >

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="/admin" class="logo"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                    <a href="/admin" class="logo-sm"><img src="assets/images/logo-sm.png" alt="" height="28"></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search float-left">
                            <form role="search" class="navbar-form">
                                <input type="text" placeholder="Search..." class="form-control search-bar">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <ul class="nav navbar-right float-right list-inline">
                        <li class="dropdown d-none d-sm-block">
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="text-center notifi-title">Notifikasi <span class="badge badge-xs badge-success">4</span></li>
                                <li class="list-group">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item mt-2">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details">Laporan dari user Shabir<span class="text-muted">User bernama baji memposting foto 18+</span></p>
                                            </a>
                                            <!-- item-->
                                          
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                                <p class="notify-details"><span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>

                                             <!-- item-->
                                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                                <p class="notify-details">Your item is shippe<span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>
                                            
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item mb-2">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                            </a>
        
                                    <!-- last list item -->
                                    <a href="javascript:void(0);" class="list-group-item text-center">
                                        <small class="text-primary mb-0">View all </small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="fas fa-expand"></i></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/Dzaky.jpg" alt="user-img" class="rounded-circle">
                                <span class="profile-username">
                                        N.G.V <span class="mdi mdi-chevron-down font-15"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item"> Profi</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"> Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <div class="user-details">
                    <div class="text-center">
                        <img src="assets/images/users/Dzaky.jpg" alt="" class="rounded-circle img-thumbnail">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">N.V.G</a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item"> Profile</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><span class="badge badge-success float-right">5</span> Settings </a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"> Lock screen</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"> Logout</a></li>
                            </ul>
                        </div>

                        <p class="text-muted m-0"><i class="far fa-dot-circle text-primary"></i> Online</p>
                    </div>
                </div>
                <!--- Divider -->

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="/admin" class="waves-effect"><i class="ti-home"></i><span> Dashboard <span class="badge badge-primary float-right">500</span></span></a>
                        </li>


                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout"></i><span> Kategori </span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="layouts-artikel.html">Artikel</a></li>
                                <li><a href="{{Route('cerpen_admin')}}">Cerpen</a></li>
                                <li><a href="layouts-puisi.html">Puisi</a></li>
                                <li><a href="layouts-diary.html">Diary</a></li>
                                <li><a href="layouts-karya-fotografi.html">Karya fotografi</a></li>
                                <li><a href="layouts-karya-ilustrasi.html">Karya ilustrasi</a></li>
                                <li><a href="layouts-makalah.html">Makalah</a></li>
                                <li><a href="layouts-skripsi.html">Skripsi</a></li>
                                <li><a href="layouts-pantun.html">Pantun</a></li>
                                <li><a href="layouts-esai.html">Esai</a></li>
                                <li><a href="layouts-karya-ilmiah.html">Karya ilmiah</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Halaman </span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{Route('data-user')}}">Data user</a></li>
                                <li><a href="{{Route('data-user')}}">Akun Yang Di Blokir</a></li>
                                <li><a href="{{Route('pesan-user')}}">Pesan Dari User</a></li>
                                <li><a href="postingan-yang-disematkan.html">postingan yang disematkan</a></li>
                            </ul>
                        </li>
                        
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="">
                    <div class="page-header-title">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <div class="page-content-wrapper ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div style="display: flex; justify-content: space-between;">
                                           <div style="width: 65px; height: 65px; border: 1px solid #6cbafa; border-radius: 100%; display: flex; justify-content: center; align-items: center; background-color: #6cbafa;" >
                                            <ion-icon style="color: white; font-size: 25px;" name="person-outline"></ion-icon>
                                           </div>
                                            <div class="float-right">
                                                <h2 class="text-primary mb-0">1000</h2>
                                                <p class="text-muted mb-0 mt-2">Total Pengguna</p>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div style="display: flex; justify-content: space-between;">
                                            <div style="width: 65px; height: 65px; border: 1px solid #61d7c7; border-radius: 100%; display: flex; justify-content: center; align-items: center; background-color: #61d7c7;" >
                                                <ion-icon style="color: white; font-size: 25px;" name="alert"></ion-icon>
                                               </div>
                                            <div class="float-right">
                                                     <h2 class="text-info mb-0">400</h2>
                                                     <p class="text-muted mb-0 mt-2">Jumlah Postingan</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div style="display: flex; justify-content: space-between;">
                                            <div style="width: 65px; height: 65px; border: 1px solid #6cbafa; border-radius: 100%; display: flex; justify-content: center; align-items: center; background-color: #6cbafa;" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" style="color:white;" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
                                                    <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
                                                  </svg>
                                               </div>
                                               <div class="float-right">
                                                <h2 class="text-primary mb-0">360</h2>
                                                <p class="text-muted mb-0 mt-2">di setujui</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div style="display: flex; justify-content: space-between;">
                                            <a href="#pp">
                                            <div style="width: 65px; height: 65px; border: 1px solid #61d7c7; border-radius: 100%; display: flex; justify-content: center; align-items: center; background-color: #61d7c7;" >
                                                <ion-icon style="color: white; font-size: 25px;" name="alert"></ion-icon>
                                               </div>
                                            </a>
                                            <div class="float-right">
                                                     <h2 class="text-info mb-0">40</h2>
                                                     <p class="text-muted mb-0 mt-2"> belum di setujui</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="m-t-0 m-b-30">Jumlah Postingan</h4>
                                        <div id="combine-chart-container" class="flot-chart" style="height: 360px"></div>
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-b-30 m-t-0">Jumlah User</h4>
                                    <div id="website-stats" style="height: 360px" class="flot-chart"></di>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

                        <!-- end col -->
                        <div class="row" id="pp">
                            <div class="col-xl-3" >
                                <div class="card" style="height: 1050px;">
                                    <div class="card-body">
                                        <h4 class="m-b-30 m-t-0">kategori</h4>

                                        <h5>artikel <span class="text-primary float-right"><b>78%</b></span></h5>
                                        <span class="text-primary float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                        <br>

                                        <h5>cerpen <span class="text-info float-right"><b>85%</b></span></h5>
                                        <span class="text-info float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>

                                        <h5>pantun <span class="text-primary float-right"><b>60%</b></span></h5>
                                        <span class="text-primary float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                        <br>

                                        <h5>puisi <span class="text-info float-right"><b>85%</b></span></h5>
                                        <span class="text-info float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>

                                        <h5>fotografi <span class="text-primary float-right"><b>78%</b></span></h5>
                                        <span class="text-primary float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                        <br>

                                        <h5>diary <span class="text-info float-right"><b>85%</b></span></h5>
                                        <span class="text-info float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>

                                        <h5>esai <span class="text-primary float-right"><b>78%</b></span></h5>
                                        <span class="text-primary float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                        <br>

                                        <h5>karya ilmiah <span class="text-info float-right"><b>85%</b></span></h5>
                                        <span class="text-info float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>
                                        
                                        <h5>ilustrasi <span class="text-primary float-right"><b>78%</b></span></h5>
                                        <span class="text-primary float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                        <br>

                                        <h5>makalah <span class="text-info float-right"><b>85%</b></span></h5>
                                        <span class="text-info float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>

                                        <h5>skripsi <span class="text-primary float-right"><b>78%</b></span></h5>
                                        <span class="text-primary float-right"><b></b></span></h5>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                        <br>

                                    </div>
    
                                </div>
                            </div>

                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-b-30 m-t-0">postingan dari semua kategori</h4>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                          <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                            </a>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                              <span aria-hidden="true">&raquo;</span>
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                    <div class="row col-lg-12 justify-content-lg-center"  >
                                   
                                    <div class="item">

                                        <!-- place-post module  fotografi -->
                                        <div class="col-0">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="asset/" alt="">
                                                    <a class="place-post__like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                                                    <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                   
                                                </p>
                                                <div >
                                                
                                                </div>
                                                </div>
                                                <img style="border-radius: 10px;" src="asset/" class="card-img-top" alt="" srcset="">
                                                <ion-icon style="color: pink; font-size: 30px;" name="heart-outline"></ion-icon>
                                                <p class=""></p>
                                                
                                                <p class="card-text"></p>
                                                <div style="width: 100%; display: flex; justify-content: center;  " >
                                                                    <a class="contact-form__submit" href="/cerpen-baik" style="margin-right: 20px; margin-bottom: 10px; ">
                                                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                        lihat
                                                                    </a>
                                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- end place-post module fotografi-->

                                    </div>
                                   
                                        <div class="col-4">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="assets/images/users/miku.jpg" alt="">
                                                   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                    Nabila
                                                   </p>
                                                   <div >
                                                   
                                                   </div>
                                                </div>
                                                <img style="border-radius: 10px;" src="assets/layout.img/sukses2.jpg" class="card-img-top" alt="" srcset="">
                                                <div >
                                                    <p style="margin: 10px;">tanggal posting : 12-03-2022</p>
                                                </div>
                                                <p class="">Kategori : Artikel</p>
                                                <p class="">Special title treatment</p>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <div style="display: flex; gap: 10px; " class="row justify-content-between ">
                                                    <a href="tampilan_user/cerpen-baik.html" class="btn btn-primary col-3" style="font-size: 11px;">Lihat</a>
                                                    <a href="#" class="btn btn-danger col-3" style="font-size: 11px;" >hapus </a>
                                                    <a href="#" class="btn btn-success col-3" style="font-size: 11px;" >setuju </a>
                                                </div>
                                               
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFhUYGBgaGBwYGhgYGhgYGRg
                                                    YGBgZGhgaGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py42NTEBDAwMEA8QHBISGjQrISs0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0
                                                    NDQ1NDQxNDE0MTQxND8xMTQ0NDQ0MTQxMTQ9Ov/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAYFBwj
                                                    /xABAEAACAQEFBQUGBQMCBQUAAAABAgARAxIhMUEEBVFhcQYiUoGREzJCobHBYnLR4fAjgpIHohQzQ7LxJFNjg8L/xAAaAQADAQEBAQAA
                                                    AAAAAAAAAAAAAQIDBAUG/8QAJhEAAgIDAAEDAwUAAAAAAAAAAAECEQMhMUEEElETImEFMkKh8P/aAAwDAQACEQMRAD8A9CV5IPKYeFtHoF
                                                    PEfSSxxD34xeV78Y2kg0oKzwTPBs8G7xNjoTtAO8TvAO8TZSQztK7NJO8A7SGxog7Suxk3aV3Mllog4lS1sxLDNAO0zZSRVtdmXgJWfZU8I
                                                    l13gS0XuZaiio2yqMlEZbGmksu0GXiHVDIknWkZFZiFUEk4AAEknkBNPufskzUe3JUaIPeP5j8Plj0lRg5PRM5xj0zmy7I9s1yzRnbgBlzJyA
                                                    6zWbr7FoO9tDXj4EJC/wBzDE+VJqdl2VLNQiKEUaKKevE84adcMMY92csszeloxm8P9PNmd1ZS6KB3kBrfNcDeapXhhyyh17I7NZLds7NVwoW
                                                    xLHqxxM1ZgQCenz9NJvGo8RhK5LbPPd4dnmXvIefD0Mfd3aXadnor/wBRBhRz3gPwv+tZu7XZQePTScjbtzq2nlLqMiLlH8ovbq3/AGG0YK11
                                                    /A+DeWjeULvXclhtK0tLNW4Nk46MMRMLvLcJXFBlpr5Se6+1W0WHdf8AqoMKOaOvINn5GS04lJqXAG++wFolW2dvaLncagcdDk3ymOt7FkYo6s
                                                    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" alt="">
                                                   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                    sumanto
                                                   </p>
                                                   <div >
                                                    
                                                   </div>
                                                </div>
                                                <img style="border-radius: 10px;" src="assets/layout.img/baik.jpg" class="card-img-top" alt="" srcset="">
                                                <div >
                                                    <p style="margin: 10px;">tanggal posting : 12-03-2022</p>
                                                </div>
                                                <p class="">Kategori : Cerpen</p>
                                                <p class="">Special title treatment</p>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                
                                                <div style="display: flex; gap: 10px; " class="row justify-content-between ">
                                                    <a href="tampilan_user/cerpen-baik.html" class="btn btn-primary col-3" style="font-size: 11px;">Lihat</a>
                                                    <a href="#" class="btn btn-danger col-3" style="font-size: 11px;" >hapus </a>
                                                    <a href="#" class="btn btn-success col-3" style="font-size: 11px;" >setuju </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFhUYGBgaGBwYGhgYGhgYGRg
                                                    YGBgZGhgaGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py42NTEBDAwMEA8QHBISGjQrISs0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0
                                                    NDQ1NDQxNDE0MTQxND8xMTQ0NDQ0MTQxMTQ9Ov/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAYFBwj
                                                    /xABAEAACAQEFBQUGBQMCBQUAAAABAgARAxIhMUEEBVFhcQYiUoGREzJCobHBYnLR4fAjgpIHohQzQ7LxJFNjg8L/xAAaAQADAQEBAQAA
                                                    AAAAAAAAAAAAAQIDBAUG/8QAJhEAAgIDAAEDAwUAAAAAAAAAAAECEQMhMUEEElETImEFMkKh8P/aAAwDAQACEQMRAD8A9CV5IPKYeFtHoF
                                                    PEfSSxxD34xeV78Y2kg0oKzwTPBs8G7xNjoTtAO8TvAO8TZSQztK7NJO8A7SGxog7Suxk3aV3Mllog4lS1sxLDNAO0zZSRVtdmXgJWfZU8I
                                                    l13gS0XuZaiio2yqMlEZbGmksu0GXiHVDIknWkZFZiFUEk4AAEknkBNPufskzUe3JUaIPeP5j8Plj0lRg5PRM5xj0zmy7I9s1yzRnbgBlzJyA
                                                    6zWbr7FoO9tDXj4EJC/wBzDE+VJqdl2VLNQiKEUaKKevE84adcMMY92csszeloxm8P9PNmd1ZS6KB3kBrfNcDeapXhhyyh17I7NZLds7NVwoW
                                                    xLHqxxM1ZgQCenz9NJvGo8RhK5LbPPd4dnmXvIefD0Mfd3aXadnor/wBRBhRz3gPwv+tZu7XZQePTScjbtzq2nlLqMiLlH8ovbq3/AGG0YK11
                                                    /A+DeWjeULvXclhtK0tLNW4Nk46MMRMLvLcJXFBlpr5Se6+1W0WHdf8AqoMKOaOvINn5GS04lJqXAG++wFolW2dvaLncagcdDk3ymOt7FkYo6s
                                                    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" alt="">
                                                   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                    sumanto
                                                   </p>
                                                   <div >
                                                   
                                                   </div>
                                                </div>
                                                <img style="border-radius: 10px;" src="assets/layout.img/puisi.jpg" class="card-img-top" alt="" srcset="">
                                                <div >
                                                    <p style="margin: 10px;">tanggal posting : 12-03-2022</p>
                                                </div>
                                                <p class="">Kategori : Puisi</p>
                                                <p class="">Special title treatment</p>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <div style="display: flex; gap: 10px; " class="row justify-content-between ">
                                                    <a href="tampilan_user/cerpen-baik.html" class="btn btn-primary col-3" style="font-size: 11px;">Lihat</a>
                                                    <a href="#" class="btn btn-danger col-3" style="font-size: 11px;" >hapus </a>
                                                    <a href="#" class="btn btn-success col-3" style="font-size: 11px;" >setuju </a>
                                                </div>
                                               
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFhUYGBgaGBwYGhgYGhgYGRg
                                                    YGBgZGhgaGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py42NTEBDAwMEA8QHBISGjQrISs0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0
                                                    NDQ1NDQxNDE0MTQxND8xMTQ0NDQ0MTQxMTQ9Ov/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAYFBwj
                                                    /xABAEAACAQEFBQUGBQMCBQUAAAABAgARAxIhMUEEBVFhcQYiUoGREzJCobHBYnLR4fAjgpIHohQzQ7LxJFNjg8L/xAAaAQADAQEBAQAA
                                                    AAAAAAAAAAAAAQIDBAUG/8QAJhEAAgIDAAEDAwUAAAAAAAAAAAECEQMhMUEEElETImEFMkKh8P/aAAwDAQACEQMRAD8A9CV5IPKYeFtHoF
                                                    PEfSSxxD34xeV78Y2kg0oKzwTPBs8G7xNjoTtAO8TvAO8TZSQztK7NJO8A7SGxog7Suxk3aV3Mllog4lS1sxLDNAO0zZSRVtdmXgJWfZU8I
                                                    l13gS0XuZaiio2yqMlEZbGmksu0GXiHVDIknWkZFZiFUEk4AAEknkBNPufskzUe3JUaIPeP5j8Plj0lRg5PRM5xj0zmy7I9s1yzRnbgBlzJyA
                                                    6zWbr7FoO9tDXj4EJC/wBzDE+VJqdl2VLNQiKEUaKKevE84adcMMY92csszeloxm8P9PNmd1ZS6KB3kBrfNcDeapXhhyyh17I7NZLds7NVwoW
                                                    xLHqxxM1ZgQCenz9NJvGo8RhK5LbPPd4dnmXvIefD0Mfd3aXadnor/wBRBhRz3gPwv+tZu7XZQePTScjbtzq2nlLqMiLlH8ovbq3/AGG0YK11
                                                    /A+DeWjeULvXclhtK0tLNW4Nk46MMRMLvLcJXFBlpr5Se6+1W0WHdf8AqoMKOaOvINn5GS04lJqXAG++wFolW2dvaLncagcdDk3ymOt7FkYo6s
                                                    rDNWBUjqDPbN1doNn2jBHo+qP3W8vF5Q29dz2O0LdtUVuByZfysMRBMT0eExTcb7/0/tEq+ztfXwNQP5Nk3nTzmM2jZ3RijqyMM1YFSPIxgCkoxigIUeNFAB49Y0UAPaRaQ1q/cTqR85zleWHtP6Y5P9jMpcNYh/aSN+VRaRG0mFm9FhngmeCZ5BnhYUSd4F3kWeCd5NlId3gGaJ2gmeS2UkM7QDmSdoFmiY0RZpXdoV2gGxNBnIZaIOYImd3YOzNvaYsPZrxfPyTP1pNNu/sxs9lQlfaNxfEeSZetZccMpESzRiYTZN121t7iMw8WSj+44TSbB2LAobZ6/hTLzcj6DzmvY0H2kVHGbxwRXdmMs0nzRW2Ld1lYilmirzzY9WOMntLstCCANTSpGWQ9YR6yATia8tPSa84ZXe2ER6iopy5xwDqfSRjq0pEkggElI3og0YhzIsklWNWAFS32UHSZ/eu4EfEijaMuDDz1HIzVGRYRqRLj5R5NvLd1pYGrqWSuDoDh+ZdOonS3R2ut7MC8wtky7x7w6Nn6ze2+yK2kxm/uxla2mzm4+dBgrfp9ImvKGn4Zrd1dotn2igV7r+B8G8tD5SzvPdFjtC3bRFfgTgw/KwxHlPEW21kYraIaqaFlFGUjxIcj09Jp9x9tbSzAF4WycGPfHRs/WCY3Es76/wBPnSrbM98eB6B/7Wybzp5zFbTsz2bFHRkYZqwIPoZ7XuntFs+00CPdfwPg3lx8pY3luqx2hblqiuNK5j8rDEeUdktUeDx6Tdb6/wBPXWr7M98eB6Bv7XyPQ06zF7Tsr2bFHRkYfCwIP7iMQIRRRqwoD1RbSWfaf0m5OD6ik5YtJbs3rZ2n9p/3TKRrEktpHDyklpJh5zNnSkWi8G7wPtJAvJsdBWeDZ4MvBs8LHQRmgmMiXl/Zdy21pjduji/d9BmYJN8C0unMdpPZ9jtLU0RC3TIdTkJq9j7NWa4uS54e6voMT6zsoiqAqgKBkAAB5CaRwt9M5ZUuGY2LsnXG1f8AtT7sfsJ39j3dZWXuIqnxZserHGFtdoCmhzP7/pGR7w1HOaxhGPEZOcn1hLwg1tSa4fbCSVQJAPe40+s0IElTifSTJirIxAOZEyRkDAB6xo0UQ6HqJEmK7HgFDVMVTJSQjAFU85Ek84ckDEmklSOhWVamTVuMPdj3Y0hNpmP7X9kl2ke1sqLbqOVLQD4X58D/AAeTbRsxRiGBs3Bocx3hoeHnPoooNQJle2PZNdpU2lmALYDLIWgGh/FwPl0mcX1Fxa4zx5dsdCL3+Qmv3D/qBbWdFc+0T8XvAcmz9azL7RsjKSpBwJBRgQQRmOIPKUXsAT3ahuGvlx8vQTOM0ypQrp73ubtLs20gXHAbwNQN5aHylzeO67K3W5aIrjmMRzUjEHpPndLd0OoOdRNv2c7d7Qgo/wDUQatmOQbP1rNffXSVhlN1FW/g6PaLsL7JWtbK0FxcSloQCPyvkeh9ZjPZjgTzGU7u9e0bbS4e1F5BX2dgpIRTkC5GLa4AgmmajCcvabVrQ3nOOQAJUKoyUKuAA4TCeeno9f036Xa+9X/vwbEWkt7M/ctB+An0qZyQ8vbuepYcUcfITWXDxo9II8mXnPS1oIe/hOSXWdceIs3pEvAX416IosKSSABUnAAakzu7H2adqG0e6PCuLeZyHzma9oRiDQjEHgRN7uXeIt7IP8Q7rjgwz9c/OaY4qT2Z5JOK0G2Pd1lZe4gr4ji3qZaLQVo7aAef86yKLWtePlTlOha4c/ek/acMf5xiYfznGBBFRrjGVicxT5xgM7DOgJ+ccOTkPM/zGKgjO2gH7QAQrx/aOB6RhHgIesasUasAHMiYqxqQGhR40VYhiirI1kXcAVJgBOsG9uQaKLx+Q6mBDM+XdXiRifLQQ6KAKAUEAHVMasan5DoPvLCtK9ZJXjTJaLFY4g1aP7UVu1x4DTrwloQSkQiEeBJmu1XZdNpUugC2wGeQcDR+fBvtl5Rtu7yrMjqVZTQg4FSJ77Mh2/3fs5svbO6paLgp1tKfBdGJPA6a4TnzYv5R6dGGbbUas8gtrMjBheHHXz4/XnDWhqQFwGgGkLaOXywHzMZRTADH+Zznc3VPp7fpfSvHc5Ol5J2BC4H1hzZCc57TEgkqfFl6HSVrXZWJJNSePePzofrLhC1tlT/U1jlWONo24eX91WnfA41H+0/pOOLSXd12n9Rev1BH3nQ+Hz0egEfD0H0Es35Sc0dhwZh6MwhVJYgAEk5ACpPQTkn+5o64L7UWi8lZKzkKqlmOQAqZ1929mHfvWpuL4Ri566L85q9j2KzshdRAvE6nqczLhib6TLJFcOBu/syTRrZqfgXPzbTymi2XZEshdRAo1A15k6nmYasizgYcq+U3jBR4YSk5dJkwdGOeA5RkcGO4qP5TzlEklUDAca+sG9rlTHpw1x85FVPxHyy+kmigYAUgMbvHWghFFOcaKAiUUaNWMQjGkqRoDGiiirEMUYyFrahcSaSu5LA3jcWv9xA40OGkAC2lrSqri2g/U6QaoCxLEMdBoo/WMqE1VRdXj8RyxH0hkswuQ+/1gA5MVYjIkwAkYxegr85X2nagmABZjkox9eAnC23eDuboPp7q08J+I88uHGTKSSKjByOht++ghuJidThTQ4GD2bfgGBQrXNlN5setMZwtoUKpNcaVkbLaryg8RWZ/Vl4N/oxo2FhvyxGHeUcSCcda0rOls+1o/uOrcgcfTOeeW+2qgLMQAOMz+278e0N2yqi+Ie+elMoLO/KLh6B5OOjf9pe2dns9bOypaW2VB7iH8bDM/hHnSeZbx2y0tmNrbOXY5E5AeFV0A5YQF8Kbqi+/AYqDzPxHll1mp7M7u2dXFptQa0fNUF02Y/MKi9TgMOshylke3SPUjHB6KGlcihuXsttO0obRFuoASpbA2h8KD7nCUX2W7hSlMCNQRnXnPatj22ztB3HBpoMCB+U4iZ7tb2d9oDbWQ74HfUfGBqPxD59c7lgXt+08zJ6+eWX36XhfB5bb7MDKP/CNocPOd60SsrPs+M5l7lwdJhw8t7A/fX8y/wDcJzQ8P
                                                    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" alt="">
                                                   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                    sumanto
                                                   </p>
                                                   <div >
                                                    
                                                   </div>
                                                </div>
                                                <img style="border-radius: 10px;" src="assets/layout.img/diary.jpg" class="card-img-top" alt="" srcset="">
                                                <div >
                                                    <p style="margin: 10px;">tanggal posting : 12-03-2022</p>
                                                </div>
                                                <p class="">Kategori : Diary</p>
                                                <p class="">Special title treatment</p>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <div style="display: flex; gap: 10px; " class="row justify-content-between ">
                                                    <a href="tampilan_user/cerpen-baik.html" class="btn btn-primary col-3" style="font-size: 11px;">Lihat</a>
                                                    <a href="#" class="btn btn-danger col-3" style="font-size: 11px;" >hapus </a>
                                                    <a href="#" class="btn btn-success col-3" style="font-size: 11px;" >setuju </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFhUYGBgaGBwYGhgYGhgYGRg
                                                    YGBgZGhgaGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py42NTEBDAwMEA8QHBISGjQrISs0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0
                                                    NDQ1NDQxNDE0MTQxND8xMTQ0NDQ0MTQxMTQ9Ov/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAYFBwj
                                                    /xABAEAACAQEFBQUGBQMCBQUAAAABAgARAxIhMUEEBVFhcQYiUoGREzJCobHBYnLR4fAjgpIHohQzQ7LxJFNjg8L/xAAaAQADAQEBAQAA
                                                    AAAAAAAAAAAAAQIDBAUG/8QAJhEAAgIDAAEDAwUAAAAAAAAAAAECEQMhMUEEElETImEFMkKh8P/aAAwDAQACEQMRAD8A9CV5IPKYeFtHoF
                                                    PEfSSxxD34xeV78Y2kg0oKzwTPBs8G7xNjoTtAO8TvAO8TZSQztK7NJO8A7SGxog7Suxk3aV3Mllog4lS1sxLDNAO0zZSRVtdmXgJWfZU8I
                                                    l13gS0XuZaiio2yqMlEZbGmksu0GXiHVDIknWkZFZiFUEk4AAEknkBNPufskzUe3JUaIPeP5j8Plj0lRg5PRM5xj0zmy7I9s1yzRnbgBlzJyA
                                                    6zWbr7FoO9tDXj4EJC/wBzDE+VJqdl2VLNQiKEUaKKevE84adcMMY92csszeloxm8P9PNmd1ZS6KB3kBrfNcDeapXhhyyh17I7NZLds7NVwoW
                                                    xLHqxxM1ZgQCenz9NJvGo8RhK5LbPPd4dnmXvIefD0Mfd3aXadnor/wBRBhRz3gPwv+tZu7XZQePTScjbtzq2nlLqMiLlH8ovbq3/AGG0YK11
                                                    /A+DeWjeULvXclhtK0tLNW4Nk46MMRMLvLcJXFBlpr5Se6+1W0WHdf8AqoMKOaOvINn5GS04lJqXAG++wFolW2dvaLncagcdDk3ymOt7FkYo6s
                                                    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" alt="">
                                                   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                    sumanto
                                                   </p>
                                                   <div >
                                                   
                                                   </div>
                                                </div>
                                                <img style="border-radius: 10px;" src="assets/layout.img/fotografi.jpg" class="card-img-top" alt="" srcset="">
                                                <div >
                                                    <p style="margin: 10px;">tanggal posting : 12-03-2022</p>
                                                </div>
                                                <p class="">Kategori : Fotografi</p>
                                                <p class="">Special title treatment</p>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <div style="display: flex; gap: 10px; " class="row justify-content-between ">
                                                    <a href="tampilan_user/cerpen-baik.html" class="btn btn-primary col-3" style="font-size: 11px;">Lihat</a>
                                                    <a href="#" class="btn btn-danger col-3" style="font-size: 11px;" >hapus </a>
                                                    <a href="#" class="btn btn-success col-3" style="font-size: 11px;" >setuju </a>
                                                </div>
                                               
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFhUYGBgaGBwYGhgYGhgYGRg
                                                    YGBgZGhgaGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py42NTEBDAwMEA8QHBISGjQrISs0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0
                                                    NDQ1NDQxNDE0MTQxND8xMTQ0NDQ0MTQxMTQ9Ov/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBAYFBwj
                                                    /xABAEAACAQEFBQUGBQMCBQUAAAABAgARAxIhMUEEBVFhcQYiUoGREzJCobHBYnLR4fAjgpIHohQzQ7LxJFNjg8L/xAAaAQADAQEBAQAA
                                                    AAAAAAAAAAAAAQIDBAUG/8QAJhEAAgIDAAEDAwUAAAAAAAAAAAECEQMhMUEEElETImEFMkKh8P/aAAwDAQACEQMRAD8A9CV5IPKYeFtHoF
                                                    PEfSSxxD34xeV78Y2kg0oKzwTPBs8G7xNjoTtAO8TvAO8TZSQztK7NJO8A7SGxog7Suxk3aV3Mllog4lS1sxLDNAO0zZSRVtdmXgJWfZU8I
                                                    l13gS0XuZaiio2yqMlEZbGmksu0GXiHVDIknWkZFZiFUEk4AAEknkBNPufskzUe3JUaIPeP5j8Plj0lRg5PRM5xj0zmy7I9s1yzRnbgBlzJyA
                                                    6zWbr7FoO9tDXj4EJC/wBzDE+VJqdl2VLNQiKEUaKKevE84adcMMY92csszeloxm8P9PNmd1ZS6KB3kBrfNcDeapXhhyyh17I7NZLds7NVwoW
                                                    xLHqxxM1ZgQCenz9NJvGo8RhK5LbPPd4dnmXvIefD0Mfd3aXadnor/wBRBhRz3gPwv+tZu7XZQePTScjbtzq2nlLqMiLlH8ovbq3/AGG0YK11
                                                    /A+DeWjeULvXclhtK0tLNW4Nk46MMRMLvLcJXFBlpr5Se6+1W0WHdf8AqoMKOaOvINn5GS04lJqXAG++wFolW2dvaLncagcdDk3ymOt7FkYo6s
                                                    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" alt="">
                                                   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                    sumanto
                                                   </p>
                                                   <div >
                                                    
                                                   </div>
                                                </div>
                                                <img style="border-radius: 10px; " src="assets/layout.img/sukses2.jpg" class="card-img-top" alt="" srcset="">
                                                <div >
                                                    <p style="margin: 10px;">tanggal posting : 12-03-2022</p>
                                                </div>
                                                <p class="">Kategori : Esay</p>
                                                <p class="">Special title treatment</p>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <div style="display: flex; gap: 10px; " class="row justify-content-between ">
                                                    <a href="tampilan_user/cerpen-baik.html" class="btn btn-primary col-3" style="font-size: 11px;">Lihat</a>
                                                    <a href="#" class="btn btn-danger col-3" style="font-size: 11px;" >hapus </a>
                                                    <a href="#" class="btn btn-success col-3" style="font-size: 11px;" >setuju </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                </div>

                            </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-b-30 m-t-0">Messages</h4>
                                    <div class="inbox-widget slimscroller" style="max-height:360px;">

                                        <div class="media inbox-item">
                                            <img class="mr-3 rounded-circle" src="assets/images/users/avatar-1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Clinton Murphy</h5>
                                                <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                                <p class="inbox-item-time">5 mins ago</p>
                                            </div>
                                        </div>

                                        <div class="media inbox-item mt-3">
                                            <img class="mr-3 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Frank Martinez</h5>
                                                <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                                <p class="inbox-item-time">6 mins ago</p>
                                            </div>
                                        </div>

                                        <div class="media inbox-item mt-3">
                                            <img class="mr-3 rounded-circle" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Patrick Dawson</h5>
                                                <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                                <p class="inbox-item-time">6 mins ago</p>
                                            </div>
                                        </div>

                                        <div class="media inbox-item mt-3">
                                            <img class="mr-3 rounded-circle" src="assets/images/users/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Charles Young</h5>
                                                <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                                <p class="inbox-item-time">8 mins ago</p>
                                            </div>
                                        </div>

                                        <div class="media inbox-item mt-3">
                                            <img class="mr-3 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Joseph Yowell</h5>
                                                <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                                <p class="inbox-item-time">12 mins ago</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                       
                    </div><!-- container-fluid -->

            </div><!-- container-fluid -->

        </div> <!-- Page content Wrapper -->

        </div>
        <!-- content -->

    </div>
    <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
		
		<!-- End Header -->

		
           
            
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael.min.js"></script>

    <!-- KNOB JS -->
    <script src="assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

    <script src="assets/plugins/flot-chart/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

    <script src="assets/pages/dashboard.js"></script>

    <script src="assets/js/app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


<!-- Mirrored from themesdesign.in/hexzy/vertical/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 22:32:17 GMT -->
</html>