<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sixto Rodriguez | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />

</head>

<body>
    <header id="myHeader">
        <!-- mobile-nav -->
        <div class="mobile-menu">
            <div class="mob-main-logo-wrapper">
                <img src="{{ asset('assets/Images/logo.png')}}" class="img-fluid" alt="logo-img">
            </div>
            <div class="circle" id="navbar"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <div class="nveMenu text-left">
                <div class="mobile-cross close-btn-nav" id="navbar"><i class="fas fa-times" aria-hidden="true"></i>
                </div>
                <div>
                    <a href="{{ route('home.page') }}/"><img src="{{ asset('assets/Images/logo.png')}}"
                            class="img-fluid" alt="main logo"></a>
                </div>
                <ul>
                    <li><a class="active" href="{{ route('account.page') }}">Accounting and Tax</a></li>
                    <li class="dropdowns-menu ">
                        <a href="{{ route('migracion.page')}}">Migracion</a>
                    </li>
                    <li class="dropdowns-menu ">
                        <a href="{{ route('notarial.page')}}">Notarial</a>
                    </li>
                    <li><a href="javascript:;">Pricing</a></li>
                    <li><a href="javascript:;">About us</a></li>
                    <li><a href="{{ route('company.profile.page')}}" class="brown-btn btn">Form a Company</a></li>
                    <li><a href="{{ route('login.page')}}">Sign Up</a></li>
                </ul>
            </div>
            <div class="overlay"></div>
        </div>
        <!-- mobile-nav-end -->
        <!-- main-header-for-website-start -->
        <div class="main-header-web">
            <!-- main-header-menu-for-website-start -->
            <div class="header-main-menu-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="main-logo-wrapper">
                                <a href="{{ route('home.page') }}">
                                    <img src="{{ asset('assets/Images/logo.png')}}" class="img-fluid" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 menu-nav m-auto">
                            <ul>
                                <li><a class="active" href="{{ route('account.page') }}">Accounting and Tax</a></li>
                                <li class="dropdowns-menu ">
                                    <a href="{{ route('migracion.page') }}">Migracion</a>
                                </li>
                                <li class="dropdowns-menu ">
                                    <a href="{{ route('notarial.page') }}">Notarial</a>
                                </li>
                                <li><a href="{{ route('pricing.page') }}">Pricing</a></li>
                                <li><a href="{{ route('about.page') }}">About us</a></li>
                                <li><a href="{{ route('company.profile.page') }}" class="brown-btn btn">Form a
                                        Company</a></li>
                                <li><a href="{{ route('login.page') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-header-menu-for-website-end -->
        </div>
        <!-- main-header-for-website-start -->
    </header>
    <!-- end -->
    <!-- form section start-->
    <section class="form1 bg-grey py-5">
        <div class="container">
            <div class="form-wrapper  bg-white">
                <div class="figure">
                    <img src="{{ asset('assets/Images/logo.png')}}" class="img-fluid text-center" alt="logo">
                </div>
                <form class="pt-3" method="post" action="{{ route('customer.register') }}">
                    @csrf
                    <div class="form-group pb-3">
                        <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text"
                                placeholder="First Name" required class="" name="firstName"> </div>
                    </div>
                    <div class="form-group py-1 pb-3">
                        <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text"
                                placeholder="Last Name" required class="" name="lastName">
                            <!-- <button class="btn bg-white text-muted">
                                <span class="far fa-eye-slash"></span> </button> -->
                        </div>
                    </div>
                    <div class="form-group py-1 pb-3">
                        <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text"
                                placeholder="Email" required class="" name="email">
                            <!-- <button class="btn bg-white text-muted">
                                <span class="far fa-eye-slash"></span> </button> -->
                        </div>
                    </div>
                    <div class="form-group py-1 pb-3">
                        <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text"
                                placeholder="Contact Number" required class="" name="contactNumber">
                            <!-- <button class="btn bg-white text-muted">
                                <span class="far fa-eye-slash"></span> </button> -->
                        </div>
                    </div>
                    <div class="form-group py-1 pb-3">
                        <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text"
                                placeholder="Residential Address" required class="" name="address">
                            <!-- <button class="btn bg-white text-muted">
                                <span class="far fa-eye-slash"></span> </button> -->
                        </div>
                    </div>

                    <div class="form-group py-1 pb-3">
                        <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text"
                                placeholder="Password" required class="" name="password">
                            <!-- <button class="btn bg-white text-muted">
                                <span class="far fa-eye-slash"></span> </button> -->
                        </div>
                    </div>

                    <div class="d-flex align-items-start justify-content-between">
                    </div> <button class="btn btn-block text-center my-3">Sign Up</button>
                    <div class="text-center pt-3 text-muted">Don't have an account? <a href="/index.php/customer/login"
                            class="text-decoration-underline">Login</a></div>
                </form>
            </div>
        </div>
    </section>
    <!-- form section end -->

    <!-- footer start  -->
    <footer class="bg-blue text-white px-5 desktop-home-fotter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h4>Start a Business</h4>
                        <ul>
                            <li><a href="/index.php/company">Form a Company</a></li>
                            <li><a href="/index.php/account-tax">Accounting & Tax</a></li>
                            <li><a href="/index.php/migration">Migration</a></li>
                            <li><a href="/index.php/notarial">Notarial</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="/index.php/company">Form a Company</a></li>
                            <li><a href="/index.php/account-tax">Accounting & Tax Services</a></li>
                            <li><a href="/index.php/migration">Migration</a></li>
                            <li><a href="/index.php/notarial">Notarial</a></li>
                            <li><a href="/index.php/pricing">Pricing</a></li>
                            <li><a href="/index.php/about-us">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="/index.php/faq">FAQ</a></li>
                            <li><a href="javascript:;">Legal</a></li>
                            <li><a href="javascript:;">Privacy</a></li>
                            <li><a href="javascript:;">Press</a></li>
                            <li><a href="javascript:;">Free Consultation</a></li>
                            <li><a href="javascript:;">Site Map</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h4>Newsletter</h4>
                        <p>Subscribe our newsletter to get our latest update & news</p>
                        <form id="subscribe_newsletter" class="form-horizontal newsletter-subscription">
                            <div id="newsletter-message"></div>
                            <div class="form-row d-flex w-100">
                                <input type="text" id="email" name="email" placeholder="Your mail address">
                                <button type="submit" class="btn brown-btn btn-xs"><i
                                        class="fa-solid fa-paper-plane"></i></button>
                                <div class="error-message" style="color:red;"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border">
        <div class="copyright">
            <div class="copyrightcontent">
                <p class="m-0"> Copyright © Sixto Roddriguez. | Website Design & Developed By Just Digital </p>
            </div>
            <div class="footer-links my-0">
                <ul>
                    <li><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a></li>

                </ul>
            </div>
        </div>
    </footer>

    <section class="py-5 faq-wrapper mobile-home-fotter">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-12">
                    <!-- FAQ Accordion 1-->
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item py-3">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Start
                                    a Business
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="/index.php/company">Form a Company</a></li>
                                            <li><a href="/index.php/account-tax">Accounting & Tax</a></li>
                                            <li><a href="/index.php/migracion">Migracion</a></li>
                                            <li><a href="/index.php/notarial">Notarial</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">Quick Links</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="/index.php/company">Form a Company</a></li>
                                            <li><a href="/index.php/account-tax">Accounting & Tax Services</a></li>
                                            <li><a href="/index.php/migracion">Migracion</a></li>
                                            <li><a href="/index.php/notarial">Notarial</a></li>
                                            <li><a href="/index.php/pricing">Pricing</a></li>
                                            <li><a href="/index.php/about-us">About Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">Support</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="/index.php/faq">FAQ</a></li>
                                            <li><a href="javascript:;">Legal</a></li>
                                            <li><a href="javascript:;">Privacy</a></li>
                                            <li><a href="javascript:;">Press</a></li>
                                            <li><a href="javascript:;">Free Consultation</a></li>
                                            <li><a href="javascript:;">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-mobile-form-text py-3">
                            <h5 class="accordion-header" id="headingfour">Subscribe our newsletter to get our latest
                                update & news</h5>
                            <form id="subscribe_newsletter "
                                class="form-horizontal newsletter-subscription footer-mobile-form">
                                <div id="newsletter-message"></div>
                                <div class="footer-mobile-form">
                                    <input type="text" id="email" name="email" placeholder="Your mail address">
                                    <button type="submit" class="btn brown-btn btn-xs"><i
                                            class="fa-solid fa-paper-plane"></i></button>
                                    <div class="error-message" style="color:red;"></div>
                                </div>
                            </form>
                        </div>
                        <div class="copyright">
                            <div class="copyrightcontent py-3">
                                <p class="m-0"> Copyright © Sixto Roddriguez. | Website Design & Developed By Just
                                    Digital </p>
                            </div>
                            <div class="footer-links my-0">
                                <ul>
                                    <li><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- footer end -->


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="assets/js/jquery.fancybox.min.js"></script> -->
    <!-- <script src="assets/js/popper-min.js"></script> -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <!-- <script src="assets/js/owl.carousel.min.js"></script> -->
    <!-- <script src="assets/js/custom.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</html>