<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sixto Rodriguez | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/form-css.css" />
    <link rel="stylesheet" href="assets/css/screen-3.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->

        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/form-css.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/screen-3.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/order-screen1.css') }}">



    
    <!-- bootstrap css -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

<!-- google font -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> -->

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
                    <li><a href="/index.php/customer/login">Login</a></li>
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
                                <li><a href="{{ route('company.page') }}" class="brown-btn btn">Form a Company</a></li>
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


<!--Form start-->
<form id="signUpForm" method="POST" action="{{ route('company.create') }}" enctype="multipart/form-data">
                    <!-- start step indicators -->
                    <!-- <div class="form-header d-flex mb-4">
                        <span class="stepIndicator">Account Setup</span>
                        <span class="stepIndicator">Social Profiles</span>
                        <span class="stepIndicator">Personal Details</span>
                    </div> -->
                    <!-- end step indicators -->


      <!-- step Welcome start -->
    @csrf
    @method('post')
      <div class="step">
                    <!-- section form Step 1  start -->
                <section class="order-wrapper">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="form-head">
                                    <h1>Start your business in Costa Rica with confidence</h1>
                                    <p>Join over 1,000,000 happy business owners. Get started by choosing your entity type and state of formation.</p>
                                    <a onClick="getTypeId(1)" class="btn btn-lga brown-btn btn px-4 py-3" href="javascript:;" >Sociedad de Responsabilidad Limitada</a>
                                    <a onClick="getTypeId(2)" class="btn btn-lga grey-btn shadow-btn btn px-4 py-3" href="javascript:;">Sociedad Anonima</a>
                                </div>
                                <div class="form-content">
                                    <h2>Start your business with confidence</h2>
                                    <p>Join over 1,000,000 happy business owners. Get started by choosing your entity type and state of formation.</p>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                            @foreach($packages1 as $package)
                            <?php if($package['companyType']['id'] == 1) : ?>
                                <div class="col-lg-4 col-md-6 m-auto">
                                <div class="plan-card">
                                    <p class="header">Most popular</p>
                                    <p class="save">
                                        save <span>$468</span>
                                    </p>
                                    <p class="plan-name align-content-center"  style="height: 108px">{{$package['packageTitle']}}</p>
                                    <h2 class="plan-price">{{$package['packageTotalPrice']}}</h2>
                                    <p class="plan-desc">one time transparent payment</p>
                                    <a href="javascript:;" class="btn btn-lga brown-btn btn px-4 py-3">Get the Gold Package<i
                                            class="fa-solid fa-arrow-right"></i></a>

                                    <ul class="plan-features">
                                        <li><span>
                                                <span class="circle">?</span>Package fee
                                            </span>
                                            <span>${{ $package['packageFee']}}</span>
                                        </li>
                                        <li>
                                            <span>
                                                <span class="circle">?</span>State fee
                                            </span> <span>${{$package['stateFee']}}</span>
                                        </li>
                                    </ul>
                                    <ul class="plane-desc">
                                        <li class="heading">includes</li>
                                        @foreach(json_decode($package['packageDetail']) as $feature)
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i> {{ $feature}}
                                        </li>
                                        @endforeach
                                        <!-- <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem ipsum
                                        </li>
                                        <li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li> -->
                                    </ul>
                                </div>
                                </div>
                            <?php endif; ?>
                            @endforeach

                            <!-- <div class="col-lg-4 col-md-6 m-auto">
                                <div class="plan-card">
                                    <p class="header">best value</p>
                                    <p class="save">
                                        save <span>$468</span>
                                    </p>
                                    <p class="plan-name">Lorem ipsum dolor sit amet consectetur</p>
                                    <h2 class="plan-price">$9.99</h2>
                                    <p class="plan-desc">one time transparent payment</p>
                                    <a href="javascript:;" class="btn btn-lga brown-btn btn px-4 py-3">Get the Gold Package<i
                                            class="fa-solid fa-arrow-right"></i></a>

                                    <ul class="plan-features">
                                        <li><span>
                                                <span class="circle">?</span>Package fee
                                            </span>
                                            <span>$199</span>
                                        </li>
                                        <li>
                                            <span>
                                                <span class="circle">?</span>State fee
                                            </span> <span>$235</span>
                                        </li>
                                    </ul>
                                    <ul class="plane-desc">
                                        <li class="heading">includes</li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem ipsum
                                        </li>
                                        <li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-check"></i>Lorem ipsum Lorem ipsum Lorem
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </section>
            <!-- section form Step 1 End -->
        </div>
<!-- Step welcome 1 End   -->









    
        <!-- step one -->
        <div class="step">
               <!-- Step 1 section 1 start -->
    <section class="from-wrapper  py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="form-head">
                        <h2>Selecting Responsabilidad Limitada</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-inner-wrap">
                        <p>Please provide three names of your Company</p>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="firstCompanyName" placeholder="ABC Company">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="secondCompanyName" placeholder="CDE Company">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="thirdCompanyName" placeholder="EFG Company">
                            </div>
                            <div class="form-group col-md-12">
                                <p>Provide your Domicilio Fiscal, which must be a Costa Rican address.</p>
                                <div class="form-check">
                                    <p>Don`t have one yet? No worries! As part of our services, we offer the option to use our office address..</p>
                                    <input class="form-check-input" type="checkbox" name="isSameAddress" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        I will use for office adddress instead
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="country" placeholder="Costa Rica">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Street Address</label>
                                <input type="text" class="form-control" name="streetAddress" placeholder="Lorem ipsum dolor">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Address (Cont)</label>
                                <input type="text" class="form-control" name="addressCont" placeholder="Lorem ipsum dolor">
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputCity">City</label>
                                <select id="inputCity" class="form-control" name="city">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">State</label>
                                <input type="text" class="form-control" id="inputState" name="state">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Zip code</label>
                                <input type="text" class="form-control" id="inputZip" name="zipCode">
                            </div>
                            <div class="represent text-center py-5">
                                <p>Legal Representation:</p>
                                <h3>ShareHolder 1</h3>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstShareholderFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="firstShareholderLastName" placeholder="Last Name">
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputNationnal">Nationality</label>
                                <select id="inputNationnal" class="form-control" name="firstShareholderNationality">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="identification">Identification</label>
                                <input type="text" class="form-control" id="identification" name="firstShareholderIdentification"
                                    placeholder="Passport number">
                            </div>
                            <div class="custom-file">
                                <label class="custom-file-label d-block" for="customFile">Upload your file here</label>
                                <input type="file" id="upload" hidden name="firstShareholderDocument" />
                                <label for="upload" class="uploadFile">Upload File</label>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputOccupation">Occupation</label>
                                <select id="inputOccupation" class="form-control" name="firstShareholderOccupation">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputMarried">Married Status</label>
                                <select id="inputMarried" class="form-control" name="firstShareholderMaritalStatus">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputaddress">Home Address</label>
                                <input type="text" class="form-control" id="inputaddress" name="firstShareholderHomeAddress"
                                    placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit.">
                            </div>
                            <div class="form-group align col-md-12">
                                <p class="m-0">Will be a legal Representative</p>
                                <span class="bg-brown">?</span>
                            </div>
                            <div class="form-group bg-white col-md-12">
                                <p>Legal Representatives are authorized to sign in the name of the company once shareholders agree to what is being signed for. Usually, all shareholders are Legal Representatives.</p>
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <input type="radio" id="inputYes" name="represent" name="firstShareholderIsLR" value="inputYes" checked />
                                        <label for="inputYes">Yes</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="inputNo" name="represent" value="inputNo" />
                                        <label for="inputNo">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group align col-md-12">
                                <p class="m-0">Will I be assigned as a Manager</p>
                                <span class="bg-brown">?</span>
                            </div>
                            <div class="form-group bg-white col-md-12">
                                <p>Managers are responsible for the administration of the company. Therefore, all shareholders, some, or none of them can take on this role.</p>
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <input type="radio" id="inputManageYes" name="firstShareholderIsManger" value="1"
                                            checked />
                                        <label for="inputManageYes">Yes</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="inputManageNo" name="firstShareholderIsManger"  value="0" />
                                        <label for="inputManageNo">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group align col-md-12">
                                <p class="m-0">Select the Amount of Shares Aligned</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName1">First Name</label>
                                <input type="text" class="form-control" id="firstName1" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName1">Last Name</label>
                                <input type="text" class="form-control" id="lastName1" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="shares">Percentage Of Shares</label>
                                <input type="text" class="form-control" id="shares" name="firstSharehoderPercentage" placeholder="Percentage of Shares">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Step 1 End   -->
        </div>
    
        <!-- step two -->
        <div class="step">
                <!-- Step 2 section 2 start -->
    <section class="from-wrapper py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="form-head">
                        <h2>Selecting Responsabilidad Limitada</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-inner-wrap">
                        <div class="row">
                            <div class="represent text-center py-5">
                                <p>Legal Representation:</p>
                                <h3>ShareHolder 2</h3>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="secondShareholderFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="secondShareholderLastName" placeholder="Last Name">
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputNationnal">Nationality</label>
                                <select id="inputNationnal" class="form-control" name="secondShareholderNationality">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="identification">Identification</label>
                                <input type="text" class="form-control" id="identification" name="secondShareholderIdentification"
                                    placeholder="Passport number">
                            </div>
                            <div class="custom-file">
                                <label class="custom-file-label d-block" for="customFile">Upload your file here</label>
                                <input type="file" id="upload" hidden />
                                <label for="upload" class="uploadFile">Upload Passport Image</label>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputOccupation">Occupation</label>
                                <select id="inputOccupation" class="form-control" name="secondShareholderDocument">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputMarried">Married Status</label>
                                <select id="inputMarried" class="form-control" name="secondShareholderMaritalStatus" >
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputaddress">Home Address</label>
                                <input type="text" class="form-control" id="inputaddress" name="secondShareholderHomeAddress"
                                    placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit.">
                            </div>
                            <div class="form-group align col-md-12">
                                <p class="m-0">Will be a legal Representative</p>
                                <span class="bg-brown">?</span>
                            </div>
                            <div class="form-group bg-white col-md-12">
                                <p>Legal Representatives are authorized to sign in the name of the company once shareholders agree to what is being signed for. Usually, all shareholders are Legal Representatives.</p>
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <input type="radio" id="inputYes" name="secondShareholderIsLR" value="inputYes" checked />
                                        <label for="inputYes">Yes</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="inputNo" name="represent" value="inputNo" />
                                        <label for="inputNo">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group align col-md-12">
                                <p class="m-0">Will I be assigned as a Manager</p>
                                <span class="bg-brown">?</span>
                            </div>
                            <div class="form-group bg-white col-md-12">
                                <p>Managers are responsible for the administration of the company. Therefore, all shareholders, some, or none of them can take on this role.</p>
                                <div class="radio-wrap">
                                    <div class="radio">
                                        <input type="radio" id="inputManageYes" name="secondShareholderIsManager" value="1"
                                            checked />
                                        <label for="inputManageYes">Yes</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" id="inputManageNo" name="secondShareholderIsManager" value="0" />
                                        <label for="inputManageNo">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group align col-md-12">
                                <p class="m-0">Select the Amount of Shares Aligned</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName1">First Name</label>
                                <input type="text" class="form-control" id="firstName1" name="secondShareholderFirstName2" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName1">Last Name</label>
                                <input type="text" class="form-control" id="lastName1" name="secondShareholderLasrName2" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="shares">Percentage Of Shares</label>
                                <input type="text" class="form-control" id="shares" name="secondShareholderPercentage" placeholder="Percentage of Shares">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Step 2 section 2 End -->
        </div>
    
        <!-- step three -->
        <div class="step">
               <!-- Step 2 section 2 start -->
    <section class="from-wrapper py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="form-head">
                        <h2>Selecting Responsabilidad Limitada</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-inner-wrap">
                        <div class="row">
                            <div class="represent text-center py-5">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                </p>
                                <p>Legal Representation:</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="legalRepFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="legalRepLatName" placeholder="Last Name">
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputNationnal">Nationality</label>
                                <select id="inputNationnal" class="form-control" name="legalRepLastNationality">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="identification">Identification</label>
                                <input type="text" class="form-control" id="identification" name="legalRepIdentification"
                                    placeholder="Passport number">
                            </div>
                            <div class="custom-file">
                                <label class="custom-file-label d-block" for="customFile">Upload your file here</label>
                                <input type="file" id="upload" hidden name="legalRepDocument" />
                                <label for="upload" class="uploadFile">Upload File</label>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputOccupation">Occupation</label>
                                <select id="inputOccupation" class="form-control" name="legalRepOccupation">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputMarried">Married Status</label>
                                <select id="inputMarried" class="form-control" name="legalRepMaritalStatus">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputaddress">Home Address</label>
                                <input type="text" class="form-control" id="inputaddress" name="legalRepHomeAddress"
                                    placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit.">
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Step 2 section 2 End -->
        </div>

     <!-- step four -->
     <div class="step">
        <!-- Step 2 section 2 start -->
<section class="from-wrapper py-4">
 <div class="container">
     <div class="row text-center">
         <div class="col-md-12">
             <div class="form-head">
                 <h2>Selecting Responsabilidad Limitada</h2>
             </div>
         </div>
         <div class="col-md-12">
             <div class="form-inner-wrap">
                 <div class="row">
                     <div class="represent text-center py-5">
                         <p>
                             Lorem ipsum dolor sit amet consectetur
                         </p>
                         <p>Legal Representation:</p>
                     </div>
                     <div class="form-group col-md-6">
                         <label for="firstName">First Name</label>
                         <input type="text" class="form-control" id="firstName" placeholder="First Name">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="lastName">Last Name</label>
                         <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                     </div>
                     <div class="form-group drop-wrapper col-md-12">
                         <label for="inputNationnal">Nationality</label>
                         <select id="inputNationnal" class="form-control">
                             <option value="0">Choose...</option>
                             <option value="1">Select 1</option>
                             <option value="2">Select 2</option>
                             <option value="3">Select 3</option>
                         </select>
                     </div>
                     <div class="form-group col-md-12">
                         <label for="identification">Identification</label>
                         <input type="text" class="form-control" id="identification"
                             placeholder="Passport number">
                     </div>
                     <div class="custom-file">
                         <label class="custom-file-label d-block" for="customFile">Upload your file here</label>
                         <input type="file" id="upload" hidden />
                         <label for="upload" class="uploadFile">Upload File</label>
                     </div>
                     <div class="form-group drop-wrapper col-md-12">
                         <label for="inputOccupation">Occupation</label>
                         <select id="inputOccupation" class="form-control">
                             <option value="0">Choose...</option>
                             <option value="1">Select 1</option>
                             <option value="2">Select 2</option>
                             <option value="3">Select 3</option>
                         </select>
                     </div>
                     <div class="form-group drop-wrapper col-md-12">
                         <label for="inputMarried">Married Status</label>
                         <select id="inputMarried" class="form-control">
                             <option value="0">Choose...</option>
                             <option value="1">Select 1</option>
                             <option value="2">Select 2</option>
                             <option value="3">Select 3</option>
                         </select>
                     </div>
                     <div class="form-group col-md-12">
                         <label for="inputaddress">Home Address</label>
                         <input type="text" class="form-control" id="inputaddress"
                             placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit.">
                     </div>
                    
                 </div>
             </div>
         </div>
     </div>
 </div>
</section>
<!-- Step 2 section 2 End -->
 </div>




        <!-- step five -->
        <div class="step">
                 <!-- Step 2 section 2 start -->
    <section class="from-wrapper py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="form-head">
                        <h2>Select SOCIEDAD ANONIMA</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-inner-wrap">
                        <div class="row">
                            <div class="represent text-center py-5">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                </p>
                                <p>Legal Representation:</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputNationnal">Nationality</label>
                                <select id="inputNationnal" class="form-control">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="identification">Identification</label>
                                <input type="text" class="form-control" id="identification"
                                    placeholder="Passport number">
                            </div>
                            <div class="custom-file">
                                <label class="custom-file-label d-block" for="customFile">Upload your file here</label>
                                <input type="file" id="upload" hidden />
                                <label for="upload" class="uploadFile">Upload File</label>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputOccupation">Occupation</label>
                                <select id="inputOccupation" class="form-control">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group drop-wrapper col-md-12">
                                <label for="inputMarried">Married Status</label>
                                <select id="inputMarried" class="form-control">
                                    <option value="0">Choose...</option>
                                    <option value="1">Select 1</option>
                                    <option value="2">Select 2</option>
                                    <option value="3">Select 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputaddress">Home Address</label>
                                <input type="text" class="form-control" id="inputaddress"
                                    placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit.">
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Step 2 section 2 End -->
           
        </div> 
    
        <!-- start previous / next buttons -->
        <div class="form-footer d-flex justify-content-between">
            <div class="btn-wrap">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="addMore">Add More</button>
            </div>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
        <!-- end previous / next buttons -->
    </form>














<!--Form end-->

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


    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="assets/js/jquery.fancybox.min.js"></script> -->
    <!-- <script src="assets/js/popper-min.js"></script> -->
    <!-- <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/step-form-js.js"></script> -->

    <script>
        var typeId = 1;
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

        function getTypeId(id) {
            alert(id);
            typeId = id
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
