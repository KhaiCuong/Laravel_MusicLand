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

                            <i class="fas fa-credit-card direct-icon"></i>
                            <a href="{{ route('mycard')  }}" class="text-decoration-none direct-link-1">My Card</a>
                        </li>
                        <li class="direct-item">
                            <i class="fas fa-stopwatch direct-icon"></i>
                            <a href=" {{ route('extend') }}" class="text-decoration-none direct-link-2">Extend Card</a>
                        </li>
                    </ul>


                </div>

            </div>

        </div>
        <div class="col-lg-10" style="padding-left: 0px; padding-right:0;  height: 800px ;">
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

            <div style="display: flex; justify-content: center; align-items: center; height: 650px;">

                <div class="card-group" style="width: 90%;  height:80% ; display: flex; justify-content: center;">
                    <form action="">
                        <div class="card text-center my-memcard" style="width: 18rem;" id="silver">
                            <div style="">
                                <img src="img/silver-logo.png" alt="" style="height: 200px; width: 200px; border-radius: 50%; ">
                            </div>
                            <div class="card-body card-content">
                                <h5 class="card-title" style="font-size: 30px; font-weight: 600; color: #580900;">SILVER</h5>
                                <p class="card-text" style="color: #3e2744; font-size: 25px; font-weight: 500; margin-bottom: 0;padding-bottom:74px">GET 1 MONTH</p>
                                <p class="card-text" style="color: #3e2744; font-size: 20px; font-weight: 500; padding-top: 10px; border-top: 1px solid black; width: 100%;">$3.99 / MO </p>
                                <input type="submit" class="btn btn-primary card-btn" style="width: 100%;" value="GET MEMBER CARD input" name="extend">
                            </div>
                        </div>
                    </form>

                    <form action="">
                        <div class="card text-center my-memcard" style="width: 18rem; " id="gold">
                            <div style="">
                                <img src="img/gold-logo.png" alt="" style="height: 200px; width: 200px; border-radius: 50%; ">
                            </div>
                            <div class="card-body card-content">
                                <h5 class="card-title" style="font-size: 30px; font-weight: 600; color: #580900;">GOLD</h5>
                                <p class="card-text" style="color: #3e2744; font-size: 25px; font-weight: 500; margin-bottom: 0;">GET 6 MONTHS</p>
                                <p class="card-text" style="color: #8e6161; font-size: 20px; font-weight: 500;  margin-bottom: 0;"><del>$23.94</del> </p>
                                <p class="card-text" style="color: #3e2744; font-size: 20px; font-weight: 500;"> $17.9 </p>
                                <p class="card-text" style="color: #3e2744; font-size: 20px; font-weight: 500; padding-top: 10px; border-top: 1px solid black; width: 100%;">$2.99 / MO </p>
                                <input type="submit" class="btn btn-primary card-btn" style="width: 100%;" value="GET MEMBER CARD OFF 25%" name="extend">

                            </div>
                        </div>
                    </form>
                    <form action="">
                        <div class="card text-center my-memcard" style="width: 18rem; " id="platinum">
                            <div style="">
                                <img src="img/platinum-logo.png" alt="" style="height: 200px; width: 200px; border-radius: 50%; ">
                            </div>
                            <div class="card-body card-content">
                                <h5 class="card-title" style="font-size: 30px; font-weight: 600; color: #580900;">PLATINUM </h5>
                                <p class="card-text" style="color: #3e2744; font-size: 25px; font-weight: 500; margin-bottom: 0;">GET 12 MONTHS</p>
                                <p class="card-text" style="color: #8e6161; font-size: 20px; font-weight: 500;  margin-bottom: 0;"><del>$47.88</del> </p>
                                <p class="card-text" style="color: #3e2744; font-size: 20px; font-weight: 500;"> $25.2</p>
                                <p class="card-text" style="color: #3e2744; font-size: 20px; font-weight: 500; padding-top: 10px; border-top: 1px solid black; width: 100%;">$2.1/ MO </p>
                                <input type="submit" class="btn btn-primary card-btn" style="width: 100%;" value="GET MEMBER CARD OFF 50%" name="extend">
                            </div>
                        </div>
                    </form>

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



@section('myjs')


@endsection