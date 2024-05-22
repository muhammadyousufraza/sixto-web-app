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
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" /> -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
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
                    <a href="{{ route('home.page') }}"><img src="{{ asset('assets/Images/logo.png')}}" class="img-fluid" alt="main logo"></a>
                </div>
                <ul>
                     <li><a class="active" href="{{ route('account.page') }}">Accounting and Tax</a></li>
                    <li class="dropdowns-menu ">
                        <a href="{{ route('migracion.page')}}" >Migracion</a>
                    </li>
                    <li class="dropdowns-menu ">
                         <a href="{{ route('notarial.page')}}">Notarial</a>
                    </li>
                    <li><a href="javascript:;">Pricing</a></li>
                    <li><a href="javascript:;">About us</a></li>
                    <li><a href="{{ route('company.profile.page')}}" class="brown-btn btn">Form a Company</a></li>
                    <li><a href="{{ route('login.page')}}">Login</a></li>
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
                                    <img src="{{ asset('assets/Images/logo.png')}}"  class="img-fluid" alt="logo-img">
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
                                <li><a href="{{ route('company.profile.page') }}" class="brown-btn btn">Form a Company</a></li>
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
    <!-- section 1 start -->
    <section class="sec1 bg-image py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="inner-wrap">
                        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ullam tempora possimus
                            officia
                            repellendus aliquid et optio ad commodi? Sit in laboriosam cum at recusandae explicabo
                            ducimus
                            maxime nobis laborum!</p>
                        <form action="">
                            <input type="text" placeholder="Enter your preferred business name">
                            <a href="{{ route('company.profile.page') }}" class="brown-btn btn">start now</a>
                        </form>
                        <p>Not sure what type of business entity to start? <a href="javascript:;">Explore all your
                                options.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 end -->
    <!-- section 2 start -->
    <section class="sec2 packages py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-12">
                    <div class="content">
                        <h2>compare packages</h2>
                        <p>Lorem, ipsum dolor sit amet consec tetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="box">
                        <h3>Starter</h3>
                        <div class="box-content">
                            <h4>start now</h4>
                            <div class="box-inner">
                                <span><sup>$</sup>0</span>
                                <p>plus state fees</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="box">
                        <h3>form a campany</h3>
                        <div class="box-content bg-brown">
                            <h4>start now</h4>
                            <div class="box-inner">
                                <span><sup>$</sup>199<span>/yr</span></span>
                                <p>plus state fees</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="box">
                        <h3>Premium</h3>
                        <div class="box-content">
                            <h4>start now</h4>
                            <div class="box-inner">
                                <span><sup>$</sup>349<span>/yr</span></span>
                                <p>plus state fees</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 end -->
    <!-- section 3 start -->
    <section class="sec3 bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>top features</h2>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">File in 2 to 3 weeks**</th>
                            <th class="text-center">File in 1 to 5 days**</th>
                            <th class="text-center">File in 1 to 5 days**</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>standard LLC filing</td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="brown-check text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>100% accuracy guarantee</td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="brown-check text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>Worry-Fee Compliance</td>
                            <td class="text-center">1 year free, then $199/yr*</td>
                            <td class="brown-check text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>operating agreement</td>
                            <td class="text-center">+$99</td>
                            <td class="brown-check text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>our fasted filing speed</td>
                            <td class="text-center">+$79</td>
                            <td class="brown-check text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>employer ID number (EIN)</td>
                            <td class="text-center">+$99</td>
                            <td class="brown-check text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>business documents</td>
                            <td class="text-center">+$99</td>
                            <td class="brown-check text-center">+$99</td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>business website builder</td>
                            <td class="text-center">+$15/mon</td>
                            <td class="text-center">+$15/mon</td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>domain name with privacy</td>
                            <td class="text-center">+$35/yr</td>
                            <td class="text-center">+$35/yr</td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-circle-info"></i>business email address</td>
                            <td class="text-center">+$15/mo</td>
                            <td class="text-center">+$25/mo</td>
                            <td class="text-center"><i class="fa-sharp fa-solid fa-check"></i></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- section 3 end -->
    <!-- section 4 start -->
    <section class="sec4 logo-section bg-grey">
        <div class="container">
            <div class="text-center">
                <h2>Proudly recommended by our affiliate partners</h2>
                <div class="log-wrap">
                    <ul>
                        <li><img src="{{ asset('assets/Images/forbes.png')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/forbes.png')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/forbes.png')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/forbes.png')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/forbes.png')}}" class="img-fluid" alt="Forbes"></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- section 4 end -->
    <!-- section 5 start -->
    <section class="sec5 bg-blue">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 m-auto">
                    <div class="content">
                        <h2>Compare LLC vs. Incorporation:</h2>
                        <h2>Which is Better?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse unde, amet excepturi quasi sunt
                            reprehenderit aliquam fugiat sit illum repudiandae voluptate? Reiciendis, quisquam porro!
                            Veniam voluptatem quaerat laborum maiores odit!</p>
                        <a href="{{ route('company.page')}}" class="brown-btn btn px-4">learn more</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-0">
                    <img src="{{ asset('assets/Images/incorporation.png')}}" class="img-fluid w-100" alt="Incorporation">
                </div>
            </div>
        </div>
    </section>
    <!-- section 5 end -->
    <!-- section 6 start -->
    <section class="sec6 bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="head">
                    <h2>"This is your life. You want to get it right."</h2>
                </div>
                <div class="col-md-6 col-sm-12 m-auto">
                    <div class="content">
                        <h4>Launching Your Business in Costa Rica: A 3-Steps Guide</h4>
                        <ul>
                            <li class="brown-check"><i class="fa-sharp fa-solid fa-check"></i>1. Form your Company</li>
                            <li class="brown-check"><i class="fa-sharp fa-solid fa-check"></i>2. Set Up Bank Account
                            </li>
                            <li class="brown-check"><i class="fa-sharp fa-solid fa-check"></i>3. Mantain Tax and
                                Accounting Compliance</li>
                        </ul>
                        <a href="javascript:;" class="brown-btn btn px-4">learn more</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="figure">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="img-fluid w-100" alt="Business Meeting">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 6 end -->
    <!-- section 7 start -->
    <section class="sec7 bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="head">
                    <h2>our most popular services</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <!-- Card 1 -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="card-img-top" alt="From a Company">
                        <div class="card-body">
                            <h5 class="card-title">From a Company</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="javascript:;" class="brown-btn btn px-4">start your business</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="card-img-top" alt="Accounting & Tax">
                        <div class="card-body">
                            <h5 class="card-title">Accounting & Tax</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="javascript:;" class="brown-btn btn px-4">start your business</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="card-img-top" alt="Notarial">
                        <div class="card-body">
                            <h5 class="card-title">Notarial</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="javascript:;" class="brown-btn btn px-4">start your business</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="card-img-top" alt="Migration">
                        <div class="card-body">
                            <h5 class="card-title">Migration</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="javascript:;" class="brown-btn btn px-4">start your business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 7 end -->
    <!-- section 8 start -->
    <section class="sec8 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="figure">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="img-fluid" alt="Business Meeting">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 m-auto">
                    <div class="content">
                        <h2>about us</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit soluta doloremque
                            sint. Nihil doloribus omnis et, laudantium, cupiditate harum sapiente fugit fuga iure earum
                            eligendi nobis neque, impedit nostrum assumenda?</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- section 8 end -->
    <!-- section 9 start -->
    <section class="sec9 bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 m-auto">
                    <div class="content">
                        <h3>Loved by 1,000,000 + Enterpreneurs Across All 50 States</h3>
                        <p>95% come through recommendations</p>
                        <a href="javascript:;" class="brown-btn btn px-4">view all reviews</a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div id="testimonials" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/Images/testimonial.jfif') }}" class="img-fluid" alt="testimonial">
                                    <div class="img-content">
                                        <p class="author">John Doe</p>
                                        <p>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac tellus at orci
                                    scelerisque faucibus. Sed vitae eros nec mauris malesuada auctor. Aliquam erat
                                    volutpat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/Images/testimonial.jfif') }}" class="img-fluid" alt="testimonial">
                                    <div class="img-content">
                                        <p class="author">John Doe</p>
                                        <p>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac tellus at orci
                                    scelerisque faucibus. Sed vitae eros nec mauris malesuada auctor. Aliquam erat
                                    volutpat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/Images/testimonial.jfif') }}"  class="img-fluid" alt="testimonial">
                                    <div class="img-content">
                                        <p class="author">John Doe</p>
                                        <p>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac tellus at orci
                                    scelerisque faucibus. Sed vitae eros nec mauris malesuada auctor. Aliquam erat
                                    volutpat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/Images/testimonial.jfif') }}"  class="img-fluid" alt="testimonial">
                                    <div class="img-content">
                                        <p class="author">John Doe</p>
                                        <p>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac tellus at orci
                                    scelerisque faucibus. Sed vitae eros nec mauris malesuada auctor. Aliquam erat
                                    volutpat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/Images/testimonial.jfif') }}"  class="img-fluid" alt="testimonial">
                                    <div class="img-content">
                                        <p class="author">John Doe</p>
                                        <p>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac tellus at orci
                                    scelerisque faucibus. Sed vitae eros nec mauris malesuada auctor. Aliquam erat
                                    volutpat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/Images/testimonial.jfif') }}"  class="img-fluid" alt="testimonial">
                                    <div class="img-content">
                                        <p class="author">John Doe</p>
                                        <p>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac tellus at orci
                                    scelerisque faucibus. Sed vitae eros nec mauris malesuada auctor. Aliquam erat
                                    volutpat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets/Images/testimonial.jfif') }}" class="img-fluid" alt="testimonial">
                                    <div class="img-content">
                                        <p class="author">John Doe</p>
                                        <p>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac tellus at orci
                                    scelerisque faucibus. Sed vitae eros nec mauris malesuada auctor. Aliquam erat
                                    volutpat.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 9 end -->
    <!-- section 10 start -->
    <section class="sec10 py-5">
        <div class="container">
            <div class="row">
                <div class="head py-5">
                    <h2>Call or click to get started now</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="card-img-top" alt="From a Company">
                        <div class="box-body">
                            <h5 class="card-title">Strategic Consultant</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="tel:+1 234 567 890" class="brown-btn btn px-4">Call: +123 456 7890</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box border-blue">
                        <img src="{{ asset('assets/Images/incorporation.png')}}" class="card-img-top" alt="From a Company">
                        <div class="box-body">
                            <h5 class="card-title">From your Company now</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="javascript:;" class="blue-btn btn px-4">start now for free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 10 end -->
    <!-- footer start  -->
    <footer class="bg-blue text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h4>Start a Business</h4>
                        <ul>
                            <li><a href="javascript:;">Form a Company</a></li>
                            <li><a href="javascript:;">Accounting & Tax</a></li>
                            <li><a href="javascript:;">Migration</a></li>
                            <li><a href="javascript:;">Migracion</a></li>
                            <li><a href="javascript:;">Notarial</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="javascript:;">Form a Company</a></li>
                            <li><a href="javascript:;">Accounting & Tax Services</a></li>
                            <li><a href="javascript:;">Migration</a></li>
                            <li><a href="javascript:;">Migracion</a></li>
                            <li><a href="javascript:;">Notarial</a></li>
                            <li><a href="javascript:;">Pricing</a></li>
                            <li><a href="javascript:;">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="javascript:;">FAQ</a></li>
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
                            <div class="form-row d-flex">
                                <input type="text" id="email" name="email" placeholder="Your mail address">
                                <button type="submit" class="btn brown-btn btn-xs"><i class="fa-solid fa-paper-plane"></i></button>
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
    <!-- footer end -->

    

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