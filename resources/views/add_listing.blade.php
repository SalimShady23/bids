<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Add Listing EasyBids</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Steps CSS -->
  <link rel="stylesheet" href="{{url('/assets/css/steps.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">

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
                            <a href="">My Account</a>
                            <ul class="submenu">
                                <li>
                                    <a href="/dashboard">Dashboard</a>
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
    <div class="hero-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/add_listing">Add listing</a>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= About Section Starts Here =============-->
    <section class="about-section">
        <div class="container">
            <div class="about-wrapper mt--100 mt-lg--440 padding-top">

            @if(Auth::user()->user_status == "PENDING")
            <div class="alert alert-warning">
                Complete profile details in order to add listing, click <a href="/profile">here</a> to complete registration details
            </div>
            @else 

            <form id="contact" action="{{ url('/create_auction') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <h3>Auction</h3>
                    <section>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="" class="control-label">Auction title</label>
                                <input type="text" name="auction_title" class="form-control" placeholder="Auction title">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="" class="control-label">Start date</label>
                                        <div class="form-group">
                                            <input type="text" name="start_date" class="form-control startdatepicker" placeholder="Start date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="control-label">Start time</label>
                                            <div class="form-group">
                                                <input type='time' name="start_time" class="form-control" />
                                            </div>
                                    </div>
                                </div>   
                            </div>

                            <div class="col-sm-6 form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="" class="control-label">End date</label>
                                        <div class="form-group">
                                            <input type="text" name="end_date" class="form-control enddatepicker"/>     
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="control-label">End time</label>
                                        <div class="form-group">
                                            <input type='time' name="end_time" class="form-control bg-white"/>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="" class="control-label">Live start date</label>
                                    <div class="form-group">
                                        <input type="text" name="live_start_date" class="form-control livedatepicker" placeholder="Live start date"/>     
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="control-label">Live start time</label>
                                    <div class="form-group">
                                        <input type="time" name="live_start_time" class="form-control bg-white" />     
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="control-label">Live end time</label>
                                    <div class="form-group">
                                        <input type="time" name="live_end_time" class="form-control bg-white w-100" />     
                                    </div>
                            </div>
                        </div>
                    </section>

                    <h3>Category</h3>
                    <section>
            
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" class="control-label">Category</label>
                                <div class="form-group">
                                    <select name="fk_category" class="form-control bg-white w-100 category">
                                        <option value="">Select category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ ucwords(strtolower($category->category_title)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" class="control-label">Sub category</label>
                                <div class="form-group">
                                    <select name="fk_subcategory" class="form-control bg-white w-100 subcategories">
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <label for="" class="control-label">Reserve price</label>
                                <div class="form-group">
                                    <input type="text" name="reserve_price" class="form-control" placeholder="Reserve price" />     
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="control-label">Minimum bid</label>
                                <div class="form-group">
                                    <input type="text" name="minimum_bid_price" class="form-control" placeholder="Minimum bid price"/>     
                                </div>
                            </div>
                        </div>

                        <!-- buy now option -->
                        <div class="row mx-auto">
                            <label for="" class="control-label ml-2">Is a it a but now item?</label>
                            <div class="col-sm-12 form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="documentProtectionInline1" name="radioBuyNowButton" value="1" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="documentProtectionInline1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="documentProtectionInline2" name="radioBuyNowButton" value="0" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="documentProtectionInline2">No</label>
                                </div>
                                <label for="RadioBuynowButton" class="error" style="display:none;"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="" class="control-label">Buy now price (TZS)</label>
                                <input type="text" id="" name="buy_now_price" class="form-control" placeholder="Buy now price">
                            </div>
                        </div>
                </section>

                <h3>Product</h3>
                <section style="overflow-y: scroll;">

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="" class="control-label">Product name</label>
                            <input type="text" id="" name="product_name" class="form-control" placeholder="Product name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="" class="control-label">Product description</label>
                            <textarea name="product_description" rows="4" cols="50">
                            </textarea>              
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="" class="control-label">Product image</label>
                            <input type="file" name="product_image" class="form-control bg-white">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="" class="control-label">Condition</label>
                            <select name="condition" class="form-control">
                                <option value="">Select condition</option>
                                <option value="New">New</option>
                                <option value="Refurbished">Refurbished</option>
                                <option value="Used, Like New">Used, Like New</option>
                                <option value="Used, Very Good">Used, Very Good</option>
                                <option value="Used, Good">Used, Good</option>
                                <option value="Used, Acceptable">Used, Acceptable</option>
                                <option value="Collectible, Like New">Collectible, Like New</option>
                                <option value="Collectible, Very Good">Collectible, Very Good</option>
                                <option value="Collectible, Good">Collectible; Good</option>
                                <option value="Collectible, Acceptable">Collectible, Acceptable</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="" class="control-label">Location</label>
                            <select name="district" class="form-control">
                                <option value="">Select district</option>
                                <option value="Kigamboni">Kigamboni</option>
                                <option value="Ilala">Ilala</option>
                                <option value="Ubungo">Ubungo</option>
                                <option value="Temeke">Temeke</option>
                                <option value="Kinondoni">Kinondoni</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="" class="control-label">Street address</label>
                            <input type="text" name="street_address" class="form-control" placeholder="Street address">
                        </div>
                    </div>

                    

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="" class="control-label">Bid increment</label>
                            <input type="text" name="bid_increment" class="form-control" placeholder="Bid increment">
                        </div>
                    </div>

                </section>

                <h3>Finish</h3>
                <section>
                        

                    <button type="submit" class="btn btn-success">Create auction</button>
                </section>
            </div>
        </form>

            @endif
                
            


            </div>
        </div>
    </section>
    <!--============= About Section Ends Here =============-->


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
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="7e161b120e3e1b1019110a161b131b501d1113">[email&#160;protected]</span></a>
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
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">EasyBids</a> By <a href="#0">BCS#</a></p></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    
    <script>
$.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});
$(document).ready(function() {

  $(".category").change(function(){

  // store category id in variable
  var category_id = $(this).children("option:selected").val();
  $.ajax({
  url: "{{ url('/add_listing') }}",
  type: "POST",
  data: {
    category_id: category_id
  },
  success: function(data) {

    $('.subcategories').empty();
    $.each(data.subcategories, function(index, subcategory){
      $('.subcategories').append('<option value="'+ subcategory.id +'">' + subcategory.subcategory_title + '</option>');
    });
  }
});

  });

});

</script>

<script>

$(function () {

  $('.startdatepicker').datepicker({
    useCurrent: false,
    format: "dd/mm/yyyy",
    startDate: "today()",
    todayBtn: "linked",
    clearBtn: true
  });

  $('.enddatepicker').datepicker({
    useCurrent: false,
    format: "dd/mm/yyyy",
    startDate: "today()",
    todayBtn: "linked",
    clearBtn: true
  });

  $('.livedatepicker').datepicker({
    useCurrent: false,
    format: "dd/mm/yyyy",
    startDate: "today()",
    todayBtn: "linked",
    clearBtn: true
  });


});
</script>
    
    <script>
    var form = $("#contact");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        enableFinishButton: false,
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            //window.location.href = "http://127.0.0.1:8000/create_auction";
        }
    });
</script>

</body>
</html>