<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sixto Rodriguez | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
        <style>
            .error-message {
                color: red;
                font-size: 12px;
                margin-top: 5px;
            }
            .success-message {
                color: green;
                font-size: 14px;
                margin-top: 15px;
                text-align: center;
            }
        </style>
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
    
    <section class="sec1 inner-page-header bg-image py-4 pg-banner" style="background: url('{{ asset('assets/Images/Notary.png') }}');">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="inner-wrap">
                        <h1>Notarial</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 end -->
      <!-- About section one-->
      <section class="py-5 bg-light content-inner" id="scroll-target">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-10">
                    <div class="text-center">
                        <!-- <h1 class="fw-bolder mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1> -->
                        <p class="lead fw-normal text-muted mb-4">
                            Experience the reliability of our notary services at Sixto Law. From documentauthentication to guidance on wills and successions, our specialized notarial team is here to provide you with precise legal solutions.
                        </p>
                         <p class="lead fw-normal text-muted mb-4">
                            Discover More about Our Notary Services for complete details on how we can assist you with various legal matters. We specialize in document authentication, wills, powers of attorney, and more.
                        </p>
                        <!-- <a class="btn btn-primarya btn-lga brown-btn btn px-4" href="#scroll-target">Contact Us</a> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="contact-form card">
                        <div class="card-body">
                            <h3>Contact Us</h3>
                            <form id="Contact_form" class="contact-form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                                            <div class="error-message email-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone No" required>
                                            <div class="error-message phone-error"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Country</label>
                                            <select id="inputNationnal3" class="form-control" name="firstShareholderNationality" required>
                                                <option value="0">Choose...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Service</label>
                                            <input type="text" class="form-control" id="service" value="Notarial" name="service" placeholder="Notarial" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Message</label>
                                            <textarea class="form-control" id="message" name="message" placeholder="Type Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-ftr">
                                    <button href="#" class="brown-btn btn" type="submit" id="submit_btn">Contact Us</button>
                                    <div class="success-message" id="successMessage" style="display:none;">Your message has been sent successfully!</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- About section two-->
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        document.getElementById('Contact_form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var phonePattern = /^\+?[1-9]\d{1,14}$/; // International phone number pattern

            var emailErrorElements = document.getElementsByClassName('email-error');
            var phoneErrorElements = document.getElementsByClassName('phone-error');
            var successMessageElement = document.getElementById('successMessage');

            // Clear previous error messages
            for (var i = 0; i < emailErrorElements.length; i++) {
                emailErrorElements[i].textContent = '';
            }
            for (var i = 0; i < phoneErrorElements.length; i++) {
                phoneErrorElements[i].textContent = '';
            }
            successMessageElement.style.display = 'none'; // Hide previous success message

            var isValid = true;

            if (!emailPattern.test(email)) {
                for (var i = 0; i < emailErrorElements.length; i++) {
                    emailErrorElements[i].textContent = 'Please enter a valid email address.';
                }
                isValid = false;
            }

            if (!phonePattern.test(phone)) {
                for (var i = 0; i < phoneErrorElements.length; i++) {
                    phoneErrorElements[i].textContent = 'Please enter a valid phone number.';
                }
                isValid = false;
            }

            if (isValid) {
                // Simulate form submission and display success message
                setTimeout(function() {
                    successMessageElement.style.display = 'block';
                    document.getElementById('Contact_form').reset(); // Reset form fields
                }, 500); // Simulate a delay for form submission
            }
        });
    </script>
    <script>
        $(document).ready(function() {
          $.ajax({
            url: 'https://restcountries.com/v3.1/all',
            method: 'GET',
            success: function(data) {
              var select = $('#inputNationnal3');
              data.forEach(function(country) {
                select.append($('<option>', {
                  value: country.name.common,
                  text: country.name.common
                }));
              });
            },
            error: function(error) {
              console.log('Error fetching country data:', error);
            }
          });
        });
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
    
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</html>
