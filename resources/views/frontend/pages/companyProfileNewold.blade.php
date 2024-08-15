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

    
    <style>
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
        .form-ftr{
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            background: #fff;
            padding: 10px 0;
            box-shadow: 0px -5px 10px #ddd;
        }
        .form-ftr button{
            background: #ca5f1b;
            color: #fff !important;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            padding: 15px 25px; 
        }
        .form-ftr button:disabled,
        .form-ftr button[disabled]{
          background-color: #cccccc;
          color: #666666;
        }
    </style>
    <script>
        function redirectToLogin() {
            event.preventDefault(); // Prevent form submission
            // Check if the user is logged in
            var isLoggedIn = false; // Replace this with your actual login check

            if (!isLoggedIn) {
                // Redirect to login page
                window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/customer/login";
            } else {
                // If logged in, redirect to payment page
                window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/payment";
            }
        }

        // This is an example function to simulate login check
        // Replace this with your actual login check logic
        function checkLogin() {
            // Simulating user login status check
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve(true); // Change to false to simulate a non-logged-in user
                }, 1000); // Simulating network delay
            });
        }

        $(document).ready(function() {
            $('#submit_btn').click(function(event) {
                event.preventDefault(); // Prevent form submission
                checkLogin().then(isLoggedIn => {
                    if (!isLoggedIn) {
                        // Redirect to login page
                        window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/customer/login";
                    } else {
                        // If logged in, redirect to payment page
                        window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/payment";
                    }
                });
            });
        });
    </script>
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
 </header>
 <div class="main-form-wrapper" style="background-color: #f0f4f5; padding: 70px 0;">
     <div class="container">
            <form id="stepForm" style="background: none; border-radius:0; padding: 0;">
                <div class="step">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="form-head mb-5">
                                <h1>Start your business in Costa Rica with confidence</h1>
                                <p>Join over 1,000,000 happy business owners. Get started by choosing your entity type and state of formation.</p>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center;">
                        
                            @foreach($packages1 as $package)
                                    <?php if($package['companyType']['id'] == 1) : ?>
                                        <div class="package" id="packageselected1">
                                            <div class="col-md-12 mx-4" onclick='selectPackage("pkg_{{$package['id']}} _type_{{$package['companyType']['id']}}")'  id="pkg_{{$package['id']}} _type_{{$package['companyType']['id']}}">
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
                                                </ul>
                                            </div>
                                            </div>
                                    <?php endif; ?>
                                    </div>
                                    @endforeach
                    </div>
                </div>
                <div class="step">
                    <section class="from-wrapper  py-4">
                      <div class="container">
                        <div class="row justify-content-center text-center">
                          <div class="col-md-7">
                            <div class="form-head">
                              <h2>Selecting Responsabilidad Limitada</h2>
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="form-inner-wrap">
                              <p>Please provide three names of your Company</p>
                              <div class="row">
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="firstCompanyName" name="firstCompanyName" placeholder="ABC Company" value="{{ $companyName }}" required>
                                </div>
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="secondCompanyName" name="secondCompanyName" placeholder="CDE Company" required>
                                </div>
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="thirdCompanyName" name="thirdCompanyName" placeholder="EFG Company" required>
                                </div>
                                <div class="form-group col-md-12">
                                  <p>Provide your Domicilio Fiscal, which must be a Costa Rican address.</p>
                                  <div class="form-check">
                                    <p>Don`t have one yet? No worries! As part of our services, we offer the option to use our office address..</p>
                                    <input class="form-check-input" type="checkbox" name="isSameAddress" onclick="addressUpdate()" value="" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck"> I will use for office adddress instead </label>
                                  </div>
                                </div>
                                <div class="gridbox">
                                    <div class="row">
                                        <div class="form-group col-md-12 selfAddress">
                                          <label for="inputcountry">Select Country</label>
                                          <select id="inputNationnal" class="form-control" name="firstShareholderNationality" required="">
                                                <option value="0">Choose...</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-6 selfAddress">
                                          <label for="inputCity">Street Address</label>
                                          <input type="text" class="form-control" id="streetAddress" name="streetAddress" placeholder="Lorem ipsum dolor" required>
                                        </div>
                                        <div class="form-group col-md-6 selfAddress">
                                          <label for="inputCity">Address (Cont)</label>
                                          <input type="text" class="form-control" id="addressCont" name="addressCont" placeholder="Lorem ipsum dolor" required>
                                        </div>
                                        <div class="form-group drop-wrapper col-md-12 selfAddress">
                                          <label for="inputCity">City</label>
                                          <select id="inputCity_select" class="form-control" name="city" required>
                                            <option value="0">Choose...</option>
                                            <option value="1">Select 1</option>
                                            <option value="2">Select 2</option>
                                            <option value="3">Select 3</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-6 selfAddress">
                                          <label for="inputState">State</label>
                                          <input type="text" class="form-control" id="inputState" name="state" required>
                                        </div>
                                        <div class="form-group col-md-6 selfAddress">
                                          <label for="inputZip">Zip code</label>
                                          <input type="text" class="form-control" id="inputZip" name="zipCode" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="shareHolder-container" class="share-holder">
                                  <div id="form-template">
                                    <div class="represent text-center py-5 selfAddress" required>
                                      <p>Legal Representation:</p>
                                      <h3>ShareHolder 1</h3>
                                    </div>
                                    <div class="row">
                                      <div class="form-group col-md-6">
                                        <label for="firstName">First Name</label>
                                        <input type="text" required class="form-control" id="firstShareholderFirstName" name="firstShareholderFirstName" placeholder="First Name" required>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="firstShareholderLastName" name="firstShareholderLastName" placeholder="Last Name" required>
                                      </div>
                                    </div>
                                    <div class="form-group drop-wrapper col-md-12">
                                      <label for="inputNationnal">Nationality</label>
                                      <input type="text" class="form-control" id="firstShareholderNationality" name="firstShareholderNationality" placeholder="Nationality" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label for="identification">Identification</label>
                                      <input type="text" class="form-control" id="firstShareholderIdentification" name="firstShareholderIdentification" placeholder="Passport number" required>
                                    </div>
                                    <div class="custom-file">
                                      <label class="custom-file-label d-block" for="customFile">Upload your file here</label>
                                      <input type="file" id="uploadFile" hidden name="file"  required>
                                      <label for="uploadFile" class="uploadFile">Upload File</label>
                                    </div>
                                    <div class="form-group drop-wrapper col-md-12">
                                      <label for="inputOccupation">Occupation</label>
                                      <select id="inputOccupation" class="form-control" name="firstShareholderOccupation" required>
                                        <option value="0">Choose...</option>
                                        <option value="1">Select 1</option>
                                        <option value="2">Select 2</option>
                                        <option value="3">Select 3</option>
                                      </select>
                                    </div>
                                    <div class="form-group drop-wrapper col-md-12">
                                      <label for="inputMarried">Married Status</label>
                                      <select id="inputMarried" class="form-control" name="firstShareholderMaritalStatus" required>
                                        <option value="0">Choose...</option>
                                        <option value="1">Select 1</option>
                                        <option value="2">Select 2</option>
                                        <option value="3">Select 3</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label for="inputaddress">Home Address</label>
                                      <input type="text" class="form-control" id="inputaddress" name="firstShareholderHomeAddress" placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit." required>
                                    </div>
                                    <div class="form-group align col-md-12" id="legel-checkbox-heading" required>
                                      <p class="m-0">Will be a legal Representative</p>
                                      <span class="bg-brown">?</span>
                                    </div>
                                    <div class="form-group bg-white col-md-12" id="legel-checkbox">
                                      <p>Legal Representatives are authorized to sign in the name of the company once shareholders agree to what is being signed for. Usually, all shareholders are Legal Representatives.</p>
                                      <div class="radio-wrap">
                                        <div class="radio">
                                          {{-- name="represent" --}}
                                          <input type="radio" id="legel_representative_inputYes" name="firstShareholderIsLR" value="inputYes" class="firstShareholderIsLR" onchange="onChangeRepresentative()" />
                                          <label for="inputYes">Yes</label>
                                        </div>
                                        <div class="radio">
                                          {{-- name="represent" --}}
                                          <input type="radio" id="legel_representative_inputNo" name="firstShareholderIsLR" value="inputNo" class="firstShareholderIsLR" checked onchange="onChangeRepresentative()" />
                                          <label for="inputNo">No</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group align col-md-12" id="manager-checkbox-heading">
                                      <p class="m-0">Will I be assigned as a Manager</p>
                                      <span class="bg-brown">?</span>
                                    </div>
                                    <div class="form-group bg-white col-md-12" id="manager-checkbox">
                                      <p>Managers are responsible for the administration of the company. Therefore, all shareholders, some, or none of them can take on this role.</p>
                                      <div class="radio-wrap">
                                        <div class="radio">
                                          <input type="radio" id="inputManageYes" name="firstShareholderIsManger" class="firstShareholderIs-Manger" value="1" onchange="onChangeRepresentative()" />
                                          <label for="inputManageYes">Yes</label>
                                        </div>
                                        <div class="radio">
                                          <input type="radio" id="inputManageNo" name="firstShareholderIsManger" class="firstShareholderIs-Manger" value="0" checked onchange="onChangeRepresentative()" />
                                          <label for="inputManageNo">No</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group align col-md-12">
                                      <p class="m-0">Select the Amount of Shares Aligned</p>
                                    </div>
                                    <div class="row">
                                      <div class="form-group col-md-6">
                                        <label for="firstName1">First Name</label>
                                        <input type="text" class="form-control" id="firstName1" placeholder="First Name">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="lastName1">Last Name</label>
                                        <input type="text" class="form-control" id="lastName1" placeholder="Last Name">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label for="shares">Percentage Of Shares</label>
                                      <input type="text" class="form-control SharehoderPercentage" required value="100" id="firstSharehoderPercentage" name="firstSharehoderPercentage" placeholder="Percentage of Shares">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    
                    <section class="form-ftr">
                        <div class="container">
                            <div class="row" style="justify-content: center;">
                                <div class="col-md-7" style="display:flex; align-items: center; justify-content: space-between;">
                                    <button  type="button" id="addMore">Add More</button>
                                    <button  type="button" class="next" id="nextstep2">Next</button>
                                    <button  href="#" type="submit" id="submit_btn" onclick="redirectToLogin()">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="step">
                    <section class="from-wrapper py-4">
                        <div class="container">
                            <div class="row justify-content-center text-center">
                                <div class="col-md-7">
                                    <div class="form-head">
                                        <h2>Selecting Responsabilidad Limitada</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
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
                                                <input type="text" class="form-control" id="firstName" name="legalRepFirstName" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lastName">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="legalRepLatName" placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group drop-wrapper col-md-12">
                                                <label for="inputNationnal">Nationality</label>
                                                <select id="inputNationnal" class="form-control" name="legalRepLastNationality" required>
                                                    <option value="0">Choose...</option>
                                                    <option value="1">Select 1</option>
                                                    <option value="2">Select 2</option>
                                                    <option value="3">Select 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="identification">Identification</label>
                                                <input type="text" class="form-control" id="identification" name="legalRepIdentification"
                                                    placeholder="Passport number" required>
                                            </div>
                                            <div class="custom-file">
                                                <label class="custom-file-label d-block" for="customFile">Upload your file here</label>
                                                <input type="file" id="upload" hidden name="legalRepDocument" />
                                                <label for="upload" class="uploadFile">Upload File</label>
                                            </div>
                                            <div class="form-group drop-wrapper col-md-12">
                                                <label for="inputOccupation">Occupation</label>
                                                <select id="inputOccupation" class="form-control" name="legalRepOccupation" required>
                                                    <option value="0">Choose...</option>
                                                    <option value="1">Select 1</option>
                                                    <option value="2">Select 2</option>
                                                    <option value="3">Select 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group drop-wrapper col-md-12">
                                                <label for="inputMarried">Married Status</label>
                                                <select id="inputMarried" class="form-control" name="legalRepMaritalStatus" required>
                                                    <option value="0">Choose...</option>
                                                    <option value="1">Select 1</option>
                                                    <option value="2">Select 2</option>
                                                    <option value="3">Select 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputaddress">Home Address</label>
                                                <input type="text" class="form-control" id="inputaddress" name="legalRepHomeAddress"
                                                    placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit." required>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </section>
                     <section class="form-ftr">
                        <div class="container">
                            <div class="row" style="justify-content: center;">
                                <div class="col-md-7" style="display:flex; align-items: center; justify-content: space-between;">
                                    <button type="button" class="prev">BacK</button>
                                    <button type="button" class="next">Next</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
                <div class="step">
                    <section class="from-wrapper py-4">
                        <div class="container">
                            <div class="row justify-content-center text-center">
                                <div class="col-md-7">
                                    <div class="form-head">
                                        <h2>Select SOCIEDAD ANONIMA</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-inner-wrap">
                                        <div class="row">
                                            <div class="represent text-center py-5">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur
                                                </p>
                                                <p>Manager</p>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="firstName">First Name</label>
                                                <input type="text" class="form-control" id="firstName_manager" placeholder="First Name">
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
                    <section class="form-ftr">
                        <div class="container">
                            <div class="row" style="justify-content: center;">
                                <div class="col-md-7" style="display:flex; align-items: center; justify-content: space-between;">
                                    <button type="button" class="prev">Back</button>
                                    <button href="#" type="submit" id="submit_btn" onclick="redirectToLogin()">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
            </form>
     </div>
 </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
<!-- Create Company Step Form -->
<script type="text/javascript">
   $(document).ready(function() {
    var currentStep = 0;
    var totalSteps = $(".step").length;
    var selectedPackageId = null; // Variable to store the selected package ID
    showStep(currentStep);

    function showStep(step) {
        var steps = $(".step");
        steps.removeClass("active");
        steps.eq(step).addClass("active");
        validateStep();
    }

    function validateStep() {
        var isValid = true;
        $(".step.active input[required]").each(function() {
            if ($(this).val() === "") {
                isValid = false;
                return false;
            }
        });

        if (isValid) {
            $(".step.active .next").prop("disabled", false);
        } else {
            $(".step.active .next").prop("disabled", true);
        }
    }

    $(".next").click(function() {
        if (validateCurrentStep()) {
            if (currentStep < totalSteps - 1) {
                currentStep++;
                showStep(currentStep);
            } else {
                $("#stepForm").submit();
            }
        } else {
            alert("Please fill all required fields before proceeding.");
        }
    });

    $(".prev").click(function() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    $("#stepForm input[required]").on("input", function() {
        validateStep();
    });

    $("#stepForm").submit(function(event) {
        alert("Form submitted!");
        console.log("Selected package ID:", selectedPackageId); // Log the selected package ID
        event.preventDefault();
    });

    $(".package").click(function() {
        selectedPackageId = $(this).attr("id"); // Store the ID of the selected package
        if (validateCurrentStep()) {
            if (currentStep < totalSteps - 1) {
                currentStep++;
                showStep(currentStep);
            } else {
                $("#stepForm").submit();
            }
        } else {
            alert("Please fill all required fields before proceeding.");
        }
    });

    // Initial validation
    validateStep();

    function validateCurrentStep() {
        var isValid = true;
        $(".step.active input[required]").each(function() {
            if ($(this).val() === "") {
                isValid = false;
                return false;
            }
        });
        return isValid;
    }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const formTemplate = document.getElementById('form-template');
        const formContainer = document.getElementById('shareHolder-container');
        const addMoreButton = document.getElementById('addMore');
        const errorMessageSpan = document.getElementById('percentage_shareholder');
        const nextButton       = document.getElementById('nextBtn-1'); // Assuming the button has id "nextButton"

        let count = 1;
        let shareholderCount = 1;

        console.log('hello');

        const getCombinedSharePercentage = () => {
            const shareInputs = formContainer.querySelectorAll('input[name="firstSharehoderPercentage"]');
            return Array.from(shareInputs).reduce((total, input) => total + parseFloat(input.value || 0), 0);
        };

        const allSharesGreaterThanZero = () => {
            const shareInputs = formContainer.querySelectorAll('input[name="firstSharehoderPercentage"]');
            return Array.from(shareInputs).every(input => parseFloat(input.value || 0) > 0);
        };

        const canAddMoreForms = () => {
            return getCombinedSharePercentage() < 100 && allSharesGreaterThanZero();
        };

        const canProceedToNext = () => {
            const combinedPercentage = getCombinedSharePercentage();
            return combinedPercentage > 0 && combinedPercentage <= 100 && allSharesGreaterThanZero();
        };

        const updateAddMoreButtonState = () => {
            if (canAddMoreForms()) {
                addMoreButton.disabled = false;
                errorMessageSpan.textContent = '';  // Clear error message
            } else {
                addMoreButton.disabled = true;
                if (!allSharesGreaterThanZero()) {
                    errorMessageSpan.textContent = 'All fields must have a value greater than 0.';
                } else if (getCombinedSharePercentage() > 100) {
                    errorMessageSpan.textContent = 'The combined percentage of shares must be less than 100.';
                }
            }
        };

        addMoreButton.addEventListener('click', () => {

            console.log('click add more');
            if (!canAddMoreForms()) return;

            // Clone the form template
            const newForm = formTemplate.cloneNode(true);
            shareholderCount++;
            
            // Update the form header with the new shareholder number
            newForm.querySelector('h3').textContent = `ShareHolder ${shareholderCount}`;
            
            // Reset form inputs
            const inputs = newForm.querySelectorAll('input');
            inputs.forEach((input, index) => {
                if (input.type === 'text' || input.type === 'file') {
                    input.value = '';
                }
                
                if (input.type === 'radio' && input.name == "firstShareholderIsManger") {
                    input.name = "firstShareholderIsManger-"+count;
                }

                if (input.type === 'radio' && input.name == "firstShareholderIsLR") {
                    input.name = "firstShareholderIsLR-"+count;
                }

                input.id = input.id.replace(/\d+$/, '') + shareholderCount; // Update id to be unique
            });

            // Update the file input
            const fileInput = newForm.querySelector('input[type="file"]');
            fileInput.id = `uploadFile${shareholderCount}`;
            const fileLabel = newForm.querySelector('label[for="uploadFile"]');
            fileLabel.setAttribute('for', `uploadFile${shareholderCount}`);
            
            // Append the cloned form to the form container
            formContainer.appendChild(newForm);

            count++
            // Update button state
            updateAddMoreButtonState();
        });

        // Add event listener to the percentage input to check the combined value
        formContainer.addEventListener('input', (event) => {
            if (event.target.name === 'firstSharehoderPercentage') {
                updateAddMoreButtonState();
            }
        });

        // Event listener for the next button to validate combined percentage
        nextButton.addEventListener('click', () => {
            if (canProceedToNext()) {
                nextPrev_1();  // Call the next step function if validation passes
            } else {
                if (!allSharesGreaterThanZero()) {
                    errorMessageSpan.textContent = 'All fields must have a value greater than 0.';
                } else if (getCombinedSharePercentage() >= 100) {
                    errorMessageSpan.textContent = 'The combined percentage of shares must be less than 100.';
                }
            }
        });

        // Initial state update
        updateAddMoreButtonState();
    });

    function onChangeRepresentative() {
        const formContainer = document.getElementById('shareHolder-container');
        const nextButton = document.getElementById('nextBtn-1');
        const submitButton = document.getElementById('submit_btn');
        const radioGroupsRepresentative = {};
        const noOptionRespresentive = [];

        const radioInputs = formContainer.querySelectorAll('input.firstShareholderIsLR');

        // Group radio buttons by their name
        radioInputs.forEach(input => {
            if (!radioGroupsRepresentative[input.name]) {
                radioGroupsRepresentative[input.name] = [];
            }
            radioGroupsRepresentative[input.name].push(input);
        });

        
        // Check if each group has a selected radio button
        for (const groupName in radioGroupsRepresentative) {
            const group = radioGroupsRepresentative[groupName];
            //const groupAnyYesSelected = group.some(input => input.checked && input.value === 'inputYes');
            const groupAllSelected = group.some(input => input.checked && input.value === 'inputNo');

            if (groupAllSelected) {
                noOptionRespresentive.push('false')
            }
        }


        const radioGroupsManager = {};
        const noOptionManager = [];

        const radioInputsManager = formContainer.querySelectorAll('input.firstShareholderIs-Manger');

        // Group radio buttons by their name
        radioInputsManager.forEach(input => {
            if (!radioGroupsManager[input.name]) {
                radioGroupsManager[input.name] = [];
            }
            radioGroupsManager[input.name].push(input);
        });

        // Check if each group has a selected radio button
        for (const groupNameManager in radioGroupsManager) {
            const groupManager = radioGroupsManager[groupNameManager];
            //const groupAnyYesSelected = group.some(input => input.checked && input.value === 'inputYes');
            const groupAllSelectedManager = groupManager.some(input => input.checked && input.value === 'inputNo');

            if (groupAllSelectedManager) {
                noOptionManager.push('false')
            }
        }

        
        if (noOptionRespresentive.length <= 0 && noOptionRespresentive.length <= 0) {
                nextButton.style.display = 'none';
                submitButton.style.display = 'inline-block';
        } else {
            nextButton.style.display = 'inline-block';
            submitButton.style.display = 'none';
        }
    }
</script>
<script>
    // Check if both radio buttons are selected
    function checkRadios() {
        var legalRepresentativeChecked = document.getElementById('legel_representative_inputYes').checked;
        var managerChecked = document.getElementById('inputManageYes').checked;

        var legalRepresentativeChecked2 = document.getElementById('legel_representative_inputNo').checked;
        var managerChecked2 = document.getElementById('inputManageNo').checked;

        if (legalRepresentativeChecked && managerChecked) {
            console.log("chal raha hai");
            document.getElementById('submit_btn').style.display = 'block';
            document.getElementById('nextstep2').style.display = 'none';
        } 
        else if (legalRepresentativeChecked2 && managerChecked2) {
            console.log("nahi chal raha");
            document.getElementById('nextstep2').style.display = 'block';
            document.getElementById('submit_btn').style.display = 'none';
        }
    }

    // Attach event listeners to the radio buttons
    document.getElementById('legel_representative_inputYes').addEventListener('change', checkRadios);
    document.getElementById('inputManageYes').addEventListener('change', checkRadios);
    document.getElementById('legel_representative_inputNo').addEventListener('change', checkRadios);
    document.getElementById('inputManageNo').addEventListener('change', checkRadios);

    // Initially check radios on page load
    checkRadios();
</script>
<script>
    $(document).ready(function() {
      $.ajax({
        url: 'https://restcountries.com/v3.1/all',
        method: 'GET',
        success: function(data) {
          var select = $('#inputNationnal');
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
    function addressUpdate() {
      var gridbox = document.querySelector('.gridbox');
      var isChecked = document.getElementById('gridCheck').checked;

      if (isChecked) {
        gridbox.style.display = 'none';
        toggleRequiredFields(false);
      } else {
        gridbox.style.display = 'block';
        toggleRequiredFields(true);
      }
    }

    function toggleRequiredFields(isRequired) {
      var fields = document.querySelectorAll('.gridbox .form-control');

      fields.forEach(function(field) {
        field.required = isRequired;
      });
    }
</script>
<!-- Create Company Step Form End -->
</body>
</html>

