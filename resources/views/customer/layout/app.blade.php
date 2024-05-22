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

    

    @stack('custom-css')

</head>
<body>

    @include('customer.layout.headers.main') <!-- Include header content -->
    <main class="row w-100">
        <div class="col-3 p-0 dashboard-sidebar">
            <div class="p-3 px-4 d-flex align-items-center bg-light">
                <div class="">
                    <p class="h6 py-2 px-2 rounded-circle bg-primary fit-content">ZA</p>
                </div>
                <div class=" px-2">
                    <p class="py-1 font-weight-bold h6">Zain Ahmed</p>
                    <p class="h6">zain@gmil.com</p>
                </div>
            </div>
            <div class="p-3 h6 d-flex">
                <p><i class="fa-solid fa-paper-plane px-2"></i></p>
                <a href="/index.php/customer/dashboard"><p class="h6 align-self-center m-0">Dashboard</p></a>
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
            </div>
        </div>
        <div class="col-9 p-0">
            @yield('content') <!-- Main content section -->
        </div>
    </main>

    @include('customer.layout.footers.main') <!-- Include footer content -->

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

    @stack('custom-js')
</body>
</html>
