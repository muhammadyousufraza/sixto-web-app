<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sixto Rodriguez | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" /> -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                     <li><a class="active" href="/index.php/account-tax">Accounting and Tax</a></li>
                    <li class="dropdowns-menu ">
                        <a href="/index.php/migracion" >Migracion</a>
                    </li>
                    <li class="dropdowns-menu ">
                         <a href="{{ route('notarial.page')}}">Notarial</a>
                    </li>
                    <li><a href="/index.php/pricing">Pricing</a></li>
                    <li><a href="/index.php/about-us">About us</a></li>
                    <li><a href="/index.php/company" class="brown-btn btn">Form a Company</a></li>
                    @if(empty(session('user_id')))
                                <li><a href="{{route('login.page')}}">Login</a></li>
                                @else
                                <li><a href="{{route('customer.logout')}}">Logout</a></li>
                                @endif
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
                                <a href="{{ route('home.page') }}/">
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
                                <li><a href="{{ route('company.page') }}" class="brown-btn btn">Form a Company</a></li>
                               @if(empty(session('user_id')))
                                <li><a href="{{route('login.page')}}">Login</a></li>
                                @else
                                <li><a href="{{route('customer.logout')}}">Logout</a></li>
                                @endif
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
    <section class="sec1 bg-image py-4 px-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="inner-wrap">
                        <p class="home-text-heading">Embark on Your Business Journey in Costa Rica with Ease</p>
                        <p class="col-md-10 home-text-sub-text">Discover seamless business setup solutions tailored to your needs. Our expert team can guide you through the best options for establishing a company in Costa Rica,ensuring a streamlined process completed in less than 48 hours.</p>
                        <form action="{{route('company.profile.page')}}" method="get" class="hero-area-form col-md-12">
                            <input type="text" class="w-75" name="companyName" placeholder="Enter your preferred buisness name">
                            <button  class="brown-btn btn">start now</button>
                        </form>
                        <p class="home-text-last-text">Not sure what type of business entity to start? <a class="home-text-last-text-link" href="javascript:;">Explore all your
                                options.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 end -->
    <!-- section 2 start -->
    <!-- <section class="sec2 packages py-5 px-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-12">
                    <div class="content">
                        <h4 class="font-weight-bold compare-packges">Compare packages</h4>
                        <p>Identify the LLC package and services that fit your needs and then get started.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="box">
                        <h3>Starter</h3>
                        <a href="/index.php/company"><div class="box-content">
                            <h4>start now</h4>
                           <div class="box-inner">
                                <span><sup>$</sup>0</span>
                                <p>plus state fees</p>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="box">
                        <h3>form a campany</h3>
                        <a href="/index.php/company"><div class="box-content bg-brown">
                            <h4>start now</h4>
                            <div class="box-inner">
                                <span><sup>$</sup>199<span>/yr</span></span>
                                <p>plus state fees</p>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="box">
                        <h3>Premium</h3>
                        <a href="/index.php/company"><div class="box-content">
                            <h4>start now</h4>
                            <div class="box-inner">
                                <span><sup>$</sup>349<span>/yr</span></span>
                                <p>plus state fees</p>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- section 2 end -->
    <!-- section 3 start -->
    <!-- <section class="sec3 bg-grey py-5 px-5">
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
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section> -->
    <!-- section 3 end -->
    <!-- section 4 start -->
    <section class="sec4 logo-section bg-grey">
        <div class="container">
            <div class="text-center">
                <h2>Proudly recommended by our affiliate partners</h2>
                <div class="log-wrap">
                    <ul>
                        <li><img src="{{ asset('assets/Images/client-logo-1.jpg')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/client-logo-2.jpg')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/client-logo-3.jpg')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/client-logo-4.jpg')}}" class="img-fluid" alt="Forbes"></li>
                        <li><img src="{{ asset('assets/Images/client-logo-5.jpg')}}" class="img-fluid" alt="Forbes"></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- section 4 end -->
    <!-- section 5 start -->
    <section class="sec5 bg-blue">
        <div class="row">
                <div class="col-md-6 col-sm-12 m-auto left">
                    <div class="content">
                        <div class="box">
                            <h2>
                                Compare LLC vs. Incorporation:<br>
                                Which is Better?
                            </h2>
                            <p>When launching a business in Costa Rica, it's crucial to set up the appropriate legal framework that best suits the company. In this country, the primary business structures are the Sociedad Anónima (S.A), akin to a corporation, and the Sociedad de Responsabilidad Limitada (S.R.L), resembling a limited liability company (LLC). These legal entities are extensively utilized for business operations in Costa Rica.</p>
                            <a href="/index.php/company" class="brown-btn btn px-4">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-0 right">
                    <img src="{{asset('assets/Images/incorporation.png') }}" class="img-fluid w-100" alt="Incorporation">
                </div>
            </div>
    </section>
    <!-- section 5 end -->
    <!-- section 6 start -->
    <section class="sec6 bg-grey">
        <div class="container">
            <div class="row">
                <div class="head">
                    <h2>"This is your life. You want to get it right."</h2>
                </div>
                <div class="col-md-6 col-sm-12 p-5 m-auto">
                    <div class="content">
                        <h6 class="">Launching Your Business in Costa Rica: A 3-Steps Guide</h6>
                        <ul>
                            <li class="brown-check"><i class="fa-sharp fa-solid fa-check"></i>1. Form your Company</li>
                            <li class="brown-check"><i class="fa-sharp fa-solid fa-check"></i>2. Set Up Bank Account
                            </li>
                            <li class="brown-check"><i class="fa-sharp fa-solid fa-check"></i>3. Mantain Tax and
                                Accounting Compliance</li>
                        </ul>
                        <a href="/index.php/company" class="brown-btn btn px-4">Start Now!</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="figure">
                        <img src="{{ asset('assets/Images/3.png')}}" class="img-fluid w-100" alt="Business Meeting">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 6 end -->
    <!-- section 7 start -->
    <section class="sec7 bg-grey py-5 px-5 ">
        <div class="container">
            <div class="row">
                <div class="head">
                    <h2>our most popular services</h2>
                    <p>Not sure where to start? Start by selecting your service path below.</p>
                </div>
                <div class="w3-content w3-display-container mobile-home-info-slider">
        <div class="homeInfoSlider" style="width:100%">
            <div class="card home-info-slider-card">
                <div class="card-body">
                <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/4.png') }}" class="card-img-top" alt="From a Company">
                            <div class="card-body">
                                <h5 class="card-title">Form a Company</h5>
                                <p class="card-text">Start your company, and open bank accounts to start your Journey in Costa Rica</p>
                                <a href="/index/company" class="brown-btn btn px-4">Form a Company</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeInfoSlider" style="width:100%">
            <div class="card home-info-slider-card">
                <div class="card-body">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/5.png') }}" class="card-img-top" alt="Accounting & Tax">
                            <div class="card-body">
                                <h5 class="card-title">Accounting & Tax</h5>
                                <p class="card-text">Manage and change your company details. </p>
                            <a href="/index/account-tax" class="brown-btn btn px-4">Accounting & Tax</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeInfoSlider" style="width:100%">
            <div class="card home-info-slider-card">
                <div class="card-body">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/6.png') }}" class="card-img-top" alt="Notarial">
                            <div class="card-body">
                                <h5 class="card-title">Notarial</h5>
                                <p class="card-text">File a Trademark or Copyright Application</p>
                                <a href="/index/notarial" class="brown-btn btn px-4">Notarial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeInfoSlider" style="width:100%">
            <div class="card home-info-slider-card">
                <div class="card-body">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/7.png') }}" class="card-img-top" alt="Migration">
                            <div class="card-body">
                                <h5 class="card-title">Migration</h5>
                                <p class="card-text">Get More Information</p>
                                <a href="/index/migracion" class="brown-btn btn px-4">Migration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

                <!-- Card 1 -->
                <div class="desktop-home-info row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/4.png') }}" class="card-img-top" alt="From a Company">
                            <div class="card-body">
                                <h5 class="card-title">Form a Company</h5>
                                <p class="card-text">Start your company, and open bank accounts to start your Journey in Costa Rica</p>
                                <a href="/index.php/company" class="brown-btn btn px-4">Form a Company</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/5.png') }}" class="card-img-top" alt="Accounting & Tax">
                            <div class="card-body">
                                <h5 class="card-title">Accounting & Tax</h5>
                                <p class="card-text">Manage and change your company details. </p>
                            <a href="/index.php/account-tax" class="brown-btn btn px-4">Accounting & Tax</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/6.png') }}" class="card-img-top" alt="Notarial">
                            <div class="card-body">
                                <h5 class="card-title">Notarial</h5>
                                <p class="card-text">File a Trademark or Copyright Application</p>
                                <a href="/index.php/notarial" class="brown-btn btn px-4">Notarial</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/Images/7.png') }}" class="card-img-top" alt="Migration">
                            <div class="card-body">
                                <h5 class="card-title">Migration</h5>
                                <p class="card-text">Get More Information</p>
                                <a href="/index.php/migracion" class="brown-btn btn px-4">Migration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 7 end -->
    <!-- section 8 start -->
    <section class="sec8 py-5 px-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="figure">
                        <img src="{{ asset('assets/Images/8.png') }}" class="img-fluid" alt="Business Meeting">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 m-auto">
                    <div class="content">
                        <h2>about us</h2>
                            <p>
                            I am Sixto Rodríguez Gómez, a lawyer, notary, and public accountant specializing in Business Solutions in Costa Rica for the past 15 years. My focus ranges from company formation to accounting and tax management, aiming to provide comprehensive services.</p>
                            <p>With my team, I assist in investment projects of all scales in Costa Rica. At SIXTO LAW, we offer all the necessary tools and services to establish and grow your business sustainably and securely. We are committed to providing complete and personalized support in legal, notarial, accounting, and tax matters.</p>
                            <p>Contact us for an initial consultation; we are ready to help you achieve business success in Costa Rica.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 8 end -->
    <!-- section 9 start -->
    <section class="sec9 bg-grey py-5 px-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 m-auto">
                    <div class="content">
                        <h3>Loved by 1,000,000 + Enterpreneurs Across All 50 States</h3>
                        <p>95% come through recommendations</p>
                        <a href="javascript:;" class="brown-btn btn px-4">view all reviews</a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 desktop-review-ratting">
                     <div id="testimonialCarousel" class="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/square-headshot-1.png" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">Jane Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                              <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                              </div>
                              <div class="card-body">
                                <div class="d-flex align-items-center pt-2">
                                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" alt="bootstrap testimonial carousel slider 2">
                                  <div>
                                    <h5 class="card-title fw-bold">John Doe</h5>
                                    <span class="text-secondary">⭐⭐⭐⭐⭐</span>
                                  </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> 
            </div>
        </div>
        <!-- <div class="slideshow-container"> -->

<!-- <div class="w3-content w3-display-container mobile-review-ratting-slider">
    <div class="reviewRatingSlides" style="width:100%">
        <div class="card">
            <div class="card-body">
                <div class="media row justify-content-between">
                    <div class="col-md-3 col-lg-3">
                        <img src="{{ asset('assets/Images/9.png') }}" class="mr-3 col-6 rounded-circle" alt="User" style="width: 65px; height: 64px;">
                    </div>
                    <div class="media-body col-md-5 col-lg-6">
                        <h5 class="mt-0">Dreana A.</h5>
                        <p>
                            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <img src="{{ asset('assets/Images/QUOTES.png') }}" class="mr-3 col-6 rounded-circle" alt="User" style="width: 65px; height: 64px;">
                    </div>
                    <p class="card-text mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p> 
                </div>
            </div>
        </div>
    </div>
    <div class="reviewRatingSlides" style="width:100%">
        <div class="card">
            <div class="card-body">
                <div class="media row justify-content-between">
                    <div class="col-lg-3">
                        <img src="{{ asset('assets/Images/10.png') }}" class="mr-3 col-6 rounded-circle" alt="User" style="width: 65px; height: 64px;">
                    </div>
                    <div class="media-body col-lg-6">
                        <h5 class="mt-0">Samual</h5>
                        <p>
                            <span class="text-warning">&#9733; &#9733; &#9733; &#9733;</span>
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('assets/Images/QUOTES.png') }}" class="mr-3 col-6 rounded-circle" alt="User" style="width: 65px; height: 64px;">
                    </div>
                    <p class="card-text mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p> 
                </div>
            </div>
        </div>
    </div>

    <button class="w3-button w3-black w3-display-left" onclick="plusDivs_(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs_(1)">&#10095;</button>
</div> -->

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
    </section>
    <!-- section 9 end -->
    <!-- section 10 start -->
    <section class="sec10 py-5 px-5">
        <div class="container">
            <div class="row">
                <div class="head py-5">
                    <h2>Call or click to get started now</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box home-section-last">
                        <img src="{{ asset('assets/Images/icon-1.png') }}" class="card-img-top" alt="From a Company">
                        <div class="box-body">
                            <h5 class="card-title">Strategic Consultant</h5>
                            <p class="card-text">We`re here to help you get started fast and easy, answering all your questions.</p>
                            <a href="tel:+1 234 567 890" class="brown-btn btn px-4">Call: +123 456 7890</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="box border-blue home-section-last">
                        <img src="{{ asset('assets/Images/icon-2.png') }}" class="card-img-top" alt="From a Company">
                        <div class="box-body">
                            <h5 class="card-title">Form your Company now</h5>
                            <p class="card-text">Choose your entity & state and get the process started! It takes just 2-3 minutes.</p>
                            <a href="/index.php/company" class="blue-btn btn px-4">start now for free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 10 end -->
    <!-- footer start  -->
    <footer class="bg-blue text-white desktop-home-fotter">
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
            <div class="container">
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
                                <button class="accordion-button" type="button" 
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" 
                                aria-expanded="true" aria-controls="collapseOne">Start a Business
                            </button></h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                <button class="accordion-button collapsed" type="button" 
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" 
                                aria-expanded="false" aria-controls="collapseTwo">Quick Links</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                                aria-controls="collapseThree">Support</button></h3>
                            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
                            <h5 class="accordion-header" id="headingfour">Subscribe our newsletter to get our latest update & news</h5>
                                <form id="subscribe_newsletter " class="form-horizontal newsletter-subscription footer-mobile-form">
                                    <div id="newsletter-message"></div>
                                    <div class="footer-mobile-form">
                                        <input type="text" id="email" name="email" placeholder="Your mail address">
                                        <button type="submit" class="btn brown-btn btn-xs"><i class="fa-solid fa-paper-plane"></i></button>
                                        <div class="error-message" style="color:red;"></div>
                                    </div>
                                </form>
                        </div>
                        <div class="copyright">
                            <div class="copyrightcontent py-3">
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
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
    <script>
        const multipleItemCarousel = document.querySelector("#testimonialCarousel");

        if (window.matchMedia("(min-width:576px)").matches) {
          const carousel = new bootstrap.Carousel(multipleItemCarousel, {
            interval: false
          });

          var carouselWidth = $(".carousel-inner")[0].scrollWidth;
          var cardWidth = $(".carousel-item").width();

          var scrollPosition = 0;

          $(".carousel-control-next").on("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 3) {
              console.log("next");
              scrollPosition = scrollPosition + cardWidth;
              $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 800);
            }
          });
          $(".carousel-control-prev").on("click", function () {
            if (scrollPosition > 0) {
              scrollPosition = scrollPosition - cardWidth;
              $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 800);
            }
          });
        } else {
          $(multipleItemCarousel).addClass("slide");
        }

    </script>
    <script>
        var slideIndex_ = 1;
        showDivs_(slideIndex_);

        function plusDivs_(n) {
        showDivs_(slideIndex_ += n);
        }

        function showDivs_(n) {
        var i;
        var x = document.getElementsByClassName("reviewRatingSlides");
        if (n > x.length) {slideIndex_ = 1}
        if (n < 1) {slideIndex_ = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex_-1].style.display = "block";  
        }

        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("homeInfoSlider");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>
    
    
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</html>
