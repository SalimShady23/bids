<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Auction</title>

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
                        @if(Auth::check())
                        <li>
                            <a href="#" class="cart-button"><i class="flaticon-alarm"></i>
                            <span class="amount">
                                {{ $data['count_notifications'] }}
                            </span>
                        </a>
                        </li> 
                        @endif                        
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
                <img src="assets/images/logo/logo2.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Alerts</h4>
                @if(Auth::check())
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
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Vehicles</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Featured Auction Section Starts Here =============-->
    <section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="section-header cl-white mw-100 left-style">
                <h3 class="title">Bid on These Featured Auctions!</h3>
            </div>
             <!-- Validation Errors -->                             
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Success message -->
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <!-- status error message -->
            @if(session('statusError'))
            <div class="alert alert-warning" role="alert">
                {{ session('statusError') }}, click <a href="/profile">here</a> to complete registration detials
            </div>
            @endif

            <div class="row justify-content-center mb-30-none">

                @if(count($auctions) > 0)
                @foreach($auctions as $auction)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="#"><img src="/image/{{ $auction->product_image }}" alt="car"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="#0">{{ $auction->auction_title }}</a>
                            </h6>
                            <div>
                                Minimum bid price : <b>{{ number_format($auction->minimum_bid_price) }} TZS</b>
                            </div>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">{{ number_format($auction->current_bid) }} TZS</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                         @if($auction->buy_now == 1)
                                            <div class="current">Buy Now</div>
                                            <div class="amount">{{ number_format($auction->buy_now_price) }} TZS</div>
                                        @else
                                            <div class="current">Not buy now item</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter26"></div>
                                </div>
                                <span class="total-bids">
                                    @if($auction->num_bids == 0)
                                        0 bids
                                    @elseif($auction->num_bids == 1)
                                        1 bid 
                                    @elseif($auction->num_bids > 1)
                                        {{ $auction->num_bids }} Bids
                                    @endif 
                                    |
                                    @if($auction->buy_now_status == 0)
                                        0 buy
                                    @elseif($auction->num_bids == 1)
                                        1 buy 
                                    @endif     
                                </span>
                            </div>
                            <div class="text-center">

                                <form action="{{ url('/submit_bid') }}" method="POST" class="login-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-30">
                                                <label for="login-user"><i class="fas fa-money-bill-alt"></i></label>
                                                <input type="text" name="bid_amount" placeholder="Enter bid">
                                                <input type="hidden" name="bid_increment" value="{{ $auction->bid_increment }}">
                                                <input type="hidden" name="num_bids" value="{{ $auction->num_bids }}">
                                                <input type="hidden" name="minimum_bid_price" value="{{ $auction->minimum_bid_price }}">
                                                <input type="hidden" name="auction_id" value="{{ $auction->id }}">
                                                <input type="hidden" name="current_bid" value="{{ $auction->current_bid }}">
                                                <input type="hidden" name="start_date" value="{{ $auction->start_date }}">
                                                <input type="hidden" name="end_date" value="{{ $auction->end_date }}">


                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="custom-button">Submit a bid</button>
                                </form>
                                @if($auction->buy_now == 1)
                                <a href="/buy-now/{{ $auction->id }}"><button type="submit" class="btn btn-danger mt-3 rounded-pill p-2 w-100" style="width: 70%;">Buy now</button></a>
                                @endif
                                <!-- @if($auction->buy_now == 1)
                                <form action="{{url('/view_auction') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="auction_id" value="{{ $auction->id }}">
                                    <input type="hidden" name="invoice_amount" value="{{ $auction->buy_now_price }}">
                                    <button type="submit" class="btn btn-danger mt-3 rounded-pill p-2" style="width: 70%;">Buy now</button>
                                </form>
                                @endif -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-warning">
                There are no auctions available yet
                </div>
                @endif

                

            </div>
        </div>
    </section>
    <!--============= Featured Auction Section Ends Here =============-->


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
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="a8c0cdc4d8e8cdc6cfc7dcc0cdc5cd86cbc7c5">[email&#160;protected]</span></a>
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