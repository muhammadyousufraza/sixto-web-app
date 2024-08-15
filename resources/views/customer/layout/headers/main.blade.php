<header id="myHeader">
    <div class="bg-info py-3 blue-gray-bg topbar">
        <p class="m-auto text-center h6 text-white">Looking of Sixto? we're still here, but with a new name. <a href="#">Learn More <i class="fa-solid fa-chevron-right"></i></a> </p>
    </div>
    <div class="row px-3 w-100 main-header-a">
        <div class="col-3 p-0">
            <div class="main-logo-wrapper">
                <a href="{{ route('home.page') }}/">
                    <img src="{{ asset('assets/Images/logo.png')}}"  class="img-fluid" alt="logo-img">
                </a>
            </div>
        </div>
        <div class="d-flex p-0 justify-content-between col-9 align-items-center">
            <div class="h-left">
                <div class="d-flex align-items-center company-pro">
                    <p class="h6 py-2 px-2 rounded-circle bg-orange text-white">ZA</p>
                    <p class="h6 px-2">{{ session('logged_in_user', 'User Name') }}</p>
                </div>
            </div>
            <div class="d-flex align-items-center h-right">
                <div class="cta">
                    <a href=""><span class="sixto-icon  icon-add"></span> START A NEW COMPANY</a>
                </div>
                <div class="logout">
                    
                </div>
                <div class="navbar profile-bar">
                    <div class="profile">
                        <img src="{{ asset('assets/Images/pro.png')}}" alt="Profile Picture" class="profile-pic">
                        <div class="dropdown">
                            <button class="dropbtn">Profile <i class="arrow-down"></i></button>
                            <div class="dropdown-content">
                                <a href="#view-profile">View Profile</a>
                                <a href="#">Change Password</a>
                                <!-- <a href="#">Add/ Edit Information</a> -->
                                <hr class="dropdown-divider">
                                <a href="#logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="notifications">
                <span class="notify">
                    <i class="fa-regular fa-bell"></i>
                    <span class="number">
                        09
                    </span>
                </span>
            </div>
            </div>

        </div>
    </div>
        <!-- mobile-nav -->
        <!-- <div class="mobile-menu">
            <div class="mob-main-logo-wrapper">
                <img src="assets/images/logo.png" class="img-fluid" alt="logo-img">
            </div>
            <div class="circle" id="navbar"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <div class="nveMenu text-left">
                <div class="mobile-cross close-btn-nav" id="navbar"><i class="fas fa-times" aria-hidden="true"></i>
                </div>
                <div>
                    <a href="javascript:;"><img src="assets/images/logo.png" class="img-fluid" alt="main logo"></a>
                </div>
                <ul>
                    <li><a class="active" href="javascript:;">Accounting and Tax</a></li>
                    <li class="dropdowns-menu ">
                        <a href="javascript:;">Migracion</a>
                    </li>
                    <li class="dropdowns-menu ">
                        <a href="javascript:;">Notarial</a>
                    </li>
                    <li><a href="javascript:;">Pricing</a></li>
                    <li><a href="javascript:;">About us</a></li>
                    <li><a href="javascript:;" class="brown-btn btn">Form a Company</a></li>
                    <li><a href="javascript:;">Login</a></li>
                </ul>
            </div> -->
            <!-- <div class="overlay"></div> -->
        </div>
        <!-- mobile-nav-end -->
        <!-- main-header-for-website-start -->
        <!-- <div class="main-header-web">
            <div class="header-main-menu-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="main-logo-wrapper">
                                <a href="javascript:;">
                                    <img src="assets/images/logo.png" class="img-fluid" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 menu-nav m-auto">
                            <ul>
                                <li><a class="active" href="javascript:;">Accounting and Tax</a></li>
                                <li class="dropdowns-menu ">
                                    <a href="javascript:;">Migracion</a>
                                </li>
                                <li class="dropdowns-menu ">
                                    <a href="javascript:;">Notarial</a>
                                </li>
                                <li><a href="javascript:;">Pricing</a></li>
                                <li><a href="javascript:;">About us</a></li>
                                <li><a href="javascript:;" class="brown-btn btn">Form a Company</a></li>
                                <li><a href="javascript:;">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- main-header-for-website-start -->
    </header>