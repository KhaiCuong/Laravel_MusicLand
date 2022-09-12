<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
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


        <!-- Duong Khai Cuong -->

        <div class="col-lg-2" style="background-color:#1e0022; padding-right:0;">
            <div style="top:0;  position: sticky;  width: 100%;">
                <div class="d-none d-lg-block" style="margin: 15px 0 30px 8px;">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0 display-5 " style="color: white; font-size:25px ;">
                            <image class=" img-logo border mr-1" src="img/logo.jpg"></image>
                            <p class="web-name"> MusicLand</p>

                        </h1>
                    </a>
                </div>
                <div class=" mt-5" style="padding-left:0;">
                    <ul class="direct-list">
                        <li class="direct-item">
                            <i class="fas fa-chart-line direct-icon"></i>
                            <a href="" class="text-decoration-none direct-link-1">Top Trending</a>
                        </li>
                        <li class="direct-item">
                            <i class="fas fa-heart direct-icon "></i>
                            <a href="/admin.blade.php" class="text-decoration-none direct-link-2"> My Library</a>
                        </li>

                    </ul>


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

            <div class=" mt-3" style="padding-left: 0px; ">

                <div style="padding: 30px 0 10px 0; ">
                    <div class="site-section bg-left-half mb-5 ">
                        <div class="container owl-2-style " style="padding: 0; ">
                            <div class="owl-carousel owl-2" style="width: 100%;">
                                <div class="media-29101">
                                    <a href="#"><img src="carousel/images/img_3.jpg" alt="Image" class="img-fluid" style="border-radius: 10px;"></a>
                                    <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
                                </div>
                                <div class="media-29101">
                                    <a href="#"><img src="carousel/images/img_3.jpg" alt="Image" class="img-fluid" style="border-radius: 10px;"></a>
                                    <h3><a href="#">Beatae Doloribu</a></h3>
                                </div>
                                <div class="media-29101">
                                    <a href="#"><img src="carousel/images/img_3.jpg" alt="Image" class="img-fluid" style="border-radius: 10px;"></a>
                                    <h3><a href="#">Accusantium Eius Soluta</a></h3>
                                </div>
                                <div class="media-29101">
                                    <a href="#"><img src="carousel/images/img_3.jpg" alt="Image" class="img-fluid" style="border-radius: 10px;"></a>
                                    <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
                                </div>
                                <div class="media-29101">
                                    <a href="#"><img src="carousel/images/img_3.jpg" alt="Image" class="img-fluid" style="border-radius: 10px;"></a>
                                    <h3><a href="#">Beatae Doloribu</a></h3>
                                </div>
                                <div class="media-29101">
                                    <a href="#"><img src="carousel/images/img_3.jpg" alt="Image" class="img-fluid" style="border-radius: 10px;"></a>
                                    <h3><a href="#">Accusantium Eius Soluta</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



                <script src="{{ asset('carousel/js/jquery-3.3.1.min.js') }}"></script>
                <script src="{{ asset('carousel/js/popper.min.js') }}"></script>
                <script src="{{ asset('carousel/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('carousel/js/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('carousel/js/main.js') }}"></script>





                <!-- <div class="row px-xl-5 pb-3">

                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                            <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                        </div>
                    </div>
                </div> -->
            </div>


            <div>
                <div class="pl-5 m-3 mb-4" style="display: flex;justify-content: space-between;  align-items: center;  ">
                    <h2 class="new-music-title mb-0">Fresh new music</h2>
                    <p style="font-size: 20px ; font-weight: 600; margin: 0 14px 0 0 ;"> See all</p>
                </div>
                <div class="row px-xl-5 pb-3 mt-3" style="display: flex; justify-content: space-around;">
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3 border-radius-6">
                            <img class="img-fluid border-radius-6" src="img/cat-1.jpg" alt="">
                        </a>
                        <h5 class=" mt-2 " style="color: white;">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </a>
                        <h5 class=" mt-2 " style="color: white;">Music </h5>
                    </div>

                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </a>
                        <h5 class=" mt-2 " style="color: white;">Music </h5>
                    </div>

                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </a>
                        <h5 class=" mt-2 " style="color: white;">Music </h5>
                    </div>

                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </a>
                        <h5 class=" mt-2 " style="color: white;">Music </h5>
                    </div>
                </div>




                <div class=" offer pt-5">
                    <div class="pl-5 m-3 mb-4 ">
                        <h2 class="new-music-title mb-0">Trending now</h2>

                    </div>
                    <div class="row px-xl-5">
                        <div class="col-md-6 pb-4">
                            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5" style="  background: linear-gradient(80deg,rgb(70, 138, 164),rgb(0, 128, 89) , rgb(101, 0, 87));">
                                <img src="img/offer-1.png" alt="">
                                <div class="position-relative" style="z-index: 1;">
                                    <h2 class="mb-4 font-weight-semi-bold" style="font-size: 28px; color:white">Top songs VietNam</h2>
                                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Listen Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-4">
                            <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5" style="background: linear-gradient(250deg,rgb(70, 138, 164),rgb(107, 1, 1) ,rgb(116, 0, 102));">
                                <img src="img/offer-2.png" alt="">
                                <div class="position-relative" style="z-index: 1;">
                                    <h2 class="mb-4 font-weight-semi-bold" style="font-size: 28px; color:white">Top Song Global</h2>
                                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Listen Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="pl-5 m-3 mb-4 pt-5" style="display: flex;justify-content: space-between;  align-items: center;  ">
                    <h2 class="new-music-title mb-0">Emerging Artists</h2>
                    <p style="font-size: 20px ; font-weight: 600; margin: 0 14px 0 0 ;"> See all</p>
                </div>
                <div class="row px-xl-5 pb-3 mt-3" style="display: flex; justify-content: space-around;">
                    <div class="col-lg-2 col-md-6 pb-1 " style="  background-color: rgba(180, 169, 169, 0.1);">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3 border-radius-6">
                            <img class="img-fluid border-radius-50 mt-3" style="height: 180px; width: 180px;" src="img/sontung.jpg" alt="">
                        </a>
                        <h5 class=" mt-4" style="color: white; text-align: center;">Artists </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1" style="  background-color: rgba(180, 169, 169, 0.1);">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3 border-radius-6">
                            <img class="img-fluid border-radius-50 mt-3" style="height: 180px; width: 180px;" src="img/sontung.jpg" alt="">
                        </a>
                        <h5 class=" mt-4" style="color: white; text-align: center;">Artists </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1" style="  background-color: rgba(180, 169, 169, 0.1);">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3 border-radius-6">
                            <img class="img-fluid border-radius-50 mt-3" style="height: 180px; width: 180px;" src="img/sontung.jpg" alt="">
                        </a>
                        <h5 class=" mt-4" style="color: white; text-align: center;">Artists </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1" style="  background-color: rgba(180, 169, 169, 0.1);">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3 border-radius-6">
                            <img class="img-fluid border-radius-50 mt-3" style="height: 180px; width: 180px;" src="img/sontung.jpg" alt="">
                        </a>
                        <h5 class=" mt-4" style="color: white; text-align: center;">Artists </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1" style="  background-color: rgba(180, 169, 169, 0.1);">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3 border-radius-6">
                            <img class="img-fluid border-radius-50 mt-3" style="height: 180px; width: 180px;" src="img/sontung.jpg" alt="">
                        </a>
                        <h5 class=" mt-4" style="color: white; text-align: center;">Artists </h5>
                    </div>
                </div>

                <div class="pl-5 m-3 mb-4 pt-5" style="display: flex;justify-content: space-between;  align-items: center;  ">
                    <h2 class="new-music-title mb-0">Emerging Artists</h2>
                    <p style="font-size: 20px ; font-weight: 600; margin: 0 14px 0 0 ;"> See all</p>
                </div>
                <div class="row px-xl-5 pb-3 mt-3" style="display: flex; justify-content: space-around;">
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>
                    <div class="col-lg-2 col-md-6 pb-1">
                        <a href="" class="cat-img position-relative overflow-hidden mb-3" style=" width:100% ;">
                            <img class="img-fluid" src="img/product-3.jpg" style="height: 220px;  width:100% ; object-fit: fill;" alt="">
                        </a>
                        <h5 class=" pt-2 pb-2" style="color: white; background-color: rgba(180, 169, 169, 0.4); ">Music </h5>
                    </div>



                </div>
            </div>


            <div>
                <!-- Vendor Start -->
                <div class=" py-5">
                    <div class="row px-xl-5">
                        <div class="col">
                            <div class="owl-carousel vendor-carousel">
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-1.jpg" alt="">
                                </div>
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-2.jpg" alt="">
                                </div>
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-3.jpg" alt="">
                                </div>
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-4.jpg" alt="">
                                </div>
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-5.jpg" alt="">
                                </div>
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-6.jpg" alt="">
                                </div>
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-7.jpg" alt="">
                                </div>
                                <div class="vendor-item border p-4">
                                    <img src="img/vendor-8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vendor End -->

                <!-- Footer Start -->
                <div class=" bg-secondary text-dark mt-5 pt-5">
                    <div class="row px-xl-5 pt-5">
                        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                            <a href="" class="text-decoration-none">
                                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                            </a>
                            <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-md-4 mb-5">
                                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                        <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                        <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                                        <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                                        <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                                        <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                        <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                        <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                                        <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                                        <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                                        <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-light mx-xl-5 py-4">
                        <div class="col-md-6 px-xl-0">
                            <p class="mb-md-0 text-center text-md-left text-dark">
                                &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                                by
                                <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                                Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                        <div class="col-md-6 px-xl-0 text-center text-md-right">
                            <img class="img-fluid" src="img/payments.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


            </div>



        </div>


        <div class="align-items-center py-3 top-bar" style="background-color: rgba(0, 0, 0, 0.9);z-index:100; height: 100px; top:0;  position: sticky; left:0 ; bottom: 0; width:100%;">



            <div style="display: flex; margin: 0 34px; justify-content: space-between; align-items: center; width:100%; ">
                <div style="display: flex; height:100%; align-items: center; width: 30%; ">
                    <img src="img/vendor-8.jpg" alt="song img" style="width: 50px; height: auto; margin-right: 10px;">
                    <p style="margin-bottom: 0; margin-right: 8px; color: white; font-weight: bold;">Music Name</p>
                    <p style="margin-bottom: 0; margin-right: 8px; color: white;">-</p>
                    <p style="margin-bottom: 0; color: white; font-size:12px"> Artis Name</p>
                </div>


                <div id="content" style="height: 60px; width:50%; position:relative">
                    <div id="range">
                        <input type="range" id="range-val" value="46" min="0" max="143">
                        <!-- <div id='tip'>Some tip</div> -->
                    </div>

                    <div id="time">
                        <p>0:46</p>
                    </div>
                    <div id="buttons">
                        <i class="fa fa-step-backward fa-3x" style="padding-left: 0;"></i>
                        <i class="fa fa-pause fa-3x step"></i>
                        <i class="fa fa-step-forward fa-3x"></i>
                    </div>
                    <div id="total-time">
                        <p>2:23</p>
                    </div>
                </div>



                <div style="display: flex; height:100%; align-items: center; justify-content: flex-end; font-size: 20px;  width: 30%; ">
                    <i class="far fa-heart" style="margin-right: 20px;"></i>
                    <i class="fas fa-long-arrow-alt-down" style="margin-right: 20px;"></i>
                    <i class="far fa-share-square"></i>
                </div>

            </div>


            <!-- <div style="width: 100%; height: auto;">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <div id="overlay"></div>
            <header>
                <div id="menu-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="song-info">
                    <h1>Song name</h1>
                    <p>Song artist</p>
                </div>
                <div id="search">
                    <i class="fa fa-search fa-2x"></i>
                </div>
            </header>
           
            <footer>
                <div id="repeat">
                    <i class="fa fa-repeat"></i>
                </div>
                <div id="random">
                    <i class="fa fa-random"></i>
                </div>
            </footer> -->


        </div>

    </div>






    <script>
        $(document).ready(function() {
            $('#range-val').on("change mousemove", function() {
                //Lets change it in time mode
                var original_time = $(this).val();
                var new_time = formatSeconds(original_time);
                $("#time p").text(new_time);
            });
            /*
            ANOTHER GREAT WORK BY SOMEONE...
            http://jsfiddle.net/CYSeY/4/
            i just modify it
            */
            var r = document.getElementById('range-val');
            var max = r.getAttribute('max');
            var min = r.getAttribute('min');
            var w = r.clientWidth;
            //w += r.offsetLeft;
            var isDragging = false;

            var moveTip = (function(e) {
                if (isDragging) {
                    var posPerc = (r.value / max) * 100;
                    var pixPos = (posPerc / 100) * w - 40;
                    /* pixPos += r.offsetLeft;*/

                    document.getElementById('tip').style.display = 'block';
                    document.getElementById('tip').style.left = pixPos + 'px';
                }
            });

            $("#range-val").mousemove(function() {
                isDragging = true;
                var range_val = document.getElementById("range-val").value;
                document.getElementById('tip').innerHTML = formatSeconds(range_val);
                r.addEventListener('mousemove', moveTip, false);
            });

            $("body").mouseup(function(e) {
                isDragging = false;
                r.removeEventListener('mousemove', moveTip);
                document.getElementById('tip').style.display = 'none';
            });
        });
        /*
        FUNCTIONS (I just modify it)
        http://stackoverflow.com/a/17781037
        */
        function formatSeconds(seconds) {
            var date = new Date(1970, 0, 1);
            date.setSeconds(seconds);
            return date.toTimeString().replace(/.*(\d{2}:\d{2}).*/, "$1");
        }
    </script>


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