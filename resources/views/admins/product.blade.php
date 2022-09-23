<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- carousel -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('carousel/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('carousel/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('carousel/ss/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('carousel/css/style1.css') }}">



</head>

<body>
    <!-- Topbar Start -->
    <div class="row bg-color">

        <!-- Duong Khai Cuong -->

        <div class="col-lg-2" style="background-color:#1e0022; padding-right:0;">
            <div style="top:0;  position: sticky;  width: 100%;">
                <div class="d-none d-lg-block" style="margin: 15px 0 30px 8px;">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0 display-5 " style="color: white; font-size:25px ;">
                            <image class=" img-logo border mr-1" src="img/logo.jpg"></image>
                            <p class="web-name"> MusicLand </p>

                        </h1>
                    </a>
                </div>
                <div class=" mt-5" style="padding-left:0;">
                    <div class="web-name" style="margin-left:20px; font-size:24px ; color: white; ">
                        ADMIN
                        <hr style="background-color: white; margin-left: 14px; margin-right: 14px">
                    </div>
                    <ul class="direct-list">
                        <li class="direct-item">
                            <i class="fa fa-music direct-icon"></i>
                            <a href="{{ route('product') }}" class="text-decoration-none direct-link-1"> Manage Music</a>
                        </li>
                        <li class="direct-item">
                            <i class="fas fa-user-plus direct-icon"></i>
                            <a href="{{ route('user.index') }}" class="text-decoration-none direct-link-2"> Manage User</a>
                        </li>
                        <li class="direct-item">
                            <i class="fas fa-id-card-alt  direct-icon"></i>
                            <a href="{{ route('order') }}" class="text-decoration-none direct-link-3"> Manage Order</a>
                        </li>

                    </ul>


                </div>

            </div>

        </div>
        <div class="col-lg-10" style="padding-left: 0px; padding-right:0;  height: 1000px">

            <div class="align-items-center py-3 top-bar" style="background: linear-gradient(80deg,rgb(45,3,43),rgb(25,0,1) ); height: 70px; top:0;  position: sticky; left:cacl(2*100/12); width:100%; z-index: 10;">
                <div class="col-lg-6 col-6 text-left">
                    <form action="" style="width: 40%;">
                        <div class="input-group" style="border-radius: 50%">
                            <div class="input-group-append" style="background-color:#3e2744; border-top-left-radius: 50%; border-bottom-left-radius: 50%;">
                                <span class="input-group-text bg-transparent " style="border-style:none;">
                                    <i class="fa fa-search" style=" color:white;"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" style="border-top-right-radius: 20px;  border-style:none; border-bottom-right-radius: 20px;" placeholder="Search for products">
                        </div>
                    </form>
                </div>


                <div class="login">
                    <img src="img/acc1.jpg" alt="img" class="account-img">


                    <div class="acc-profile">

                        <ul class="acc-list">
                            <li class="acc-item" style="margin-top: 6px;">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span style="margin-left:6px;">Setting</span>
                            </li>
                            <li class="acc-item" style="margin-bottom: 6px;">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <span style="margin-left:6px;">Member card</span>
                            </li>
                            <hr style="margin: 0; background-color: #888;">
                            <li class="acc-item" style="margin: 6px 0;">
                                <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                <span style="margin-left:6px;">log out</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class=" mt-0" style="padding-left: 0px; ">
                <div class=" offer pt-5">
                    <div class="pl-5 m-3 mb-4 ">
                        <i class="fa fa-music direct-icon" style='font-size:36px'> Manage Music</i>
                        <h2 class="new-music-title mb-0"></h2>

                        <div style="display: flex; justify-content: flex-end; margin: 10px 50px 20px 0;">
                            <a href="" class="btn btn-outline-primary py-md-2 px-md-3" style="background-color: black; ">add new</a>
                        </div>
                    </div>
                @foreach ($products as $webproduct)
                    <div class="nav-section header-sticky"
                        style="margin-left: 40px; margin-right: 40px; background-color:black; color:white;">
                        <div class="header-nav-section">
                            <div class="container">
                                <ul class="nav menu-nav clone-main-menu"
                                    style=" color:white; display:flex; justify-content: space-between; align-items: center;"
                                    data-menuname="Sale Info">
                                    <li class="menu-item"><a href="#" class="link-term"
                                            style='font-size:24px'>{{$webproduct->name}}</a></li>
                                    <li class="menu-item"><a href="#" class="link-term"
                                            style='font-size:24px'>{{$webproduct-->audio}}</a></li>
                                    <li class="menu-item"><a href="#" class="link-term"
                                            style='font-size:24px'>{{$webproduct-->photo}}</a></li>
                                    <li class="menu-item"><a href="#" class="link-term"
                                            style='font-size:24px'>{{$webproduct-->artist}}</a></li>
                                    <li class="menu-item"><a href="#" class="link-term"
                                            style='font-size:24px'>Action</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>

    </div>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src=" {{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js ') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>