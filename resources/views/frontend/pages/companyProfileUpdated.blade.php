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


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
        
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
        .alert {
            color: red;
            display: none;
        }
        .alert2{
            color: red;
            display: none;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .custom-file {
            position: relative;
            display: inline-block;
        }

        .uploadFile {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .progress-container {
            width: 100%;
            background-color: #f3f3f3;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress-bar {
            height: 20px;
            background-color: #007bff;
            width: 0;
        }

        .file-name {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("submit_btn").addEventListener("click", function(event) {
                event.preventDefault(); // Prevent the default form submission
                // Redirect to the payment page
                window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/payment";
            });
        });
    </script> -->
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
            // debugger;
            $('#submit_btn').click(function(event) {
                alert('submitting.....');
                submitCompanyDetails();
                // event.preventDefault(); // Prevent form submission
                // checkLogin().then(isLoggedIn => {
                //     if (!isLoggedIn) {
                //         // Redirect to login page
                //         window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/customer/login";
                //     } else {
                //         // If logged in, redirect to payment page
                //         window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/payment";
                //     }
                // });
            });


            $.ajax({
            url: 'https://restcountries.com/v3.1/all',
            method: 'GET',
            success: function(data) {
              // Select all elements with the class 'inputNationnal'
              var selects = $('.inputNationnal');
              var countryNames = [];

          

              data.forEach(function(country) {
                // Append the country options to each select element

                countryNames.push(country.name.common);

                  selects.each(function() {
                    $(this).append($('<option>', {
                      value: country.name.common,
                      text: country.name.common
                    }));
                  });

              });

              console.log(countryNames);
            },
            error: function(error) {
              console.log('Error fetching country data:', error);
            }
          });

        });
    </script>
</head>

<body>
 <div class="main-form-wrapper" style="background-color: #f0f4f5; padding: 70px 0;">
     <div class="container">
        <form id="stepForm" style="background: none; border-radius:0; padding: 0; justify-content: center;">
            <div class="step">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="form-head mb-5">
                            <h1>Start your business in Costa Rica with confidence</h1>
                            <p>Join over 1,000,000 happy business owners. Get started by choosing your entity type and state of formation.</p>
                        </div>
                    </div>
                </div>
                <div class="screen1" style="display: flex; align-items: center; justify-content: center;">
                    
                        @foreach($packages1 as $package)
                                <?php if($package['companyType']['id'] == 1) : ?>
                                    <div class="package" id="packageselected1">
                                        <div class="col-md-12 mx-4"  id="pkg_{{$package['id']}} _type_{{$package['companyType']['id']}}">
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
              <section class="from-wrapper py-4">
                <div class="container">
                  <div class="row justify-content-center text-center">
                    <div class="col-md-7">
                      <div class="form-head">
                        <h2>Contact Person</h2>
                        <p style="width: 100%; margin-top:20px">
                          Please provide the name of the person responsible for this order whom we may contact if additional
                          information is needed.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="form-inner-wrap">
                        <div id="contactPerson">
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="firstName">First Name <span>*</span></label>
                              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="" required>
                              <span class="first-name-error error"></span>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="lastName">Last Name <span>*</span></label>
                              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                              <span class="last-name-error error"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="emailAddress">Email Address <span>*</span></label>
                              <input type="email" class="form-control email-field" id="emailAddress" name="email" placeholder="Enter Email Address" value="" required>
                              <span class="email-error error"></span>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="phoneNumber">Phone Number <span>*</span></label>
                              <input type="tel" class="form-control phone-field" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" required>
                              <span class="phone-error error"></span>
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
                      <button type="button" class="prev">BacK</button>
                      <button type="button" class="next" id="nextstep2" onclick="validateForm()">Next</button>
                    </div>
                  </div>
                </div>
              </section>
            </div>


            <div class="step" id="create_companypro">
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
                          <p>Please provide three names of your Company <span>*</span></p>
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
                              <p>Provide your Domicilio Fiscal, which must be a Costa Rican address. </p>
                              <div class="form-check">
                                <p>Don`t have one yet? No worries! As part of our services, we offer the option to use our office address..</p>
                                <input class="form-check-input" type="checkbox" name="isSameAddress" onclick="addressUpdate()" value="" id="gridCheck">
                                <label class="form-check-label" for="gridCheck"> I will use for office adddress instead </label>
                              </div>
                            </div>
                            <div class="gridbox">
                                <div class="row">
                                    <div class="form-group col-md-12 selfAddress">
                                      <label for="inputcountry">Select Country <span>*</span></label>
                                      <select id="inputNationnal" class="form-control inputNationnal" name="firstShareholderNationality" required>
                                            <option value="0">Choose...</option>

                                      </select>
                                    </div>
                                    <div class="form-group col-md-6 selfAddress">
                                      <label for="inputCity">Street Address <span>*</span></label>
                                      <input type="text" class="form-control" id="streetAddress" name="streetAddress" placeholder="Lorem ipsum dolor" required>
                                    </div>
                                    <div class="form-group col-md-6 selfAddress">
                                      <label for="inputCity">Address (Cont) <span>*</span></label>
                                      <input type="text" class="form-control" id="addressCont" name="addressCont" placeholder="Lorem ipsum dolor" required>
                                    </div>
                                    <div class="form-group drop-wrapper col-md-12 selfAddress">
                                      <label for="inputCity">City <span>*</span></label>
                                      <select id="inputCity_select" class="form-control" name="city" required>
                                        <option value="0">Choose...</option>
                                        <option value="1">Select 1</option>
                                        <option value="2">Select 2</option>
                                        <option value="3">Select 3</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6 selfAddress">
                                      <label for="inputState">State <span>*</span></label>
                                      <input type="text" class="form-control" id="inputState" name="state" required>
                                    </div>
                                    <div class="form-group col-md-6 selfAddress">
                                      <label for="inputZip">Zip code <span>*</span></label>
                                      <input type="text" class="form-control" id="inputZip" name="zipCode" required>
                                    </div>
                                </div>
                            </div>
                            <div id="shareHolder-container" class="share-holder col-md-12">
                              <div id="form-template">
                                <div class="represent text-center py-5 selfAddress" required>
                                  <h3>ShareHolder 1</h3>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="firstName">First Name <span>*</span></label>
                                    <input type="text" required class="form-control" id="firstShareholderFirstName" name="firstShareholderFirstName" placeholder="First Name" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="lastName">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="firstShareholderLastName" name="firstShareholderLastName" placeholder="Last Name" required>
                                  </div>
                                </div>
                                <div class="form-group drop-wrapper col-md-12">
                                  <label for="inputNationnal">Nationality <span>*</span></label>
                                  <select id="inputNationnal" class="form-control inputNationnal" name="firstShareholderNationality" required>
                                            <option value="0">Choose...</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-12">
                                  <label for="identification">Identification <span>*</span></label>
                                  <input type="text" class="form-control" id="firstShareholderIdentification" name="firstShareholderIdentification" placeholder="Passport number" required>
                                </div>
                                <div class="custom-file">
                                  <label class="custom-file-label d-block" for="customFile">Upload your file here <span>*</span></label>
                                  <input type="file" id="uploadFile" hidden name="file" required>
                                  <label for="uploadFile" class="uploadFile">Upload File</label>
                                </div>
                                <div id="progressContainer" class="progress-container" style="display:none;">
                                    <div id="progressBar" class="progress-bar"></div>
                                </div>
                                <div id="fileName" class="file-name"></div>
                                <div class="form-group drop-wrapper col-md-12">
                                  <label for="inputOccupation">Occupation <span>*</span></label>
                                  <select id="inputOccupation" class="form-control" name="firstShareholderOccupation" required>
                                      <option value="">Select an occupation</option>
                                      <option value="Accountant">Accountant</option>
                                      <option value="Actor/Actress">Actor/Actress</option>
                                      <option value="Architect">Architect</option>
                                      <option value="Artist">Artist</option>
                                      <option value="Baker">Baker</option>
                                      <option value="Barista">Barista</option>
                                      <option value="Bartender">Bartender</option>
                                      <option value="Biologist">Biologist</option>
                                      <option value="Blogger">Blogger</option>
                                      <option value="Carpenter">Carpenter</option>
                                      <option value="Chef">Chef</option>
                                      <option value="Chemist">Chemist</option>
                                      <option value="Civil Engineer">Civil Engineer</option>
                                      <option value="Computer Programmer">Computer Programmer</option>
                                      <option value="Copywriter">Copywriter</option>
                                      <option value="Customer Service Representative">Customer Service Representative</option>
                                      <option value="Data Analyst">Data Analyst</option>
                                      <option value="Dentist">Dentist</option>
                                      <option value="Designer">Designer (Graphic Designer, Fashion Designer, etc.)</option>
                                      <option value="Doctor">Doctor</option>
                                      <option value="Electrician">Electrician</option>
                                      <option value="Engineer">Engineer (Mechanical Engineer, Electrical Engineer, etc.)</option>
                                      <option value="Entrepreneur">Entrepreneur</option>
                                      <option value="Farmer">Farmer</option>
                                      <option value="Financial Advisor">Financial Advisor</option>
                                      <option value="Firefighter">Firefighter</option>
                                      <option value="Fitness Instructor">Fitness Instructor</option>
                                      <option value="Flight Attendant">Flight Attendant</option>
                                      <option value="Freelancer">Freelancer</option>
                                      <option value="Geologist">Geologist</option>
                                      <option value="Hair Stylist">Hair Stylist</option>
                                      <option value="Human Resources Manager">Human Resources Manager</option>
                                      <option value="Interior Designer">Interior Designer</option>
                                      <option value="Journalist">Journalist</option>
                                      <option value="Lawyer">Lawyer</option>
                                      <option value="Librarian">Librarian</option>
                                      <option value="Marketing Manager">Marketing Manager</option>
                                      <option value="Musician">Musician</option>
                                      <option value="Nurse">Nurse</option>
                                      <option value="Nutritionist">Nutritionist</option>
                                      <option value="Paramedic">Paramedic</option>
                                      <option value="Pharmacist">Pharmacist</option>
                                      <option value="Photographer">Photographer</option>
                                      <option value="Physical Therapist">Physical Therapist</option>
                                      <option value="Pilot">Pilot</option>
                                      <option value="Police Officer">Police Officer</option>
                                      <option value="Professor">Professor</option>
                                      <option value="Project Manager">Project Manager</option>
                                      <option value="Real Estate Agent">Real Estate Agent</option>
                                      <option value="Receptionist">Receptionist</option>
                                      <option value="Research Scientist">Research Scientist</option>
                                      <option value="Sales Representative">Sales Representative</option>
                                      <option value="Social Worker">Social Worker</option>
                                      <option value="Software Developer">Software Developer</option>
                                      <option value="Teacher">Teacher</option>
                                      <option value="Translator">Translator</option>
                                      <option value="Travel Agent">Travel Agent</option>
                                      <option value="Truck Driver">Truck Driver</option>
                                      <option value="Veterinarian">Veterinarian</option>
                                      <option value="Waiter/Waitress">Waiter/Waitress</option>
                                  </select>
                                </div>
                                <div class="form-group drop-wrapper col-md-12">
                                  <label for="inputMarried">Married Status <span>*</span></label>
                                  <select id="inputMarried" class="form-control" name="firstShareholderMaritalStatus" required>
                                    <option value="0">Choose...</option>
                                    <option value="1">Single</option>
                                    <option value="2">Married</option>
                                    <option value="3">Divorced</option>
                                    <option value="4">Widowed</option>
                                    <option value="5">Separated</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-12">
                                  <label for="inputaddress">Home Address <span>*</span></label>
                                  <input type="text" class="form-control" id="inputaddress" name="firstShareholderHomeAddress" placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit." required>
                                </div>
                                <div class="form-group align col-md-12">
                                  <p class="m-0">Select the Amount of Shares Aligned</p>
                                </div>
                                <!-- <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="firstName1">First Name</label>
                                    <input type="text" class="form-control" id="firstName1" placeholder="First Name">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="lastName1">Last Name</label>
                                    <input type="text" class="form-control" id="lastName1" placeholder="Last Name">
                                  </div>
                                </div> -->
                                <div class="form-group col-md-12">
                                  <label for="shares">Percentage Of Shares <span>*</span></label>
                                  <input type="number" class="form-control SharehoderPercentage" id="firstSharehoderPercentage" name="firstSharehoderPercentage" placeholder="Percentage of Shares" max="100" required>

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
                                <div>
                                    <button type="button" class="prev">Back</button>
                                    <button type="button" id="addMore">Add More</button>
                                    <span id="percentage_shareholder"></span>
                                </div>
                                <button type="button" class="next" id="nextstep">Next</button>
                        </div>
                    </div>
                </section>
            </div>
            <div class="step" id="select-legal-rep">
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
                                    <div id="legalform">
                                        <div class="col-md-12">
                                            <h4 style="text-align: center; margin-bottom: 30px;">Legal Representative</h4>
                                        </div>

                                        <div class="form-group col-md-6" id="dontclone">
                                           <label id="autoFillLabel"><input type="checkbox" id="autoFillCheckbox"> Use ShareHolder Information</label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="legalRepFirstName">First Name</label>
                                                <input type="text" class="form-control" id="legalRepFirstName" name="legalRepFirstName" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="legalRepLastName">Last Name</label>
                                                <input type="text" class="form-control" id="legalRepLastName" name="legalRepLastName" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group drop-wrapper col-md-12">
                                            <label for="inputNationnal">Nationality <span>*</span></label>
                                            <select id="legalRepNationality" class="form-control inputNationnal" name="firstShareholderNationality" required>
                                                <option value="0">Choose...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="identification">Identification <span>*</span></label>
                                            <input type="text" class="form-control" id="legalRepIdentification" name="legalRepIdentification"
                                                placeholder="Passport number" required>
                                        </div>
                                        <div class="custom-file">
                                            <label class="custom-file-label d-block" for="customFile">Upload your file here <span>*</span></label>
                                            <input type="file" id="upload" hidden name="legalRepDocument" />
                                            <label for="upload" class="uploadFile">Upload File</label>
                                        </div>
                                        <div id="progressContainer" class="progress-container" style="display:none;">
                                            <div id="progressBar" class="progress-bar"></div>
                                        </div>
                                        <div id="fileName" class="file-name"></div>
                                        <div class="form-group drop-wrapper col-md-12">
                                          <label for="inputOccupation">Occupation <span>*</span></label>
                                          <select id="legalRepOccupation" class="form-control" name="firstShareholderOccupation" required>
                                              <option value="">Select an occupation</option>
                                              <option value="Accountant">Accountant</option>
                                              <option value="Actor/Actress">Actor/Actress</option>
                                              <option value="Architect">Architect</option>
                                              <option value="Artist">Artist</option>
                                              <option value="Baker">Baker</option>
                                              <option value="Barista">Barista</option>
                                              <option value="Bartender">Bartender</option>
                                              <option value="Biologist">Biologist</option>
                                              <option value="Blogger">Blogger</option>
                                              <option value="Carpenter">Carpenter</option>
                                              <option value="Chef">Chef</option>
                                              <option value="Chemist">Chemist</option>
                                              <option value="Civil Engineer">Civil Engineer</option>
                                              <option value="Computer Programmer">Computer Programmer</option>
                                              <option value="Copywriter">Copywriter</option>
                                              <option value="Customer Service Representative">Customer Service Representative</option>
                                              <option value="Data Analyst">Data Analyst</option>
                                              <option value="Dentist">Dentist</option>
                                              <option value="Designer">Designer (Graphic Designer, Fashion Designer, etc.)</option>
                                              <option value="Doctor">Doctor</option>
                                              <option value="Electrician">Electrician</option>
                                              <option value="Engineer">Engineer (Mechanical Engineer, Electrical Engineer, etc.)</option>
                                              <option value="Entrepreneur">Entrepreneur</option>
                                              <option value="Farmer">Farmer</option>
                                              <option value="Financial Advisor">Financial Advisor</option>
                                              <option value="Firefighter">Firefighter</option>
                                              <option value="Fitness Instructor">Fitness Instructor</option>
                                              <option value="Flight Attendant">Flight Attendant</option>
                                              <option value="Freelancer">Freelancer</option>
                                              <option value="Geologist">Geologist</option>
                                              <option value="Hair Stylist">Hair Stylist</option>
                                              <option value="Human Resources Manager">Human Resources Manager</option>
                                              <option value="Interior Designer">Interior Designer</option>
                                              <option value="Journalist">Journalist</option>
                                              <option value="Lawyer">Lawyer</option>
                                              <option value="Librarian">Librarian</option>
                                              <option value="Marketing Manager">Marketing Manager</option>
                                              <option value="Musician">Musician</option>
                                              <option value="Nurse">Nurse</option>
                                              <option value="Nutritionist">Nutritionist</option>
                                              <option value="Paramedic">Paramedic</option>
                                              <option value="Pharmacist">Pharmacist</option>
                                              <option value="Photographer">Photographer</option>
                                              <option value="Physical Therapist">Physical Therapist</option>
                                              <option value="Pilot">Pilot</option>
                                              <option value="Police Officer">Police Officer</option>
                                              <option value="Professor">Professor</option>
                                              <option value="Project Manager">Project Manager</option>
                                              <option value="Real Estate Agent">Real Estate Agent</option>
                                              <option value="Receptionist">Receptionist</option>
                                              <option value="Research Scientist">Research Scientist</option>
                                              <option value="Sales Representative">Sales Representative</option>
                                              <option value="Social Worker">Social Worker</option>
                                              <option value="Software Developer">Software Developer</option>
                                              <option value="Teacher">Teacher</option>
                                              <option value="Translator">Translator</option>
                                              <option value="Travel Agent">Travel Agent</option>
                                              <option value="Truck Driver">Truck Driver</option>
                                              <option value="Veterinarian">Veterinarian</option>
                                              <option value="Waiter/Waitress">Waiter/Waitress</option>
                                          </select>
                                        </div>
                                        <div class="form-group drop-wrapper col-md-12">
                                          <label for="inputMarried">Married Status <span>*</span></label>
                                          <select id="legalRepMaritalStatus" class="form-control" name="firstShareholderMaritalStatus" required>
                                            <option value="0">Choose...</option>
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                            <option value="3">Divorced</option>
                                            <option value="4">Widowed</option>
                                            <option value="5">Separated</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="inputaddress">Home Address <span>*</span></label>
                                          <input type="text" class="form-control" id="legalRepHomeAddress" name="firstShareholderHomeAddress" placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit." required>
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
                                <div>
                                    <button type="button" class="prev">BacK</button>
                                    <button type="button" class="addmore">Add More</button>
                                </div>
                                <button type="button" class="next" id="nextstep">Next</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="step" id="select-Manager-rep">
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
                                    <div id="managerform">
                                        <div class="col-md-12">
                                            <h4 style="text-align: center; margin-bottom: 30px;">Manager</h4>
                                        </div>

                                        <div class="form-group col-md-6" id="dontclone">
                                           <label id="autoFillLabel2"><input type="checkbox" id="autoFillCheckbox2"> Use ShareHolder Information</label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="managerFirstName">First Name</label>
                                                <input type="text" class="form-control" id="managerFirstName" name="managerFirstName" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="managerLastName">Last Name</label>
                                                <input type="text" class="form-control" id="managerLastName" name="managerLastName" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group drop-wrapper col-md-12">
                                            <label for="inputNationnal">Nationality <span>*</span></label>
                                            <select id="managerNationality" class="form-control inputNationnal" name="firstShareholderNationality" required>
                                                <option value="0">Choose...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="identification">Identification <span>*</span></label>
                                            <input type="text" class="form-control" id="managerIdentification" name="managerIdentification"
                                                placeholder="Passport number" required>
                                        </div>
                                        <div class="custom-file">
                                            <label class="custom-file-label d-block" for="customFile">Upload your file here <span>*</span></label>
                                            <input type="file" id="upload" hidden name="managerDocument" />
                                            <label for="upload" class="uploadFile">Upload File</label>
                                        </div>
                                        <div id="progressContainer" class="progress-container" style="display:none;">
                                            <div id="progressBar" class="progress-bar"></div>
                                        </div>
                                        <div id="fileName" class="file-name"></div>
                                        <div class="form-group drop-wrapper col-md-12">
                                          <label for="inputOccupation">Occupation <span>*</span></label>
                                          <select id="managerOccupation" class="form-control" name="firstShareholderOccupation" required>
                                              <option value="">Select an occupation</option>
                                              <option value="Accountant">Accountant</option>
                                              <option value="Actor/Actress">Actor/Actress</option>
                                              <option value="Architect">Architect</option>
                                              <option value="Artist">Artist</option>
                                              <option value="Baker">Baker</option>
                                              <option value="Barista">Barista</option>
                                              <option value="Bartender">Bartender</option>
                                              <option value="Biologist">Biologist</option>
                                              <option value="Blogger">Blogger</option>
                                              <option value="Carpenter">Carpenter</option>
                                              <option value="Chef">Chef</option>
                                              <option value="Chemist">Chemist</option>
                                              <option value="Civil Engineer">Civil Engineer</option>
                                              <option value="Computer Programmer">Computer Programmer</option>
                                              <option value="Copywriter">Copywriter</option>
                                              <option value="Customer Service Representative">Customer Service Representative</option>
                                              <option value="Data Analyst">Data Analyst</option>
                                              <option value="Dentist">Dentist</option>
                                              <option value="Designer">Designer (Graphic Designer, Fashion Designer, etc.)</option>
                                              <option value="Doctor">Doctor</option>
                                              <option value="Electrician">Electrician</option>
                                              <option value="Engineer">Engineer (Mechanical Engineer, Electrical Engineer, etc.)</option>
                                              <option value="Entrepreneur">Entrepreneur</option>
                                              <option value="Farmer">Farmer</option>
                                              <option value="Financial Advisor">Financial Advisor</option>
                                              <option value="Firefighter">Firefighter</option>
                                              <option value="Fitness Instructor">Fitness Instructor</option>
                                              <option value="Flight Attendant">Flight Attendant</option>
                                              <option value="Freelancer">Freelancer</option>
                                              <option value="Geologist">Geologist</option>
                                              <option value="Hair Stylist">Hair Stylist</option>
                                              <option value="Human Resources Manager">Human Resources Manager</option>
                                              <option value="Interior Designer">Interior Designer</option>
                                              <option value="Journalist">Journalist</option>
                                              <option value="Lawyer">Lawyer</option>
                                              <option value="Librarian">Librarian</option>
                                              <option value="Marketing Manager">Marketing Manager</option>
                                              <option value="Musician">Musician</option>
                                              <option value="Nurse">Nurse</option>
                                              <option value="Nutritionist">Nutritionist</option>
                                              <option value="Paramedic">Paramedic</option>
                                              <option value="Pharmacist">Pharmacist</option>
                                              <option value="Photographer">Photographer</option>
                                              <option value="Physical Therapist">Physical Therapist</option>
                                              <option value="Pilot">Pilot</option>
                                              <option value="Police Officer">Police Officer</option>
                                              <option value="Professor">Professor</option>
                                              <option value="Project Manager">Project Manager</option>
                                              <option value="Real Estate Agent">Real Estate Agent</option>
                                              <option value="Receptionist">Receptionist</option>
                                              <option value="Research Scientist">Research Scientist</option>
                                              <option value="Sales Representative">Sales Representative</option>
                                              <option value="Social Worker">Social Worker</option>
                                              <option value="Software Developer">Software Developer</option>
                                              <option value="Teacher">Teacher</option>
                                              <option value="Translator">Translator</option>
                                              <option value="Travel Agent">Travel Agent</option>
                                              <option value="Truck Driver">Truck Driver</option>
                                              <option value="Veterinarian">Veterinarian</option>
                                              <option value="Waiter/Waitress">Waiter/Waitress</option>
                                          </select>
                                        </div>
                                        <div class="form-group drop-wrapper col-md-12">
                                          <label for="inputMarried">Married Status <span>*</span></label>
                                          <select id="managerMaritalStatus" class="form-control" name="firstShareholderMaritalStatus" required>
                                            <option value="0">Choose...</option>
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                            <option value="3">Divorced</option>
                                            <option value="4">Widowed</option>
                                            <option value="5">Separated</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="inputaddress">Home Address <span>*</span></label>
                                          <input type="text" class="form-control" id="managerHomeAddress" name="firstShareholderHomeAddress" placeholder="Lorem ipsum dolor sit amet consectetur, adipisicing elit." required>
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
                                <div>
                                <button type="button" class="prev">BacK</button>
                                <button type="button" class="addmoremanager">Add More</button>
                                </div>
                                <button href="#" type="submit" id="submit_btn" >Checkout</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <meta name="csrf-token" content="{{ csrf_token() }}">
        </form>
     </div>
 </div>

<!-- Create Company Step Form -->
<script>
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

            if(validateForm()){



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

        $("#autoFillCheckbox").change(function() {
            if (this.checked) {
                $("#legalRepFirstName").val($("#firstName").val());
                $("#legalRepLastName").val($("#lastName").val());
                $("#legalRepEmailAddress").val($("#emailAddress").val());
                $("#legalRepPhoneNumber").val($("#phoneNumber").val());
            } else {
                $("#legalRepFirstName").val('');
                $("#legalRepLastName").val('');
                $("#legalRepEmailAddress").val('');
                $("#legalRepPhoneNumber").val('');
            }
        });

        $("#firstName").on("input", function() {
            var firstName = $(this).val();
            $("#autoFillLabel").html('<input type="checkbox" id="autoFillCheckbox"> Use ' + firstName + '\'s Information');
            // Re-bind the change event for the new checkbox
            $("#autoFillCheckbox").change(function() {
                if (this.checked) {
                    $("#legalRepFirstName").val($("#firstName").val());
                    $("#legalRepLastName").val($("#lastName").val());
                    $("#legalRepEmailAddress").val($("#emailAddress").val());
                    $("#legalRepPhoneNumber").val($("#phoneNumber").val());
                } else {
                    $("#legalRepFirstName").val('');
                    $("#legalRepLastName").val('');
                    $("#legalRepEmailAddress").val('');
                    $("#legalRepPhoneNumber").val('');
                }
            });
        });
        $("#autoFillCheckbox2").change(function() {
            if (this.checked) {
                $("#managerFirstName").val($("#firstName").val());
                $("#managerLastName").val($("#lastName").val());
                $("#managerEmailAddress").val($("#emailAddress").val());
                $("#managerPhoneNumber").val($("#phoneNumber").val());
            } else {
                $("#managerFirstName").val('');
                $("#managerLastName").val('');
                $("#managerEmailAddress").val('');
                $("#managerPhoneNumber").val('');
            }
        });

        $("#firstName").on("input", function() {
            var firstName = $(this).val();
            $("#autoFillLabel2").html('<input type="checkbox" id="autoFillCheckbox2"> Use ' + firstName + '\'s Information');
            // Re-bind the change event for the new checkbox
            $("#autoFillCheckbox2").change(function() {
                if (this.checked) {
                    $("#managerFirstName").val($("#firstName").val());
                    $("#managerLastName").val($("#lastName").val());
                    $("#managerEmailAddress").val($("#emailAddress").val());
                    $("#managerPhoneNumber").val($("#phoneNumber").val());
                } else {
                    $("#managerFirstName").val('');
                    $("#managerLastName").val('');
                    $("#managerEmailAddress").val('');
                    $("#managerPhoneNumber").val('');
                }
            });
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
        document.addEventListener('DOMContentLoaded', function() {
    const fileInputs = document.querySelectorAll('input[type="file"]');
    const progressBars = document.querySelectorAll('.progress-bar');
    const progressContainers = document.querySelectorAll('.progress-container');
    const fileNameDisplays = document.querySelectorAll('.file-name');

    fileInputs.forEach((fileInput, index) => {
        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                fileNameDisplays[index].textContent = `File: ${file.name}`;
                progressContainers[index].style.display = 'block';

                const formData = new FormData();
                formData.append('file', file);

                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'upload_endpoint', true); // replace 'upload_endpoint' with your server endpoint

                xhr.upload.addEventListener('progress', function(event) {
                    if (event.lengthComputable) {
                        const percentComplete = (event.loaded / event.total) * 100;
                        progressBars[index].style.width = percentComplete + '%';
                    }
                });

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log(`File ${index + 1} uploaded successfully`);
                    } else {
                        console.error(`File ${index + 1} upload failed`);
                    }
                    progressContainers[index].style.display = 'none';
                };

                xhr.send(formData);
            }
        });
    });
});

    </script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        const formTemplate = document.getElementById('form-template').cloneNode(true);
        const formContainer = document.getElementById('shareHolder-container');
        const addMoreButton = document.getElementById('addMore');
        const errorMessageSpan = document.getElementById('percentage_shareholder');
        const nextButton = document.getElementById('nextstep');
        const submitButton = document.getElementById('submit_btn');
    
        let count = 1;
        let shareholderCount = 1;
    
        const getCombinedSharePercentage = () => {
            const shareInputs = formContainer.querySelectorAll('input[name="firstSharehoderPercentage"]');
            return Array.from(shareInputs).reduce((total, input) => total + parseFloat(input.value || 0), 0);
        };
    
        const allSharesGreaterThanZero = () => {
            const shareInputs = formContainer.querySelectorAll('input[name="firstSharehoderPercentage"]');
            return Array.from(shareInputs).every(input => parseFloat(input.value || 0) > 0);
        };
    
        const updateButtonsState = () => {
            const combinedPercentage = getCombinedSharePercentage();
            
            if (combinedPercentage >= 100) {
                addMoreButton.disabled = true;
                if (combinedPercentage === 100) {
                    nextButton.disabled = false;
                    errorMessageSpan.textContent = '';
                } else {
                    nextButton.disabled = true;
                    errorMessageSpan.textContent = 'The combined percentage of shares must be exactly 100.';
                }
            } else {
                addMoreButton.disabled = false;
                nextButton.disabled = true;
                errorMessageSpan.textContent = '';
            }
        };
    
        addMoreButton.addEventListener('click', () => {

          $.ajax({
            url: 'https://restcountries.com/v3.1/all',
            method: 'GET',
            success: function(data) {
              // Select all elements with the class 'inputNationnal'
              var selects = $('.inputNationnal');
              var countryNames = [];

          

              data.forEach(function(country) {
                // Append the country options to each select element

                countryNames.push(country.name.common);

                  selects.each(function() {
                    $(this).append($('<option>', {
                      value: country.name.common,
                      text: country.name.common
                    }));
                  });

              });

              console.log(countryNames);
            },
            error: function(error) {
              console.log('Error fetching country data:', error);
            }
          });

            const newForm = formTemplate.cloneNode(true);
            shareholderCount++;
            
            newForm.querySelector('h3').textContent = `ShareHolder ${shareholderCount}`;
            
            const inputs = newForm.querySelectorAll('input');
            inputs.forEach((input, index) => {
                if (input.type === 'text' || input.type === 'file') {
                    input.value = '';
                }
    
                if (input.type === 'radio' && input.name === "firstShareholderIsManger") {
                    input.name = "firstShareholderIsManger-" + count;
                }
    
                if (input.type === 'radio' && input.name === "firstShareholderIsLR") {
                    input.name = "firstShareholderIsLR-" + count;
                }
    
                input.id = input.id.replace(/\d+$/, '') + shareholderCount; 
            });
    
            const fileInput = newForm.querySelector('input[type="file"]');
            fileInput.id = `uploadFile${shareholderCount}`;
            const fileLabel = newForm.querySelector('label[for="uploadFile"]');
            fileLabel.setAttribute('for', `uploadFile${shareholderCount}`);
            
            formContainer.appendChild(newForm);
    
            count++;
            updateButtonsState();
        });
    
        formContainer.addEventListener('input', (event) => {
            if (event.target.name === 'firstSharehoderPercentage') {
                updateButtonsState();
            }
        });
    
        nextButton.addEventListener('click', () => {
            if (getCombinedSharePercentage() === 100) {
                nextPrev_1();  
            } else {
                errorMessageSpan.textContent = 'The combined percentage of shares must be exactly 100.';
            }
        });
    
        updateButtonsState();
    });
</script> -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const formTemplate = document.getElementById('form-template').cloneNode(true);
    const formContainer = document.getElementById('shareHolder-container');
    const addMoreButton = document.getElementById('addMore');
    const errorMessageSpan = document.getElementById('percentage_shareholder');
    const nextButton = document.getElementById('nextstep');
    const submitButton = document.getElementById('submit_btn');

    let count = 1;
    let shareholderCount = 1;

    const getCombinedSharePercentage = () => {
        const shareInputs = formContainer.querySelectorAll('input[name="firstSharehoderPercentage"]');
        return Array.from(shareInputs).reduce((total, input) => total + parseFloat(input.value || 0), 0);
    };

    const allSharesGreaterThanZero = () => {
        const shareInputs = formContainer.querySelectorAll('input[name="firstSharehoderPercentage"]');
        return Array.from(shareInputs).every(input => parseFloat(input.value || 0) > 0);
    };

    const updateButtonsState = () => {
        const combinedPercentage = getCombinedSharePercentage();
        const hasEnoughShareholders = shareholderCount >= 2;
        
        if (combinedPercentage >= 100) {
            addMoreButton.disabled = true;
            if (combinedPercentage === 100 && hasEnoughShareholders) {
                nextButton.disabled = false;
                errorMessageSpan.textContent = '';
            } else {
                nextButton.disabled = true;
                errorMessageSpan.textContent = hasEnoughShareholders ? 'The combined percentage of shares must be exactly 100.' : 'You must add at least two shareholders.';
            }
        } else {
            addMoreButton.disabled = false;
            nextButton.disabled = true;
            errorMessageSpan.textContent = hasEnoughShareholders ? '' : 'You must add at least two shareholders.';
        }
    };

    addMoreButton.addEventListener('click', () => {
        $.ajax({
            url: 'https://restcountries.com/v3.1/all',
            method: 'GET',
            success: function(data) {
                var selects = $('.inputNationnal');
                var countryNames = [];
                
                data.forEach(function(country) {
                    countryNames.push(country.name.common);
                    selects.each(function() {
                        $(this).append($('<option>', {
                            value: country.name.common,
                            text: country.name.common
                        }));
                    });
                });

                console.log(countryNames);
            },
            error: function(error) {
                console.log('Error fetching country data:', error);
            }
        });

        const newForm = formTemplate.cloneNode(true);
        shareholderCount++;
        
        newForm.querySelector('h3').textContent = `ShareHolder ${shareholderCount}`;
        
        const inputs = newForm.querySelectorAll('input');
        inputs.forEach((input, index) => {
            if (input.type === 'text' || input.type === 'file') {
                input.value = '';
            }

            if (input.type === 'radio' && input.name === "firstShareholderIsManger") {
                input.name = "firstShareholderIsManger-" + count;
            }

            if (input.type === 'radio' && input.name === "firstShareholderIsLR") {
                input.name = "firstShareholderIsLR-" + count;
            }

            input.id = input.id.replace(/\d+$/, '') + shareholderCount; 
        });

        const fileInput = newForm.querySelector('input[type="file"]');
        fileInput.id = `uploadFile${shareholderCount}`;
        const fileLabel = newForm.querySelector('label[for="uploadFile"]');
        fileLabel.setAttribute('for', `uploadFile${shareholderCount}`);
        
        formContainer.appendChild(newForm);

        count++;
        updateButtonsState();
    });

    formContainer.addEventListener('input', (event) => {
        if (event.target.name === 'firstSharehoderPercentage') {
            updateButtonsState();
        }
    });

    nextButton.addEventListener('click', () => {
        if (getCombinedSharePercentage() === 100 && shareholderCount >= 2) {
            nextPrev_1();  
        } else {
            errorMessageSpan.textContent = 'The combined percentage of shares must be exactly 100 and there must be at least two shareholders.';
        }
    });

    updateButtonsState();
});

</script>
<script>
    $(document).ready(function() {
      $.ajax({
        url: 'https://restcountries.com/v3.1/all',
        method: 'GET',
        success: function(data) {
          // Select all elements with the class 'inputNationnal'
          var selects = $('.inputNationnal');
          

          // data.forEach(function(country) {
            // Append the country options to each select element

            // countryNames.push(country.name.common);
            // console.log(countryNames);
            // selects.each(function() {
            //   $(this).append($('<option>', {
            //     value: country.name.common,
            //     text: country.name.common
            //   }));
            // });
          // });
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
<script>
    let cloneIndex = 2;

document.querySelector('.addmore').addEventListener('click', function() {
    let originalForm = document.getElementById('legalform');
    let clone = originalForm.cloneNode(true);

    // Remove the autoFillCheckbox from the cloned element
    let autoFillCheckbox = clone.querySelector('#dontclone');
    if (autoFillCheckbox) {
        autoFillCheckbox.remove();
    }

    // Add a unique h4 title
    let h4Title = clone.querySelector('h4');
    if (h4Title) {
        h4Title.textContent = 'Legal Representative ' + cloneIndex;
    }

    // Update IDs and names of form elements to make them unique
    clone.querySelectorAll('[id]').forEach(function(element) {
        let newId = element.id + cloneIndex;
        element.id = newId;
        if (element.name) {
            element.name = element.name + cloneIndex;
        }
        // Clear field value
        if (element.tagName === 'INPUT' || element.tagName === 'SELECT' || element.tagName === 'TEXTAREA') {
            element.value = '';
        }
    });

    // Insert the clone after the original form
    originalForm.parentNode.appendChild(clone);

    // Add event listeners to the cloned form fields for validation
    clone.querySelectorAll('input, select, textarea').forEach(function(element) {
        element.addEventListener('input', checkFormValidity);
    });

    cloneIndex++;
    checkFormValidity(); // Initial check to update the button state
});

function checkFormValidity() {
    let allForms = document.querySelectorAll('#legalform, [id^="legalform"]');
    let allValid = true;

    allForms.forEach(function(form) {
        let inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                allValid = false;
            }
        });
    });

    document.getElementById('nextstep2').disabled = !allValid;
}

</script>

<script>
   let cloneIndexManager = 2;

    document.querySelector('.addmoremanager').addEventListener('click', function() {
        let clone = document.getElementById('managerform').cloneNode(true);
        // Remove the autoFillCheckbox from the cloned element
        let autoFillCheckbox = clone.querySelector('#dontclone');
        if (autoFillCheckbox) {
            autoFillCheckbox.remove();
        }

        // Add a unique h4 title
        let h4Title = clone.querySelector('h4');
        if (h4Title) {
            h4Title.textContent = 'Manager ' + cloneIndexManager;
        }

        // Update IDs of form elements to make them unique
        clone.querySelectorAll('[id]').forEach(function(element) {
            element.id = element.id + cloneIndexManager;
            // Clear field value
            if (element.tagName === 'INPUT' || element.tagName === 'SELECT' || element.tagName === 'TEXTAREA') {
                element.value = '';
            }
        });

        document.getElementById('managerform').parentNode.appendChild(clone);

        cloneIndexManager++;
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('managerform');
    const submitBtn = document.getElementById('submit_btn');
    const requiredFields = form.querySelectorAll('input[required], select[required]');

    function validateForm() {
        let allValid = true;
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                allValid = false;
            }
        });
        submitBtn.disabled = !allValid;
    }

    requiredFields.forEach(field => {
        field.addEventListener('input', validateForm);
    });

    validateForm();  // Initial validation check on page load
});
</script>

<script>
    $(document).ready(function() {
        $('#submit_btn').click(function(event) {
            event.preventDefault(); // Prevent form submission
            // Redirect to payment page
            // window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/payment";
        });
    });
</script>
<script>
  // function validateForm() {

    /*var emailField = document.getElementById('emailAddress');
    var phoneField = document.getElementById('phoneNumber');
    var emailError = document.querySelector('.email-error');
    var phoneError = document.querySelector('.phone-error');
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var phonePattern = /^\+?[1-9]\d{1,14}$/; // International phone number format
    var isValid = true;

    // Reset errors
    emailError.textContent = '';
    phoneError.textContent = '';

    if (!emailPattern.test(emailField.value)) {
      emailError.textContent = 'Please enter a valid email address.';
      isValid = false;
    }

    if (!phonePattern.test(phoneField.value)) {
      phoneError.textContent = 'Please enter a valid phone number.';
      isValid = false;
    }

    if (isValid) {
      // Proceed to the next step
      alert('Form is valid. Proceeding to the next step.');
      // Add logic to proceed to the next step
    } */

  // }
</script>
<!-- Create Company Step Form End -->


<script>

  function validateForm() {

    var isValid = true;

    // Clear previous error messages
    document.querySelector('.first-name-error').text = '';
    document.querySelector('.last-name-error').text = '';
    document.querySelector('.email-error').textContent = '';
    document.querySelector('.phone-error').textContent = '';


    // First name validation
    const firstName = document.getElementById('firstName').value;
    if (firstName.trim() === '') {
        document.querySelector('.first-name-error').textContent = 'First name is required.';
        isValid = false;
    }

    // Last name validation
    const lastName = document.getElementById('lastName').value;
    if (lastName.trim() === '') {
        document.querySelector('.last-name-error').textContent = 'Last name is required.';
        isValid = false;
    }

    // Email validation
    const email = document.getElementById('emailAddress').value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email.trim() === '') {
        document.querySelector('.email-error').textContent = 'Email address is required.';
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.querySelector('.email-error').textContent = 'Please enter a valid email address.';
        isValid = false;
    }

    // Phone number validation
    const phoneNumber = document.getElementById('phoneNumber').value;
    const phonePattern = /^(?:\+1\s?)?(\(?\d{3}\)?|\d{3})[-.\s]?\d{3}[-.\s]?\d{4}$/;
    if (phoneNumber.trim() === '') {
        document.querySelector('.phone-error').textContent = 'Phone number is required.';
        isValid = false;
    } else if (!phonePattern.test(phoneNumber)) {
        document.querySelector('.phone-error').textContent = 'Please enter a valid phone number.';
        isValid = false;
    }

    // If form is valid, submit the form
    if (isValid) {
      //  document.getElementById('contactForm').submit();
      
      return true;

    }
    else{

        return false;

    }

    
  
  
  }

  function submitCompanyDetails() {
            console.log('----submitCompanyDetails -----');
            const data = {
                user: {
                    username: "testttttt",
                    email: document.getElementById('emailAddress').value,
                    password: '123123111',
                    firstName: document.getElementById('firstName').value,
                    middleName: document.getElementById('lastName').value,
                    surname: '',
                    address: 'test',
                    contactNumber: document.getElementById('phoneNumber').value
                },
                company: {
                    firstName: document.getElementById('firstCompanyName').value,
                    secondName: document.getElementById('secondCompanyName').value,
                    thirdName: document.getElementById('thirdCompanyName').value,
                    streetAddress: document.getElementById('streetAddress').value,
                    detailAddress: document.getElementById('addressCont').value,
                    city: document.getElementById('inputNationnal').value,
                    state: document.getElementById('inputState').value,
                    code: document.getElementById('inputZip').value,
                    packageId: 1
                },
                shareholder: [
                    {
                        firstName: "dasdasd",
                        lastName: "dasdasd",
                        nationality: "dasdasd",
                        passportNumber: "dasdasd",
                        occupation: "dasdasd",
                        maritalStatus: "dasdasd",
                        homeAddress: "dasdasd",
                        sharePercentage: 60,
                        shareHolder: true,
                        legalRepresentative: true,
                        manager: false
                    },
                    {
                        firstName: "dasdasd",
                        lastName: "dasdasd",
                        nationality: "dasdasd",
                        passportNumber: "dasdasd",
                        occupation: "dasdasd",
                        maritalStatus: "dasdasd",
                        homeAddress: "dasdasd",
                        sharePercentage: 40,
                        shareHolder: true,
                        legalRepresentative: false,
                        manager: true
                    }
                ]
            };


            // 
            
            // 
            fetch('/index.php/create-company', {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
              })
              .then(response => response.json())
              .then(data => {
                    console.log('Company Created')
                  console.log(data);
                  uploadDocs();
                  // getLocalStorage = ''
                  // Redirect to payment page
                  // window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/payment";
              })
              .catch(error => console.error('Error:', error));
        }


        function uploadDocs() {
            console.log('uploading file.....');
            let form = document.getElementById('signUpForm');
            var formData = new FormData();
            let fileInput = document.getElementById('uploadFile');
            formData.append('file', fileInput.files[0]);
            formData.append('company_type', 1);
            formData.append('package_Id', 1);
            formData.append('amount', 400);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            $.ajax({
              url: '/index.php/upload-company-docs',
              type: 'POST',
              data: formData,
              processData: false, // Important: Don't process FormData
              contentType: false, // Important: Don't set content type
              success: function(response) {
                if(response.success){
                  console.log('Upload successful');
                  window.location.href = "http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/payment?amount=400&package_Id=1&company_Id=42&user_Id=50";
                  // window.location.href = `payment?amount=400&package_Id=1`;
                } else{

                  alert('Failed.')
                }
              },
              error: function(xhr, status, error) {
                  console.error('Error uploading file:', error);
              }
          });
        }

</script>


</body>
</html>

