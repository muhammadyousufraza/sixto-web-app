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
    
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/company.css') }}">
</head>

<body class="form-a-company-page">
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
                    <a href="{{ route('home.page') }}/"><img src="{{ asset('assets/Images/logo.png')}}" class="img-fluid" alt="main logo"></a>
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
    <section class="sec1 inner-page-header bg-image py-4 pg-banner"
    style="background: url('{{ asset('assets/Images/Form-a-company-1.png') }}');">
        
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="inner-wrap">
                        <h1>Form A Company</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 end -->


    <!-- section 2 start -->
    <section class="py-5 sec1 company-wrapper py-5 px-5">
        <div class="container">
            <div class="row">
                <div class="head">
                    <p class="my-4">When launching a business in Costa Rica, it`s crucial to set up the appropriate legal framework that best suits the company. In this country, the primary business structures are the Sociedad Anónima (S.A), akin to a corporation, and the Sociedad de Responsabilidad Limitada (S.R.L), resembling a limited liability company (LLC). These legal entities are extensively utilized for business operations in Costa Rica.</p>
                </div>
                <div class="col-md-6">
                    <div class="left content company-image-upper">
                        <img src="{{ asset('assets/Images/Form-a-company-2.png') }}" class="img-fluid my-2" alt="">
                        <h2>Sociedad Anonima:</h2>
                        <p class="my-4">A Sociedad Anónima in Costa Rica is a distinct legal entity, separate from its owners, and its capital is divided into shares. One key advantage of this corporate structure is that shareholders` liability is confined to their contributions. This organizational form is widely embraced in the country, offering benefits such as asset protection, legal capacity for business transactions and contract signing, and a clear separation of responsibilities between the company and its owners.</p>
                        <p class="my-4">Within a Sociedad Anónima, the company can undertake obligations and exercise rights without shareholders or legal representatives needing to personally guarantee these commitments. Shares may possess various characteristics, including registration status, preference, redeemability, voting rights, and can be denominated in any currency. Trading and transferring shares are generally unrestricted, except in cases of statutory limitations. Liability is restricted to the company`s assets and the contributions of its shareholders. Forming this type of society requires a minimum of four individuals to establish a board of directors, consisting of: PRESIDENT, SECRETARY, TREASURER, and FISCAL.</p>
                    <!-- <div class="btn-wrap">
                        <a class="btn btn-primarya btn-lga brown-btn btn px-4 my-2" href="{{ route('company.profile.page') }}">Get Started</a>
                    </div> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right content company-image-upper">
                        <img src="{{ asset('assets/Images/Form-a-company-3.png') }}" class="img-fluid my-2" alt="">
                        <h2>Sociedad de Responsabilidad Limitada:</h2>
                        <p class="my-4">A Sociedad de Responsabilidad Limitada, commonly known as an LLC, is a business entity that unites two or more individuals or legal entities. Each participant assumes sole accountability for the capital, assets, or rights they contribute, without representation through financial instruments. In this business structure, partners benefit from limited liability, being responsible only for their contributed amount in case of company debts. In the specific context of Costa Rica The Sociedad de Responsabilidad Limitada is regulated by the Commercial Code.</p>
                        <p class="my-4">While lacking a precise definition in this legal framework, it is established as a commercial society that cannot be formed through public subscription. Comprising partners who can be natural or legal persons, their liability is limited to the contributions made, except in cases where the law extends such liability. The capital of the Sociedad de Responsabilidad Limitada is represented by nominative shares, subject to formalities dictated by the law and never endorsed. Notably, these shares hold equal value and cannot be represented by certificates. This characteristic distinctly sets the Sociedad de Responsabilidad Limitada apart from capital societies</p>
                        <!-- <p class="my-4">The capital of the Sociedad de Responsabilidad Limitada is represented by nominative shares, subject to formalities dictated by the law and never endorsed. Notably, these shares hold equal value and cannot be represented by certificates. This characteristic distinctly sets the Sociedad de Responsabilidad Limitada apart from capital societies, excluding the possibility of equating shares with securities. A minimum of 2 people is required to form this type of society.</p> -->
                    <!-- <div class="btn-wrap">
                        <a class="btn btn-primarya btn-lga brown-btn btn px-4 my-2" href="{{ route('company.profile.page') }}">Get Started</a>
                    </div> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="btn-wrap d-flex justify-content-center">
                        <a class="btn btn-primarya btn-lga brown-btn btn px-4 my-2" href="{{ route('company.profile.updated.page') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 end -->
    <!-- section 3 start -->
    <section class="py-5 sec2 info-wrapper company-formation bg-grey py-5 px-5">
        <div class="container">
            <div class="row">
                <div class="head">
                    <h2>requirements for company formation</h2>
                </div>
                <div class="col-md-12 content">
                    <h2>Company Name:</h2>
                    <p class="mt-4 mb-5">When selecting the name for the anonymous society, it is crucial to verify its availability in the National Registry of Costa Rica. The name must be unique, whether in Spanish or another language, and should not currently be in use. It is important to note that the registered name of the society differs from the trademark; therefore, it is recommended to manage both registrations simultaneously. For this, we request the submission of three company names.</p>
                    <h2>Registered Addrress:</h2>
                    <p class="mt-4 mb-5">This refers to the physical address in Costa Rica. As part of our services, we provide the address of our offices.</p>
                    <h2>Legal Representation:</h2>
                    <p class="mt-4 mb-3">For <strong>Sociedad Anónima </strong> (Anonymous Society): The mandatory designation of four individuals is required: President, Secretary, Treasurer, and Fiscal.</p>
                    <p class="mt-4 mb-5">For <strong>Sociedad de Responsabilidad</strong> Limitada (Limited Liability Company): In this case, managers are designated. It can be one manager or more, without established limits. Legal representation must specify who is authorized to sign on behalf of the company, with at least one person designated.</p>
                    <h2>Social Capital and Share Distribution:</h2>
                    <p class="mt-4 mb-3">Companies must have a minimum social capital, generally divided into shares or quotas. Although Costa Rican law does not set a minimum amount, it must be defined in the company`s bylaws. The capital amount in shares should be clearly indicated, for example, 100 shares with a value of 1 USD each or 100 quotas with a value of one hundred colones, equivalent to 10 thousand Costa Rican colones. It is important to note that a company can be established with as little as 20 USD of social capital or its equivalent in colones.</p>
                    <p class="mt-4 mb-5">To establish any company, a minimum of two shareholders is required, who can be individuals or legal entities, either Costa Rican or foreign. After registration in the national registry, it is possible to transfer all shares to a single holder.</p>
                    <div class="btn-wrap text-center pb-4">
                        <a class="btn btn-primarya btn-lga brown-btn btn px-4 mb-4" href="{{ route('company.profile.updated.page') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 3 end -->
    <!-- section 4 start -->
    <section class="py-5 sec3 info-wrapper company-formation  py-5 px-5">
        <div class="container">
            <div class="row">
                <div class="head">
                    <h2>Responsibilites after the creation of a company</h2>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h2>Opening Bank Accounts:</h2>
                        <p class="mt-4 mb-5">Bank accounts are a crucial step for companies to manage their finances through local financial institutions. This process involves submitting the necessary documentation required by Costa Rican banks, enabling companies to access fundamental financial services for their proper operation.</p>
                        <h2>Municiapl Patents:</h2>
                        <p class="mt-4 mb-5">Depending on the type of business and whether there is a public storefront, additional permits may be required from local authorities such as municipalities. These permits are necessary to ensure compliance with current regulations and standards.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h2>Resgisteration with the Tax Administration:</h2>
                        <p class="mt-4 mb-5">After registering the company with the National Registry, it is necessary to proceed with registration with the tax administration to comply with the tax obligations corresponding to one or several economic activities.</p>
                        <h2>Corporate Tax:</h2>
                        <p class="mt-4 mb-5">Payment of these permits is done annually, usually in January. The amount to be paid is CRC 69,000 colones (USD 125) for inactive companies and CRC 125,000 colones (USD 230) for active companies. These amounts are subject to change, and it is essential to verify updated information before making the corresponding payment.</p>
                    </div>
                </div>
                <div class="col-md-12 py-4">
                    <div class="content text-center">
                        <h2>Transparency and Ultimate Beneficiary Registry:</h2>
                        <p class="mt-4 mb-5">This is the Shareholders Registry at the Central Bank of Costa Rica. In this registry, information is provided about the owners of the shares of the companies, up to the ultimate beneficiary, who is a natural person. The purpose of this registry is to ensure transparency and prevent money laundering by identifying individuals with a stake in the companies and knowing who the true beneficiaries of the shares are.</p>
                        <div class="btn-wrap text-center py-2">
                            <p>Form Your Comapany In Less Than 48 Business Hours:</p>
                            <a class="btn btn-primarya btn-lga brown-btn btn px-4 my-4" href="{{ route('company.profile.updated.page') }}">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 4 end -->





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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/step-form-js.js') }}"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</html>
