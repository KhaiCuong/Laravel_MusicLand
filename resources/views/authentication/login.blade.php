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
                    <ul class="direct-list">
                        <li class="direct-item">

                            <i class="fas fa-sign-in-alt direct-icon"></i>
                            <a href="" class="text-decoration-none direct-link-1">Login</a>
                        </li>
                        <li class="direct-item">
                            <i class="fas fa-file-signature direct-icon "></i>
                            <a href="/admin.blade.php" class="text-decoration-none direct-link-2"> Register</a>
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

                        <h2 class="new-music-title mb-0"></h2>


                    </div>
                    <div class="nav-section header-sticky" style="display: flex; justify-content: space-around; margin: 10px 50px 20px 0;margin-left: 40px; margin-right: 40px;">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-md-offset-3">
                                <div class=" main-content-area">
                                    <div class="wrap-login-item ">
                                        <div class="login-form form-item form-stl" style="width: 800px; height:auto">
                                            <form name="frm-login" action="" method="POST">

                                                <fieldset class="wrap-title">
                                                    <h1 class="form-title" style="color: white; width:100%; "> LOGIN </h1>
                                                </fieldset>
                                                <fieldset class="wrap-input mt-3">
                                                    <label for="frm-login-uname" style="width:25%">Email Address:</label>
                                                    <input type="text" id="frm-login-uname" style="color: white; width:60%" name="email" placeholder="Type your email address">
                                                </fieldset>
                                                <fieldset class="wrap-inpu mt-3t">
                                                    <label for="frm-login-pass" style="width:25%">Password:</label>
                                                    <input type="password" id="frm-login-pass" style="color: white; width:60%" name="password" placeholder="************">
                                                </fieldset>

                                                <fieldset class="wrap-input mt-3 mt-3" style="display: flex; justify-content: space-between; width:85%">
                                                    <label class="remember-field">
                                                        <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                                                    </label>
                                                    <a class="link-function left-position" href="#" title="Forgotten password?">Forgotten password?</a>

                                                </fieldset>
                                                <div  style=" width:100%; text-align: center; ">
                                                <input type="submit" style="color: white; background-color: red;" class="btn btn-submit" value="Login" name="submit">

                                                </div>
                                                <!-- <input type="submit" style="color: white; background-color: gray" class="btn btn-submit" value="Register" name="register"> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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