<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MuscicLand</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">

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

        <div class="col-lg-2" style="background-color:#1e0022; padding-right:0;">
            <div style="top:0;  position: sticky;  width: 100%;">
                <div class="d-none d-lg-block" style="margin: 15px 0 30px 8px;">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0 display-5 " style="color: white; font-size:25px ;">
                            <image class=" img-logo border mr-1" src="img/logo.jpg"></image>
                            <p class="web-name"> <a href="{{ route('home') }}">MusicLand</a> </p>

                        </h1>
                    </a>
                </div>
                <div class=" mt-5" style="padding-left:0;">
                @if(Auth::check())
                <ul class="direct-list">
                        <li class="direct-item">
                            <i class="fas fa-chart-line direct-icon"></i>
                            <a href="{{ route('playlist') }}" class="text-decoration-none direct-link-1">Top Trending</a>
                        </li>
                        <li class="direct-item">
                            <i class="fas fa-heart direct-icon "></i>
                            <a href="{{ route('mylibrary') }}" class="text-decoration-none direct-link-2">My Library</a>
                        </li>

                    </ul>
                @else
                <ul class="direct-list">
                        <li class="direct-item">
                            <i class="fas fa-chart-line direct-icon"></i>
                            <a href="{{ route('playlist') }}" class="text-decoration-none direct-link-1">Top Trending</a>
                        </li>
                 

                    </ul>
                @endif
                    


                </div>

            </div>

        </div>

        <div class="col-lg-10" style="padding-left: 0px; padding-right:0;  ">

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
       

                @if(Auth::check())
                <div class="login">
                    <img src="img/acc1.jpg" alt="img" class="account-img">
                @else
                <div class="login">
                <img src="img/logo.jpg" alt="img" class="account-img">
                @endif

                    <div class="acc-profile">
                    @if(Auth::check())
                        <ul class="acc-list">
                            <li class="acc-item" style="margin-top: 6px;">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span style="margin-left:6px;">Setting</span>
                            </li>
                            <li class="acc-item" style="margin-bottom: 6px;">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <span style="margin-left:6px;"><a href="{{ route('mycard') }}">Member card</a></span>
                            </li>
                            <hr style="margin: 0; background-color: #888;">
                            <li class="acc-item" style="margin: 6px 0;">
                                <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                <span style="margin-left:6px;"><a href="{{ route('logout') }}">log out</a></span>
                            </li>
                        </ul>
                        @else
                        <ul class="acc-list">
                        
                            <li class="acc-item" style="margin: 6px 0;">
                                <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                <span style="margin-left:6px;"><a href="{{ route('login') }}">log in</a></span>
                            </li>
                        </ul>
                        @endif

                    </div>
                </div>
            </div>

            <div class=" mt-3" style="padding-left: 0px; ">
                @yield('content')


                <!-- Footer Start -->
                <div class=" bg-secondary text-dark mt-5 pt-5 pb-5">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div style="margin-left: 20px;">
                            ?? Music name. All Rights Reserved. Designed by HTML Codex
                        </div>
                        <div style="margin-right: 20px;">
                            Viet Nam
                        </div>
                    </div>
                </div>
                <!-- Footer End -->






            </div>



        </div>


    </div>






    @yield('musicbox')


</body>
@yield('myjs')

</html>