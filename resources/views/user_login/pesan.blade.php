<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-b-30 m-t-0">Messages</h4>
                    <div class="inbox-widget slimscroller" style="max-height:360px;">
                    @foreach ($pesan as $item)
                        <div class="media inbox-item">
                            <img class="mr-3 rounded-circle" src="foto/{{$item -> user -> foto}}" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0"> hay,{{$item -> user -> username}}</h5>
                                <p class="text-muted">{{$item -> isi}}</p>
                                <p class="inbox-item-time">{{$item->created_at}}</p>
                            </div>
                        </div>
                    @endforeach
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
        
    </div>

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

</body>
</html>