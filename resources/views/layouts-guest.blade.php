<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Barber Shop')</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="HipstyleBarber-DOC/css/font-awesome.min.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/" style="margin-top: 3px;"> <img src="img/barbershop.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#cita">Partar cita</a>
                                </li>
                                {{--<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Servicio
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{ route('service.indexCorte') }}">Cortes</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>

                                    </div>
                                </li>--}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('client.formCreate') }}">Registrarse</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Barber Shop</h2>
                            {{-- <p>home <span class="ti-angle-double-right"></span>Service</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

   @yield('content')
    <!-- Service part end-->

    <!--::review_part start::-->
   {{--  <section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--::review_part end::-->
    @include('loginModal')
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-sm-6 col-lg-4">
                    <div class="single-footer-widget footer_1">
                        <h4>Sobre Nosotros</h4>
                        <p>Barberia con los mejores cortes que encontraras en la ciudad de cartagena </p>
                        {{-- <p class="mt-3">The more effort you put into improving your skills, the bigger the stil now</p> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contactenos</h4>
                        <div class="contact_info">
                            <span class="ti-home"></span>
                            <h5>Cartagena, Colombia</h5>
                            <p>659, Rocky beach bullevard, santa monica, Rocky beach, USA.</p>
                        </div>
                        <div class="contact_info">
                            <span class="ti-headphone-alt"></span>
                            <h5>+57 342583910332</h5>
                            <p>De lunes a viernes de 6:00 AM a 7:00 PM  </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-8 col-lg-4">
                    <div class="single-footer-widget footer_3">
                        <h4>Redes sociales</h4>
                        <p><span class="fa fa-facebook-square fa-2x"></span> facebook.com</p>
                        <p><span class="fa fa-instagram fa-2x"></span> instagram.com</p>
                       {{--  <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos Reservados <i class="fa fa-heart-o" aria-hidden="true"></i> {{-- by  <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
