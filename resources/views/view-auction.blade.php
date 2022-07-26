<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>EasyBids - View auction</title>

    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/main.css') }}">

    <link rel="shortcut icon" href="{{ url('/assets/images/favicon.png') }}" type="image/x-icon">
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
                            <img src="{{ url('/assets/images/logo/loogo.png') }}" alt="logo">
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
                                            <a href="dashboard.html">Dashboard</a>
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
            <a href="index.html" class="logo">
                <img src="{{ url('/assets/images/logo/loogo.png') }}" alt="logo">
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
                            Has uploaded receipt for {{ ucwords(strtolower($notification->product_name)) }}
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
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="/my-auctions">My auctions</a>
                </li>
                <li>
                    <a href="/view-auction/{{ $auction[0]->id }}">View auction</a>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{ url('/assets/images/banner/hero-bg.png') }}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--240 mt-lg--440">
        <div class="container">
            <div class="product-details-slider-top-wrapper">
                <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                    <div class="slide-top-item">
                        <div class="slide-inner">
                            <img src="/image/{{ $auction[0]->product_image }}" alt="product">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-40-60-80">
                <div class="col-lg-8">
                    <div class="product-details-content">
                        <div class="product-details-header">
                            <h2 class="title">{{ $auction[0]->auction_title }}</h2>
                            <button class="btn btn-primary w-25" data-toggle="modal" data-target="#exampleModal">Edit auction</button>
                            <!--Bootstrap modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <!-- Modal heading -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Edit auction
                                                    </h5>
                                                </div>
                                                <form action="{{url('/edit_auction')}}" method="POST">
                                                <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label for="" class="control-label">Auction title</label>
                                                        <input type="text" name="auction_title" class="form-control" placeholder="Auction title" value="{{ ucwords(strtolower($auction[0]->auction_title)) }}">
                                                    </div>
                                                </div>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        <ul class="price-table mb-30">
                            <li class="header">
                                <h5 class="current">Bid Increment (TZS)</h5>
                                <h3 class="price">{{ number_format($auction[0]->bid_increment) }} TZS</h3>
                            </li>
                            <li class="header">
                                <h5 class="current">Bid Price</h5>
                                <h3 class="price">{{ number_format($auction[0]->reserve_price) }} TZS</h3>
                            </li>
                            <li class="header">
                                <h5 class="current">Current Bid</h5>
                                <h3 class="price">{{ number_format($auction[0]->current_bid) }} TZS</h3>
                            </li>
                            <li class="header">
                                <h5 class="current">Buy now price</h5>
                                <h3 class="price">{{ number_format($auction[0]->buy_now_price) }} TZS</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-sidebar-area">
                        <div class="product-single-sidebar mb-3">
                            <h6 class="title">This Auction Ends in:</h6>
                            <div class="countdown">
                                <div id="bid_counter1"></div>
                            </div>
                            <div class="side-counter-area">
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ url('/assets/images/product/icon1.png') }}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class=""><span class="">
                                            @if($auction[0]->buy_now_status == 0)
                                                0 
                                            @elseif($auction[0]->buy_now_status == 1)
                                                1 
                                            @endif
                                        </span></h3>
                                        <p>Buy now</p>
                                    </div>
                                </div>
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ url('/assets/images/product/icon3.png') }}" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">{{ $auction[0]->num_bids }}</span></h3>
                                        <p>Total Bids</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-menu-area mb-40-60 mt-70-100">
            <div class="container">
                <ul class="product-tab-menu nav nav-tabs">
                    <li>
                        <a href="#details" class="active" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ url('/assets/images/product/tab1.png') }}" alt="product">
                            </div>
                            <div class="content">Description</div>
                        </a>
                    </li>
                    <li>
                        <a href="#history" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ url('/assets/images/product/tab3.png') }}" alt="product">
                            </div>
                            <div class="content">Bid History ({{ $count_bidders }})</div>
                        </a>
                    </li>
                    <li>
                        <a href="#buyhistory" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ url('/assets/images/product/tab3.png') }}" alt="product">
                            </div>
                            <div class="content">Buy now History ({{ $count_buyer }})</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <div class="tab-details-content">
                        <div class="header-area">
                            <h3 class="title">{{ $auction[0]->product_name }} ({{ $auction[0]->district }}, {{ $auction[0]->street_address }})</h3>
                            <div class="item">
                                <table class="product-info-table">
                                    <tbody>
                                        <tr>
                                            <th>Condition</th>
                                            <td>{{ ucwords(strtolower($auction[0]->condition)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ ucwords(strtolower($auction[0]->product_description)) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="history">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Bid History</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Bidder</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($bidders) > 0)
                                        @foreach($bidders as $bidder)
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ url('/assets/images/history/01.png') }}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        {{  ucwords(strtolower($bidder->first_name)) }} {{ ucwords(strtolower($bidder->last_name)) }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">{{ date('j/m/Y', strtotime(Auth::user()->created_at)) }}</td>
                                            <td data-history="time">{{ date('h:i:s A', strtotime(Auth::user()->created_at)) }}</td>
                                            <td data-history="unit price">{{ number_format($bidder->bid_amount) }} TZS</td>
                                        </tr>
                                        @endforeach
                                        @else 
                                        <div class="alert alert-warning">
                                        There are currently no bidders for this auction
                                        </div>
                                        @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="buyhistory">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Buy now history</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Buyer</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($buyer) > 0)
                                        @foreach($buyer as $buy)
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ url('/assets/images/history/03.png') }}" alt="history">
                                                    </div>
                                                    <div class="content">
                                                        @if($buy->user_role == 2)
                                                        {{  ucwords(strtolower($buy->business_name)) }} 
                                                        @elseif($buy->user_role == 3)
                                                        {{  ucwords(strtolower($buy->first_name)) }} {{ ucwords(strtolower($buy->last_name)) }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">{{ date('j/m/Y', strtotime($buy->created_at)) }}</td>
                                            <td data-history="time">
                                                @if($buy->invoice_status == "PENDING")
                                                <button class="btn btn-warning text-white w-50">Pending</button>
                                                @endif()
                                            </td>
                                            <td data-history="unit price">{{ number_format($buy->invoice_amount) }} TZS</td>
                                        </tr>
                                        @endforeach
                                        @else 
                                        <div class="alert alert-warning">
                                        There are currently no buyers for this auction
                                        </div>
                                        @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="{{ url('/assets/images/footer/footer-bg.jpg') }}">
        <div class="footer-top-shape">
            <img src="{{ url('/assets/css/img/footer-top-shape.png') }}" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="{{ url('/assets/images/footer/p1.png') }}" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="{{ url('/assets/images/footer/p2.png') }}" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="{{ url('/assets/images/footer/p3.png') }}" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="{{ url('/assets/images/footer/c2.png') }}" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="{{ url('/assets/images/footer/c3.png') }}" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="{{ url('/assets/images/footer/c4.png') }}" alt="footer">
            </div>
        </div>
        <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="{{ url('/assets/images/footer/newslater.png') }}" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low">
                            <h5 class="cate">Subscribe to EasyBids</h5>
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
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="640c01081424010a030b100c0109014a070b09">[email&#160;protected]</span></a>
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
                            <a href="/"><img src="{{ url('/assets/images/logo/foooter-logo.png') }}" alt="logo"></a>
                        </div>
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img src="{{ url('/assets/images/footer/paypal.png') }}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ url('/assets/images/footer/visa.png') }}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ url('/assets/images/footer/discover.png') }}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ url('/assets/images/footer/mastercard.png') }}" alt="footer"></a>
                            </li>
                        </ul>
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">Sbidu</a> By <a href="#0">Uiaxis</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->


    <script data-cfasync="false" src="{{ url('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ url('/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('/assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ url('/assets/js/plugins.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('/assets/js/wow.min.js') }}"></script>
    <script src="{{ url('/assets/js/waypoints.js') }}"></script>
    <script src="{{ url('/assets/js/nice-select.js') }}"></script>
    <script src="{{ url('/assets/js/counterup.min.js') }}"></script>
    <script src="{{ url('/assets/js/owl.min.js') }}"></script>
    <script src="{{ url('/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ url('/assets/js/yscountdown.min.js') }}"></script>
    <script src="{{ url('/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('/assets/js/main.js') }}"></script>
</body>

</html>