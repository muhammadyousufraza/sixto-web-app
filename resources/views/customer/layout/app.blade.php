<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Sixto Rodriguez | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('images/favicon.pn') }}" />
    
    <meta name="viewport" content="width=device-width">

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/sixto-icons.css') }}">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('custom-css')

</head>
<body class="dashboard-screens">

    @include('customer.layout.headers.main') <!-- Include header content -->
    <main class="row w-100 main-wrapper">
        <div class="col-3 dashboard-sidebar">
            <div class="profile-head">
                <div class="pro-db">
                    <p class="">ZA</p>
                </div>
                <div class="pro-title">
                    <p class="">Zain Ahmed</p>
                    <span>zain@gmil.com</span>
                </div>
            </div>
            <div class="main-menu-bar">
                <ul>
                    <li>
                        <a href="/index.php/customer/dashboard"><span class="sixto-icon  icon-dashboard"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="/index.php/customer/SettingPayment"><span class="sixto-icon  icon-setting"></span> Settings</a>
                    </li>
                </ul>
                <h3>Company Documents</h3>
                <ul>
                    <li>
                        <a href="/index.php/customer/documents"><span class="sixto-icon  icon-docs"></span> Complete Documents</a>
                    </li>
                    <li>
                        <a href="/index.php/customer/virtualMail"><span class="sixto-icon  icon-mailbox"></span> Virtual Mailbox</a>
                    </li>
                </ul>
                <h3>Company Details</h3>
                <ul>
                    <li>
                        <a href="/index.php/customer/orderHistory"><span class="sixto-icon  icon-order-h"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span></span> Order History/Receipts</a>
                    </li>
                </ul>
                <h3>Services</h3>
                <ul>
                    <li>
                        <a href="#"><span class="sixto-icon  icon-website"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> Website</a>
                    </li>
                    <li>
                        <a href="#"><span class="sixto-icon  icon-logo"></span> Logo</a>
                    </li>
                    <li>
                        <a href="#"><span class="sixto-icon  icon-taxes"></span> Taxes</a>
                    </li>
                </ul>
            </div>
            <div class="menu-bottom">
                <div class="setting">
                    <a href="/index.php/customer/SettingPayment"><span class="sixto-icon  icon-setting"></span> Settings</a>
                </div>
                <div class="logout-btn">
                    <a href="{{route('customer.logout')}}"><span class="sixto-icon dropdown-item icon-logout"></span> Logout</a>
                </div>
            </div>
            <!-- <div class="p-3 h6 d-flex">
                <p><i class="fa-solid fa-paper-plane px-2"></i></p>
                
            </div>
            <div class="p-3  d-flex">
                <p><i class="fa-solid fa-paper-plane  px-2"></i></p>
                <a href="/index.php/customer/SettingPayment"><p class="h6  align-self-center m-0">Settings</p></a>
            </div>
            <p class="mx-4 py-1 h6">COMPONY DOCUMENT</p>
            <div class="border border-light"></div>
            <div class="p-3 h6  d-flex">
                <p><i class="fa-solid fa-paper-plane  px-2"></i></p>
                <a href="/index.php/customer/documents"><p class="h6 align-self-center m-0">Complete Documents</p></a>
            </div>
            <div class="p-3 h6  d-flex">
                <p><i class="fa-solid fa-paper-plane  px-2"></i></p>
                <a href="/index.php/customer/virtualMail"><p class="h6 align-self-center m-0">Virtual Mailbox</p></a>
            </div>
            <p class="mx-4 py-1 h6 align-self-center m-0">COMPONY DETAILS</p>
            <div class="border border-light"></div>
            <div class="p-3 h6  d-flex">
                <p><i class="fa-solid fa-paper-plane  px-2"></i></p>
                <a href="/index.php/customer/orderHistory"><p class="h6 align-self-center m-0">Order History/Receipts</p></a>
            </div>
            <p class="mx-4 h6  py-1 align-self-center m-0">SERVICES</p>
            <div class="border border-light"></div>
            <div class="p-3 h6  d-flex">
                <p><i class="fa-solid fa-paper-plane  px-2"></i></p>
                <p class="h6 align-self-center m-0">Website</p>
            </div>
            <div class="p-3 h6  d-flex">
                <p><i class="fa-solid fa-paper-plane  px-2"></i></p>
                <p class="h6 align-self-center m-0">Logo</p>
            </div>
            <div class="p-3 h6 align-self-center m-0  d-flex">
                <p><i class="fa-solid fa-paper-plane  px-2"></i></p>
                <p class="h6 align-self-center m-0">Taxes</p>
            </div> -->
        </div>
         <input type="hidden" id="sessionKey" value="{{ session('user_id', 'not exist') }}">
        <div class="col-9 dashboard-content-a">
            @yield('content') <!-- Main content section -->
        </div>
    </main>

    <!-- @include('customer.layout.footers.main')  -->

    <!-- Include footer content -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropbtn = document.querySelector('.dropbtn');
            var dropdownContent = document.querySelector('.dropdown-content');

            dropbtn.addEventListener('click', function() {
                dropdownContent.classList.toggle('show');
            });

            window.addEventListener('click', function(e) {
                if (!e.target.matches('.dropbtn')) {
                    if (dropdownContent.classList.contains('show')) {
                        dropdownContent.classList.remove('show');
                    }
                }
            });
        });

    </script>
    <script>
           $(document).ready(function() {
            const sessionValue = document.getElementById('sessionKey').value;
            // alert(sessionValue);
            $.ajax({
                url: 'http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com:8080/api/company/'+ sessionValue, 
                method: 'GET',
                headers: {
                    'Cookie': 'JSESSIONID=1126D63AA3574FF8EF12B6D6849DFA66',
                },
                success: function(data) {
                    var company = data; 

                    var newRow = `
                        <tr class="">
                            <td class="col-2">${company.firstName}</td>
                            <td class="col-2">${company.secondName}</td>
                            <td class="col-2">${company.state}</td>
                            <td class="col-2">${company.companyType}</td>
                            <td class="col-2">
                                <span class="col-2 fit-content last">
                                    <div class="border orange-border last p-2 border-25">
                                        <p class="orange-text">View Company</p>
                                    </div>
                                </span>
                            </td>
                        </tr>`;
                    $('table tbody').append(newRow);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error:', textStatus, errorThrown);
                }
            });
        });

    </script>
    <script>
        AOS.init();
    </script>

    @stack('custom-js')
</body>
</html>
