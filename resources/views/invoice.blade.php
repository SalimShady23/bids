<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EasyBids - Invoice</title>

    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/main.css') }}">

    <style>
        .text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}

    </style>

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
                            <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
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
                <img src="{{ url('/assets/images/logo/loogo2.png') }}" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ url('/assets/images/shop/shop01.jpg') }}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ url('/assets/images/shop/shop02.jpg') }}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ url('/assets/images/shop/shop03.jpg') }}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ url('/assets/images/shop/shop04.jpg') }}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ url('/assets/images/shop/shop05.jpg') }}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Comics Book</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="#0" class="custom-button"><span>Checkout</span></a>
                </div>
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
                    <a href="/invoice">Invoice</a>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{ url('/assets/images/banner/hero-bg.png') }}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= About Section Starts Here =============-->
    <section class="about-section">
        <div class="container">
            <div class="about-wrapper mt--100 mt-lg--440 padding-top">

            @if(session('invoiceError'))
            <div class="alert alert-warning" role="alert">
                {{ session('invoiceError') }}
            </div>
            @endif

            @if(session('receiptError'))
            <div class="alert alert-warning" role="alert">
                {{ session('receiptError') }}
            </div>
            @endif

            @if(session('receiptSuccess'))
            <div class="alert alert-success" role="alert">
                {{ session('receiptSuccess') }}
            </div>
            @endif

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

            <div class="page-content container">
                <div class="page-header text-blue-d2">
                    <h1 class="page-title text-secondary-d1">
                        Invoice
                        <small class="page-info">
                            <i class="fa fa-angle-double-right text-80"></i>
                            ID: #{{ $invoice[0]->id }}
                        </small>
                    </h1>

                    <div class="page-tools">
                        <div class="action-buttons">
                            <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                                <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                                Print
                            </a>
                            <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                                <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                                Export
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container px-0">
                    <div class="row mt-4">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="logo text-center w-25 mx-auto" style="background: #5a4bcc;">
                                        <a href="/">
                                            <img src="{{ url('/assets/images/logo/loogo.png') }}" alt="logo">
                                        </a>
                                    </div>
                                    <!-- <div class="text-center text-150">
                                        <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                                        <span class="text-default-d3">Bootdey.com</span>
                                    </div> -->
                                </div>
                            </div>
                            <!-- .row -->

                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <span class="text-sm text-grey-m2 align-middle">To:</span>
                                        <span class="text-600 text-110 text-blue align-middle">
                                            @if($invoice[0]->business_name)
                                                {{ ucwords(strtolower($invoice[0]->business_name)) }}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="text-grey-m2">
                                        @if($invoice[0]->region || $invoice[0]->street_address)
                                        <div class="my-1">
                                            {{ ucwords(strtolower($invoice[0]->street_address)) }}, {{ ucwords(strtolower($invoice[0]->region)) }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.col -->

                                <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                    <hr class="d-sm-none" />
                                    <div class="text-grey-m2">
                                        <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                            Invoice
                                        </div>

                                        <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #{{ $invoice[0]->id }}</div>

                                        <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> {{ date('l jS \of F Y', strtotime($invoice[0]->created_at)) }}</div>

                                        <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span>
                                         @if($invoice[0]->invoice_status == "PENDING")
                                         <span class="badge badge-warning badge-pill px-25 text-white">Unpaid</span>
                                         @elseif($invoice[0]->invoice_status == "PAID")
                                         <span class="badge badge-success badge-pill px-25 text-white">Paid</span>
                                         @elseif($invoice[0]->invoice_status == "INACTIVE")
                                         <span class="badge badge-danger badge-pill px-25 text-white">Inactive</span>
                                         @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>

                            <div class="mt-4">
                                <div class="row text-600 text-white bgc-default-tp1 py-25">
                                    <div class="d-none d-sm-block col-1">#</div>
                                    <div class="col-9 col-sm-5">Description</div>
                                    <div class="d-none d-sm-block col-4 col-sm-2">Condition</div>
                                    <div class="d-none d-sm-block col-sm-2">District</div>
                                    <div class="col-2">Amount</div>
                                </div>

                                <div class="text-95 text-secondary-d3">
                                    <div class="row mb-2 mb-sm-0 py-25">
                                        <div class="d-none d-sm-block col-1">1</div>
                                        <div class="col-9 col-sm-5">{{ $invoice[0]->product_name }}</div>
                                        <div class="d-none d-sm-block col-2">{{ $invoice[0]->condition }}</div>
                                        <div class="d-none d-sm-block col-2 text-95">{{ $invoice[0]->district }}</div>
                                        <div class="col-2 text-secondary-d2">{{ number_format($invoice[0]->invoice_amount) }} TZS</div>
                                    </div>
                                </div>

                                <div class="row border-b-2 brc-default-l2"></div>

                                <!-- or use a table instead -->
                                <!--
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                                <thead class="bg-none bgc-default-tp1">
                                    <tr class="text-white">
                                        <th class="opacity-2">#</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th width="140">Amount</th>
                                    </tr>
                                </thead>

                                <tbody class="text-95 text-secondary-d3">
                                    <tr></tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Domain registration</td>
                                        <td>2</td>
                                        <td class="text-95">$10</td>
                                        <td class="text-secondary-d2">$20</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                        -->

                                <div class="row mt-3">
                                    <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                        @if($invoice[0]->payment_method == "BANK")
                                        <p>Bank name: <b>CRDB BANK PLC</b></p>
                                        <p>Bank acc name: <b>EASY BIDS LTD</b></p>
                                        <p>Bank acc number: <b>01J83275348</b></p>
                                        @else 
                                        <p>Mobile money operator: <b>M-PESA</b></p>
                                        <p>Mobile money name: <b>EASY BIDS LTD</b></p>
                                        <p>Mobile money number: <b>0755000000</b></p>
                                        @endif
                                    </div>

                                    <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                        <div class="row my-2">
                                            <div class="col-7 text-right">
                                                SubTotal
                                            </div>
                                            <div class="col-5">
                                                <span class="text-120 text-secondary-d1">
                                                    {{ number_format($subtotal) }} TZS
                                                </span>
                                            </div>
                                        </div>

                                        <div class="row my-2">
                                            <div class="col-7 text-right">
                                                Tax (10%)
                                            </div>
                                            <div class="col-5">
                                                <span class="text-110 text-secondary-d1">
                                                    {{ number_format($tax) }} TZS
                                                </span>
                                            </div>
                                        </div>

                                        <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                            <div class="col-7 text-right">
                                                Total Amount
                                            </div>
                                            <div class="col-5">
                                                <span class="text-150 text-success-d3 opacity-2">
                                                    {{ number_format($invoice[0]->invoice_amount) }} TZS
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <div>
                                    <span class="text-secondary-d1 text-105">Thank you for your purchase</span>
                                    <form action="{{ url('/store_receipt') }}" method="POST" class="float-right" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="auction_id" value="{{ $invoice[0]->fk_auction }}">
                                        <input type="hidden" name="invoice_id" value="{{ $invoice[0]->id }}">
                                        <label for="">Attach payment document(Bank receipt or screenshot of transaction)</label>
                                        <input type="file" name="receipt" class="form-control">
                                        <button type="submit" class="btn btn-info btn-bold px-4 mt-2">Verify payment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                

            </div>
        </div>
    </section>
    <!--============= About Section Ends Here =============-->


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
                <h1 class="text-dark">Easybids</h1>
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
                        <div class="copyright"><p>&copy; Copyright 2021 | <a href="#0">EasyBids</a> By <a href="#0">BCS#</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script><script src="{{ url('/assets/js/jquery-3.3.1.min.js') }}"></script>
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