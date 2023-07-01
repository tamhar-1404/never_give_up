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

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/highcharts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

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
                                <li><a href="/logout" class="dropdown-item"> Keluar</a></li>
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
                                <li><a href="/logout" class="dropdown-item"> Logout</a></li>
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
                                <li><a href="{{Route('artikel_admin')}}">Artikel</a></li>
                                <li><a href="{{Route('cerpen_admin')}}">Cerpen</a></li>
                                <li><a href="{{Route('puisi_admin')}}">Puisi</a></li>
                                <li><a href="layouts-diary.html">Diary</a></li>
                                <li><a href="layouts-karya-fotografi.html">Karya fotografi</a></li>
                                <li><a href="layouts-karya-ilustrasi.html">Karya ilustrasi</a></li>
                                <li><a href="layouts-makalah.html">Makalah</a></li>
                                <li><a href="{{Route('skripsi_admin')}}">Skripsi</a></li>
                                <li><a href="{{Route('pantun_admin')}}">Pantun</a></li>
                                <li><a href="layouts-esai.html">Esai</a></li>
                                <li><a href="layouts-karya-ilmiah.html">Karya ilmiah</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Halaman </span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{Route('data-user')}}">Data user</a></li>
                                <li><a href="{{Route('akun_blokir')}}">Akun Yang Di Blokir</a></li>
                                <li><a href="{{Route('pesan-user')}}">Pesan Dari User</a></li>
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
                                                <h2 class="text-primary mb-0">{{$user}}</h2>
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
                                                     <h2 class="text-info mb-0">{{$semua}}</h2>
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
                                                <h2 class="text-primary mb-0">{{$setuju}}</h2>
                                                <p class="text-muted mb-0 mt-2">di setuju</p>
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
                                                     <h2 class="text-info mb-0">{{$postingan}}</h2>
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
                                        <h4 class="m-t-0 m-b-30">Jumlah postingan setiap kategori</h4>
                                        <div id="chart-container" class="flot-chart" style="height: 360px"></div>
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-b-30 m-t-0">Status postingan</h4>
                                    <script type="text/javascript">
        $(document).ready(function() {
            var setuju = {!! $setuju !!};
            var ditolak = {!! $ditolak !!};
            var pending = {!! $pandding !!};

        Highcharts.chart('grafik_status', {
           
            chart: {
                type: 'pie'
            },
            title: {
                text: ' Grafik Status postingan'
            },
            series: [{
                name: 'jumlah',
                data: [
                    ['Setuju', setuju],
                    ['Ditolak', ditolak],
                    ['Pending', pending],
                ]
            }]
        });
    });
</script>                                    
                                </div>
                            </div>
                        </div>
                     </div>

                        <!-- end col -->
                          <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-b-30 m-t-0">postingan dari semua kategori</h4>
                                    <div class="row col-lg-12 justify-content-lg-center"  >
                                   
                                  
                                    @foreach ($posting as $post)
                                        <div class="col-4">
                                            <div class="card" style="border-radius: 15px;">
                                            <div class="card-body">
                                                <div style=" display: flex; justify-content:space-between;">
                                                    <img class="" style="border-radius: 100%; width: 30px; height: 30px; " src="foto/{{$post -> user -> foto}}" alt="">
                                                   <p style="color:black; font-family: Georgia, 'Times New Roman', Times, serif; margin:10px;">
                                                    {{$post -> user -> username}}
                                                   </p>
                                                   <div >
                                                   
                                                   </div>
                                                </div>
                                                <img style="border-radius: 10px;" src="asset/{{$post-> foto}}" class="card-img-top" alt="" srcset="">
                                                <div >
                                                    <p style="margin: 10px;">{{$post -> created_at}}</p>
                                                </div>
                                                <p class="">Kategori : {{$post -> kategori -> kategori}}</p>
                                                <p class="">{{$post -> judul}}</p>
                                                {!!$post -> isi!!}
                                                <div style="display: flex; gap: 10px; " class="row justify-content-between ">
                                                    <button href="tampilan_user/cerpen-baik.html" class="btn btn-primary col-3" style="font-size: 11px;">Lihat</button>
                                                  
                                                    <button type="button" data-bs-target="#exampleModal" data-bs-toggle="modal" class="btn btn-danger col-" style="font-size: 11px;" >tolak </button>
                                                   
                                                    <form action="{{Route('uprove', $post->id)}} " method="post" class="col-3">
                                                    @csrf
                                                    <button  type="submit" class="btn btn-success " style="font-size: 11px;" >setuju </button>
                                                    </form>
                                                </div>
                                               
                                            </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title fs-2" id="exampleModalLabel">alasan penolakan</h4>
                                                    </div>
                                                <form action="{{Route('tolak', $post->id)}}" method="post">
                                                    @csrf
                                                    <!-- inputan id user dan postingan  -->
                                                    <input type="hidden" name="id_user" value="{{$post->user->id}}">
                                                    <input type="hidden" name="id_postingan" value="{{$post->id}}">
                                                    <div class="modal-body">
                                                        <textarea name="pesan" placeholder="masukan alasan kenapa anda menolak postingan ini" id="" cols="60" rows="5"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button> 
                                                        <button type="submit" class="btn btn-primary">kirim penolakan</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modals -->
                                     @endforeach   
                                        <!-- modals -->
                                        {{ $posting->links() }}
                                       
                                        </div>
                                </div>

                            </div>
                        </div>
                     </div>

               
            </div><!-- container-fluid -->

        </div> <!-- Page content Wrapper -->

        </div>
        <!-- content -->

    </div>
    <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
		
		<!-- End Header -->

		
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

            
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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

    <!--grafik-->
    
    <script type="text/javascript">
        $(document).ready(function() {
            var categories = [];
            var values = [
                {{$cerpen}},
                {{$artikel}},
                {{$pantun}},
                {{$puisi}},
                {{$photografi}},
                {{$diari}},
                {{$makalah}},
                {{$ilustrasi}},
                {{$skripsi}},
                {{$esai}},
                {{$karya_ilmiah}},
                {{$lainnya}}
            ];
            var cerpen = [];
            $jumlah_cerpen = 0;


            Highcharts.chart('chart-container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik Jumlah postingan tiap kategori'
                },
                xAxis: {
                    categories: [
                        'cerpen',
                        'artikel',
                        'pantun',
                        'puisi',
                        'photografi',
                        'diary',
                        'makalah',
                        'ilustrasi',
                        'skripsi',
                        'esai',
                        'karya ilmiah',
                        'lainnya',
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Jumlah postingan'
                    }
                },
                series: [{
                    name: 'jumlah postingan',
                    data: values
                }]
            });
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            var setuju = {!! $setuju !!};
            var ditolak = {!! $ditolak !!};
            var pending = {!! $pandding !!};

        Highcharts.chart('grafik_status', {
           
            chart: {
                type: 'pie'
            },
            title: {
                text: ' Grafik Status postingan'
            },
            series: [{
                name: 'jumlah',
                data: [
                    ['Setuju', setuju],
                    ['Ditolak', ditolak],
                    ['Pending', pending],
                ]
            }]
        });
    });
</script>

</body>


<!-- Mirrored from themesdesign.in/hexzy/vertical/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 22:32:17 GMT -->
</html>