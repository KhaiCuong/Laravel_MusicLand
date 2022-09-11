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
    <div class="row bg-color " style="padding: 0; margin: 0">
        <!--  *** -->

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

            <div class="row mt-4 ml-3 mr-3">

                <div class="avt col-lg-4 ">
                    <img src="img/sontung.jpg" alt="img" class="img-avt vendor-item border p-4">
                </div>
                <div class="col-lg-8" style="padding: 0;">
                    <div style=" display: flex; align-items:center;">

                        <i class="fas fa-music mr-3" style="font-size: 30px; font-weight: 900; color: white; "></i>
                        <H2 style="font-size: 30px; font-weight: 900; color: white; margin-bottom: 0;">Playlist name</H2>
                        <p style="margin: 0 0 0 20px;"> ( Artist name )</p>
                    </div>

                    <div class="mt-5" style="width: 680px;">
                        <p>Information : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos perspiciatis culpa a, quidem doloremque mollitia id suscipit eligendi architecto repellat, soluta ullam perferendis ipsam eveniet aspernatur nulla ducimus totam laudantium.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum rem, nemo voluptatibus consectetur magni quod quae quas ratione debitis soluta voluptatem eveniet perspiciatis facere eius animi omnis vitae libero delectus.
                        </p>
                    </div>

                </div>

                <ul class="mt-5 direct-list " style="margin-left: 15px ;">
                    <li class="mb-2">
                        <div style=" color:#6c757d; height: 50px; display: flex; align-items: center; justify-content: space-between;  border: white 1px solid; background-color: rgba(0,0,0,0.3);">

                            <div style="display: flex; height:100%; align-items: center;">
                                <p style="margin: 0 2px 0 8px;">1. </p>
                                <p style="margin-bottom: 0;">Music Name - Artis-Name</p>
                            </div>
                            <div style="display: flex; height:100%; align-items: center; font-size: 20px;">


                                <i class="far fa-heart" style="margin-right: 12px;"></i>
                                <i class="fas fa-long-arrow-alt-down" style="margin-right: 12px;"></i>
                                <i class="far fa-share-square" style="margin-right: 12px;"></i>



                            </div>


                        </div>
                    </li>
                    <li class="mb-2">
                        <div style=" color:#6c757d; height: 50px; display: flex; align-items: center; justify-content: space-between;  border: white 1px solid; background-color: rgba(0,0,0,0.3);">

                            <div style="display: flex; height:100%; align-items: center;">
                                <p style="margin: 0 2px 0 8px;">2. </p>
                                <p style="margin-bottom: 0;">Music Name - Artis-Name</p>
                            </div>
                            <div style="display: flex; height:100%; align-items: center; font-size: 20px;">
                                <i class="far fa-heart" style="margin-right: 12px;"></i>
                                <i class="fas fa-long-arrow-alt-down" style="margin-right: 12px;"></i>
                                <i class="far fa-share-square" style="margin-right: 12px;"></i>



                            </div>


                        </div>
                    </li>
                    <li class="mb-2">
                        <div style=" color:#6c757d; height: 50px; display: flex; align-items: center; justify-content: space-between;  border: white 1px solid; background-color: rgba(0,0,0,0.3);">

                            <div style="display: flex; height:100%; align-items: center;">
                                <p style="margin: 0 2px 0 8px;">3. </p>
                                <p style="margin-bottom: 0;">Music Name - Artis-Name</p>
                            </div>
                            <div style="display: flex; height:100%; align-items: center; font-size: 20px;">
                                <i class="far fa-heart" style="margin-right: 12px;"></i>
                                <i class="fas fa-long-arrow-alt-down" style="margin-right: 12px;"></i>
                                <i class="far fa-share-square" style="margin-right: 12px;"></i>



                            </div>


                        </div>
                    </li>
                    <li class="mb-2">
                        <div style=" color:#6c757d; height: 50px; display: flex; align-items: center; justify-content: space-between;  border: white 1px solid; background-color: rgba(0,0,0,0.3);">

                            <div style="display: flex; height:100%; align-items: center;">
                                <p style="margin: 0 2px 0 8px;">4. </p>
                                <p style="margin-bottom: 0;">Music Name - Artis-Name</p>
                            </div>
                            <div style="display: flex; height:100%; align-items: center; font-size: 20px;">
                                <i class="far fa-heart" style="margin-right: 12px;"></i>
                                <i class="fas fa-long-arrow-alt-down" style="margin-right: 12px;"></i>
                                <i class="far fa-share-square" style="margin-right: 12px;"></i>



                            </div>


                        </div>
                    </li>






                </ul>

            </div>
            <div class="mt-5">
                <div class="pl-5 m-3 mb-4" style="display: flex;justify-content: space-between;  align-items: center;  ">
                    <h2 class="new-music-title mb-0">Recent Songs</h2>
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
            </div>

            <div>

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