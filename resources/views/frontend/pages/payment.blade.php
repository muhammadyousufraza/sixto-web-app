<!DOCTYPE html>
<html>
<head>
    <title>Sixto Rodriguez - Stripe Payment Gateway Integration</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentForm = document.getElementById('payment-form');

            paymentForm.addEventListener('submit', function(event) {
                event.preventDefault();

                // Simulating successful submission by adding alert-success class
                paymentForm.classList.add('alert-success');

                if (paymentForm.classList.contains('alert-success')) {
                    paymentForm.innerHTML = '<p>Thank you for your payment!</p>';
                }
            });
        });
    </script> -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentForm = document.getElementById('payment-form');
        const popup = document.getElementById('popup');

        paymentForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Simulating successful submission by adding alert-success class
            paymentForm.classList.add('alert-success');

            if (paymentForm.classList.contains('alert-success')) {
                // Show the popup
                popup.style.display = 'block';
            }
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
                    <a href="{{ route('home.page') }}"><img src="{{ asset('assets/Images/logo.png')}}" class="img-fluid"
                            alt="main logo"></a>
                </div>
                <ul>
                    <li><a class="active" href="/index.php/account-tax">Accounting and Tax</a></li>
                    <li class="dropdowns-menu ">
                        <a href="/index.php/migracion">Migracion</a>
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
    <section class="py-5 chkout">    
        <div class="container">
            <div class="checkout-page">
                <div class="row">
                    <div class="col-md-7">
                        <div class="head-t">
                            <h3>Cart Details</h3>
                        </div>
                        <div class="checkout-d">
                            <div class="body-a">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Product</th>
                                      <th scope="col" style="text-align: right;">Price</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>SOCIEDAD DE RESPONSABILIDAD LIMITADA</td>
                                      <td style="text-align: right;">435 <span>$</span></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <div class="ftr-a">
                                <div class="detail">
                                    <h4>Cart Totals</h4>
                                    <div class="total">
                                        Total <span>435 $</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-default credit-card-box">
                            <div class="panel-heading display-table" >
                                    <h3 class="panel-title" >Payment Details</h3>
                            </div>
                            <div class="panel-body">
                
                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif
                
                                <form 
                                        role="form" 
                                        action="{{ route('stripe.payment') }}" 
                                        method="post" 
                                        class="require-validation"
                                        data-cc-on-file="false"
                                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                        id="payment-form">
                                    @csrf
                
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> <input
                                                class='form-control' size='4' type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row row'>
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> <input
                                                autocomplete='off' class='form-control card-number' size='20'
                                                type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row row three'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input
                                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                                type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> <input
                                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                type='text'>
                                        </div>
                                    </div>
                                    <input class=''  type='hidden' name="amount" value="{{ $amount }}">
                                    <input class=''  type='hidden' name="packageId" value="{{ $packageId }}">
                                    <input class=''  type='hidden' name="companyTypeId" value="{{ $companyId }}">
                                    <div class='form-row row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>Please correct the errors and try
                                                again.</div>
                                        </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ${{ $amount }}</button>
                                        </div>
                                    </div>
                                        
                                </form>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
            <button id="backToformcompany" type="button" class="prev btn btn-primary" style="background: #ca5f1b !important;
    border-color: #ca5f1b !important;">BacK</button>  
        </div>
    </section>
    <div id="popup" style="display: none;">
        <p>Thank you for your payment!</p>
    </div>
</body>
   
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    document.getElementById('backToformcompany').addEventListener('click', function() {
    window.location.href = 'http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com/index.php/company-profle-updated';
});

</script>
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
</html>