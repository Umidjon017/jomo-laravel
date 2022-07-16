<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> @yield('title') </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/asset/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/asset/css/responsive.css" rel="stylesheet" />
</head>

<body @if(request()->path()!='/') class="sub_page" @endif>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                    <img src="asset/images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item @if(request()->path() == '/') active @endif">
                                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item @if(request()->path()=='about') active @endif">
                                <a class="nav-link" href="{{route('about')}}" > About</a>
                            </li>
                            <li class="nav-item @if(request()->path()=='cars') active @endif">
                                <a class="nav-link" href="car.html"> Cars </a>
                            </li>
                            <li class="nav-item @if(request()->path()=='portfolio') active @endif">
                                <a class="nav-link" href="portfolio.html"> Portfolio </a>
                            </li>
                            <li class="nav-item @if(request()->path()=='news') active @endif">
                                <a class="nav-link" href="news.html"> News </a>
                            </li>
                            <li class="nav-item @if(request()->path()=='contact') active @endif">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                    <div class="login_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
                        <a href="">
                            Login
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->


    @yield('content')


    <!-- info section -->
    <section class="info_section ">
        <div class="d-flex justify-content-center">
            <div class="social_container">

                <div class="number-box">
                    <a href="">
                        <img src="asset/images/phone.png" alt="">
                        <h6>
                            +01 123567894
                        </h6>
                    </a>
                </div>
                <div class="mail-box">
                    <a href="">
                        <img src="asset/images/mail.png" alt="">
                        <h6>
                            demo@gmail
                        </h6>
                    </a>
                </div>
                <div class="social-box">
                    <div class="box">
                        <a href="">
                            <img src="asset/images/facebook-logo.png" alt="">
                        </a>
                    </div>
                    <div class="box">
                        <a href="">
                            <img src="asset/images/twitter.png" alt="">
                        </a>
                    </div>
                    <div class="box">
                        <a href="">
                            <img src="asset/images/linkedin.png" alt="">
                        </a>
                    </div>
                    <div class="box">
                        <a href="">
                            <img src="asset/images/instagram-logo.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container layout_padding2 mobile_padding-top-none ">
            <div class="row">
                <div class="col-md-3">
                    <h5>
                        Contact Info
                    </h5>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                        some form, by injected humour
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>
                        open hours
                    </h5>
                    <p>
                        Monday 10:00 am to 08:00 pm <br>
                        Sunday : Off <br>
                        Monday 10:00 am to 08:00 pm <br>
                        Monday 10:00 am to 08:00 pm <br>
                        Monday 10:00 am to 08:00 pm
                    </p>

                </div>
                <div class="col-md-3">
                    <h5>

                        Useful link
                    </h5>
                    <ul>
                        <li>
                            <a href="">
                                There are many
                            </a>
                        </li>
                        <li>
                            <a href="">
                                variations of
                            </a>
                        </li>
                        <li>
                            <a href="">
                                passages of Lorem
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Ipsum available,
                            </a>
                        </li>
                        <li>
                            <a href="">
                                but the injected
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">

                    <div class="subscribe_container">
                        <h5>
                            Newsletter
                        </h5>
                        <div class="form_container">
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->


    <!-- footer section -->
    <footer class="container-fluid footer_section">
        <p>
            &copy; <span id="getcurrentYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </footer>
    <!-- footer section -->


    <script type="text/javascript" src="asset/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script type="text/javascript" src="asset/js/custom.js"></script>

</body>

</html>

