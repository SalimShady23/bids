<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>EasyBids - Profile</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li>
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li>
                        <li>
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="Bn">Bn</option>
                                <option value="Rs">Rs</option>
                                <option value="Us">Us</option>
                                <option value="Pk">Pk</option>
                                <option value="Arg">Arg</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="cart-button-area">
                        <li>
                        <a href="#0" class="cart-button"><i class="flaticon-alarm"></i><span class="amount">{{ $data['count_notifications'] }}</span></a>
                        </li>                        
                        <li>
                            @if(Auth::check())
                                <span class="text-white">{{ Auth::user()->username }}</span>
                                <a href="#0" class="user-button">
                                    <i class="flaticon-user"></i> 
                                </a>
                                @else 
                                <a href="sign-in" class="text-white">Sign in</a>
                                <span class="text-primary">|</span> 
                                <a href="sign-up" class="text-white">Sign up</a>
                            @endif
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/images/logo/loogo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/auction">Auction</a>
                        </li>
                        <!-- <li>
                            <a href="#0">Pages</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#0">Product</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="product.html">Product Page 1</a>
                                        </li>
                                        <li>
                                            <a href="product-2.html">Product Page 2</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html">Product Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">My Account</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="sign-up.html">Sign Up</a>
                                        </li>
                                        <li>
                                            <a href="sign-in.html">Sign In</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Dashboard</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="/dashboard">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="profile.html">Personal Profile</a>
                                        </li>
                                        <li>
                                            <a href="my-bid.html">My Bids</a>
                                        </li>
                                        <li>
                                            <a href="winning-bids.html">Winning Bids</a>
                                        </li>
                                        <li>
                                            <a href="notifications.html">My Alert</a>
                                        </li>
                                        <li>
                                            <a href="my-favorites.html">My Favorites</a>
                                        </li>
                                        <li>
                                            <a href="referral.html">Referrals</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="faqs.html">Faqs</a>
                                </li>
                                <li>
                                    <a href="error.html">404 Error</a>
                                </li>
                            </ul>
                        </li> -->
                        @if(Auth::check())
                        <li>
                            <a href="#0">My Account</a>
                            <ul class="submenu">
                                <li>
                                    <a href="/dashboard">Dashboard</a>
                                </li>
                                <li>
                                    <a href="/add_listing">Add listing</a>
                                </li>
                                <li>
                                    <a href="/profile">Profile</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        <a href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            Sign out
                                            @csrf
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="/" class="logo">
                <img src="assets/images/logo/loogo.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Alerts</h4>
                @if(count($data['notifications']) > 0)
                @foreach($data['notifications'] as $notification)
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="assets/images/history/04.png"></a>
                    </div>
                    <div class="content">
                        <h3 class="title">
                            <a href="">
                            @if($notification->user_role == 2)
                            {{ ucwords(strtolower($notification->business_name)) }}
                            @elseif($notification->user_role == 3)
                            {{ ucwords(strtolower($notification->first_name)) }} {{ ucwords(strtolower($notification->last_name)) }}
                            @endif
                            </a>
                        </h3>
                        <div class="price" style="font-size: 15px;">
                            @if($notification->notification_type == "BUY NOW")
                            Has confirmed to buy now your {{ ucwords(strtolower($notification->product_name)) }}
                            @elseif($notification->notification_type == "RECEIPT")
                            Has uploaded receipt for your {{ ucwords(strtolower($notification->product_name)) }}
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-warning">
                There are no alerts currently
                </div>
                @endif
            </div>
        </div>
    </div>
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#0">My Account</a>
                </li>
                <li>
                    <span>Personal profile</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="assets/images/dashboard/user.png" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">{{ Auth::user()->username }}</a></h5>
                                <span class="username">{{ Auth::user()->email }}</span>
                            </div>
                            <div>
                                <a href="/add_listing" class="btn btn-primary">Add Listing</a>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="/dashboard"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="/profile" class="active"><i class="flaticon-settings"></i>Personal Profile </a>
                            </li>
                            <li>
                                <a href="/my-auctions"><i class="flaticon-auction"></i>My auctions</a>
                            </li>
                            <li>
                                <a href="/my-bids"><i class="flaticon-auction"></i>My Bids</a>
                            </li>
                            <li>
                                <a href="winning-bids.html"><i class="flaticon-best-seller"></i>Winning Bids</a>
                            </li>
                            <li>
                                <a href="/my-alerts"><i class="flaticon-alarm"></i>My Alerts</a>
                            </li>
                            <li>
                                <a href="/invoices"><i class="flaticon-star"></i>Invoices</a>
                            </li>
                            <li>
                                <a href="referral.html"><i class="flaticon-shake-hand"></i>Referrals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    @if(Auth::user()->user_role == 2)
                                    <h4 class="title">Business Details</h4>
                                    @else 
                                    <h4 class="title">Personal Details</h4>
                                    @endif
                                </div>
                                <ul class="dash-pro-body">

                                    <!-- Validation Errors -->                             
                                    @if ($errors->profile->any())
                                        <div class="alert alert-danger alert-dismissible fade show">
                                        <button style="position: absolute; left: 300px;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            <ul>
                                                @foreach ($errors->profile->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <!-- Success message -->
                                    @if(session('successUpdateProfile'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('successUpdateProfile') }}
                                    </div>
                                    @endif

                                    <!-- Status message -->
                                    @if(Auth::user()->user_status == "PENDING" && Auth::user()->user_role == 2)
                                    <div class="alert alert-warning" role="alert">
                                        Business account is pending, enter the required details to start auctioning and bidding 
                                    </div>
                                    @elseif(Auth::user()->user_status == "PENDING" && Auth::user()->user_role == 3)
                                    <div class="alert alert-warning" role="alert">
                                        Personal account is pending, enter the required details to start auctioning and bidding 
                                    </div>
                                    @endif

                                    @if(Auth::user()->user_role == 2)
                                    <form class="login-form" method="POST" action="{{ url('/update_profile') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-building"></i></label>
                                                    <input type="text" name="business_name" placeholder="Business name" value="{{ ucwords(strtolower(Auth::user()->business_name)) }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-hashtag"></i></label>
                                                    <input type="text" name="brella_number" placeholder="Brella number" value="{{ ucwords(strtolower(Auth::user()->brella_number)) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="far fa-user"></i></label>
                                                    <input type="text" readonly name="username" placeholder="Username" value="{{ ucwords(strtolower(Auth::user()->username)) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-mobile"></i></label>
                                                    <input type="text" name="mobile" placeholder="Mobile" value="{{ ucwords(strtolower(Auth::user()->mobile)) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-map-marker-alt"></i></label>
                                                    <select name="region">
                                                    @if(!empty(Auth::user()->region))
                                                    <option value="{{ ucwords(strtolower(Auth::user()->region)) }}">{{ ucwords(strtolower(Auth::user()->region)) }}</option>
                                                    <option value="Arusha">Arusha</option>
                                                    <option value="Dar es salaam">Dar es salaam</option>
                                                    <option value="Dodoma">Dodoma</option>
                                                    <option value="Geita">Geita</option>
                                                    <option value="Iringa">Iringa</option>
                                                    <option value="Kagera">Kagera</option>
                                                    <option value="Kaskazini pemba">Kaskazini pemba</option>
                                                    <option value="Kaskazini unguja">Kaskazini unguja</option>
                                                    <option value="Katavi">Katavi</option>
                                                    <option value="Kigoma">Kigoma</option>
                                                    <option value="Kilimanjaro">Kilimanjaro</option>
                                                    <option value="Kusini pemba">Kusini pemba</option>
                                                    <option value="Kusini unguja">Kusini unguja</option>
                                                    <option value="Lindi">Lindi</option>
                                                    <option value="Manyara">Manyara</option>
                                                    <option value="Mara">Mara</option>
                                                    <option value="Mbeya">Mbeya</option>
                                                    <option value="Morogoro">Morogoro</option>
                                                    <option value="Mtwara">Mtwara</option>
                                                    <option value="Mwanza">Mwanza</option>
                                                    <option value="Njombe">Njombe</option>
                                                    <option value="Pwani">Pwani</option>
                                                    <option value="Rukwa">Rukwa</option>
                                                    @else 
                                                    <option value="">Select region</option>
                                                    <option value="Arusha">Arusha</option>
                                                    <option value="Dar es salaam">Dar es salaam</option>
                                                    <option value="Dodoma">Dodoma</option>
                                                    <option value="Geita">Geita</option>
                                                    <option value="Iringa">Iringa</option>
                                                    <option value="Kagera">Kagera</option>
                                                    <option value="Kaskazini pemba">Kaskazini pemba</option>
                                                    <option value="Kaskazini unguja">Kaskazini unguja</option>
                                                    <option value="Katavi">Katavi</option>
                                                    <option value="Kigoma">Kigoma</option>
                                                    <option value="Kilimanjaro">Kilimanjaro</option>
                                                    <option value="Kusini pemba">Kusini pemba</option>
                                                    <option value="Kusini unguja">Kusini unguja</option>
                                                    <option value="Lindi">Lindi</option>
                                                    <option value="Manyara">Manyara</option>
                                                    <option value="Mara">Mara</option>
                                                    <option value="Mbeya">Mbeya</option>
                                                    <option value="Morogoro">Morogoro</option>
                                                    <option value="Mtwara">Mtwara</option>
                                                    <option value="Mwanza">Mwanza</option>
                                                    <option value="Njombe">Njombe</option>
                                                    <option value="Pwani">Pwani</option>
                                                    <option value="Rukwa">Rukwa</option>
                                                    @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-map-marker-alt"></i></label>
                                                    <input type="text" name="street_address" placeholder="Street address" value="{{ ucwords(strtolower(Auth::user()->street_address)) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            @if(Auth::user()->user_role == 3)
                                            <button type="submit" class="btn btn-primary">Update Personal Details</button>
                                            @else
                                            <button type="submit" class="btn btn-primary">Update Business Details</button>
                                            @endif
                                        </div>
                                    </form>
                                    @else 
                                    <form class="login-form" method="POST" action="{{ url('/update_profile') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-address-card"></i></label>
                                                    <input type="text" name="first_name" placeholder="First name" value="{{ ucwords(strtolower(Auth::user()->first_name)) }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-address-card"></i></label>
                                                    <input type="text" name="last_name" placeholder="Last name" value="{{ ucwords(strtolower(Auth::user()->last_name)) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="far fa-user"></i></label>
                                                    <input type="text" readonly name="username" placeholder="Username" value="{{ ucwords(strtolower(Auth::user()->username)) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-mobile"></i></label>
                                                    <input type="text" name="mobile" placeholder="mobile" value="{{ ucwords(strtolower(Auth::user()->mobile)) }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary">Update Personal Details</button>
                                        </div>
                                    </form>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Account Settings</h4>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Language</div>
                                        <div class="info-value">English (United States)</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Status</div>
                                        <div class="info-value">
                                            @if(Auth::user()->user_status == "PENDING")
                                            <i class="fas fa-exclamation-circle text-warning"></i> Pending 
                                            @elseif(Auth::user()->user_status == "ACTIVE")
                                            <i class="flaticon-check text-success"></i> ACTIVE
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Email Address</h4>
                                </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Email</div>
                                        <div class="info-value">
                                            {{ ucwords(strtolower(Auth::user()->email)) }}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Security</h4>
                                </div>
                                <ul class="dash-pro-body">

                                    <!-- Validation Errors -->                             
                                    @if ($errors->password->any())
                                        <div class="alert alert-danger alert-dismissible fade show">
                                        <button style="position: absolute; left: 300px;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            <ul>
                                                @foreach ($errors->password->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <!-- Success message -->
                                    @if(session('successUpdatePassword'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('successUpdatePassword') }}
                                    </div>
                                    @endif

                                    <!-- password error messages -->
                                    @if(session('errorUpdatePassword'))
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <button style="position: absolute; left: 300px;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('errorUpdatePassword') }}
                                    </div>
                                    @endif

                                    <form class="login-form" method="POST" action="{{ url('/update_password') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-lock"></i></label>
                                                    <input type="password" class="@error('current_password') is-invalid @enderror" name="current_password" placeholder="Current password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-lock"></i></label>
                                                    <input type="password" name="new_password" placeholder="New password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-30">
                                                    <label for="login-user"><i class="fas fa-lock"></i></label>
                                                    <input type="password" name="confirm_password" placeholder="Confirm password">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary">Change password</button>
                                        </div>

                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="assets/images/footer/c4.png" alt="footer">
            </div>
        </div>
        <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="assets/images/footer/newslater.png" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Subscribe to Sbidu</h5>
                            <h3 class="title">To Get Exclusive Benefits</h3>
                        </div>
                        <form class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="custom-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top padding-bottom padding-top">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Auction Categories</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Ending Now</a>
                                </li>
                                <li>
                                    <a href="#0">Vehicles</a>
                                </li>
                                <li>
                                    <a href="#0">Watches</a>
                                </li>
                                <li>
                                    <a href="#0">Electronics</a>
                                </li>
                                <li>
                                    <a href="#0">Real Estate</a>
                                </li>
                                <li>
                                    <a href="#0">Jewelry</a>
                                </li>
                                <li>
                                    <a href="#0">Art</a>
                                </li>
                                <li>
                                    <a href="#0">Sports & Outdoor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">About Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">About Sbidu</a>
                                </li>
                                <li>
                                    <a href="#0">Help</a>
                                </li>
                                <li>
                                    <a href="#0">Affiliates</a>
                                </li>
                                <li>
                                    <a href="#0">Jobs</a>
                                </li>
                                <li>
                                    <a href="#0">Press</a>
                                </li>
                                <li>
                                    <a href="#0">Our blog</a>
                                </li>
                                <li>
                                    <a href="#0">Collectors' portal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Your Account</a>
                                </li>
                                <li>
                                    <a href="#0">Safe and Secure</a>
                                </li>
                                <li>
                                    <a href="#0">Shipping Information</a>
                                </li>
                                <li>
                                    <a href="#0">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#0">Help & FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0"><i class="fas fa-phone-alt"></i>(646) 663-4575</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-blender-phone"></i>(646) 968-0608</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="e78f828b97a782898088938f828a82c984888a">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-location-arrow"></i>1201 Broadway Suite</a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <a href="/"><img src="assets/images/logo/foooter-logo.png" alt="logo"></a>
                        </div>
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img src="assets/images/footer/paypal.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="assets/images/footer/visa.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="assets/images/footer/discover.png" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="assets/images/footer/mastercard.png" alt="footer"></a>
                            </li>
                        </ul>
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">Sbidu</a> By <a href="#0">Uiaxis</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>