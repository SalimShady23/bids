<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Settings</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{url('/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/plugins/bootstrap/css/bootstrap-slider.css')}}">
  <!-- Font Awesome -->
  <link href="{{url('/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{url('/assets/plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
  <link href="{{url('/assets/plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{url('/assets/plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
  <link href="{{url('/assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{url('/assets/css/style.css')}}" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="{{ url('/') }}">
						<!-- <img src="images/logo.png" alt=""> -->
                        <h2>Bids</h2>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/') }}">Home</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/dashboard">Dashboard</a>
									<a class="dropdown-item" href="dashboard-my-ads.html">Dashboard My Ads</a>
									<a class="dropdown-item" href="dashboard-favourite-ads.html">Dashboard Favourite Ads</a>
									<a class="dropdown-item" href="dashboard-archived-ads.html">Dashboard Archived Ads</a>
									<a class="dropdown-item" href="dashboard-pending-ads.html">Dashboard Pending Ads</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="about-us.html">About Us</a>
									<a class="dropdown-item" href="contact-us.html">Contact Us</a>
									<a class="dropdown-item" href="user-profile.html">User Profile</a>
									<a class="dropdown-item" href="404.html">404 Page</a>
									<a class="dropdown-item" href="package.html">Package</a>
									<a class="dropdown-item" href="single.html">Single Page</a>
									<a class="dropdown-item" href="store.html">Store Single</a>
									<a class="dropdown-item" href="single-blog.html">Single Post</a>
									<a class="dropdown-item" href="blog.html">Blog</a>

								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="category.html">Ad-Gird View</a>
									<a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
                        @if (Auth::check())
                            <li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    <i class="fa fa-user"></i>	
                                    {{ ucwords(strtolower(Auth::user()->username)) }} <span></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{ url('/settings') }}">
                                        <i class="fa fa-gear"></i> Settings
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
									<a class="dropdown-item" href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <i class="fa fa-power-off"></i> Logout
                                            @csrf
                                    </a>
                                    </form>
								</div>
							</li>
                            @else 
                            <li class="nav-item">
								<a class="nav-link login-button" href="{{ route('login') }}">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{ route('register') }}"><i class="fa fa-plus-circle"></i> Register</a>
							</li>
                            @endif
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- Display entity  -->
						@if(Auth::user()->user_role == 2)
						<h2 class="text-center">B U S I N E S S</h2>
						@elseif(Auth::user()->user_role == 3)
						<h2 class="text-center">P E R S O N A L</h2>
						@endif
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							@if(Auth::user()->user_role == 2)
							<img src="{{url('/assets/images/user/team.png')}}" alt="" class="">
							@elseif(Auth::user()->user_role == 3)
							<img src="{{url('/assets/images/user/profile.png')}}" alt="" class="">
							@endif
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{ ucwords(strtolower(Auth::user()->username)) }}</h5>

                        <p class="text-center">Joined {{ date('l jS \of F Y', strtotime(Auth::user()->created_at)) }}</p>
					</div>
					<!-- Dashboard Links -->
					<div class="widget dashboard-links">
						<ul>
							<li><a class="my-1 d-inline-block" href="">Savings Dashboard</a></li>
							<li><a class="my-1 d-inline-block" href="">Saved Offer <span>(5)</span></a></li>
							<li><a class="my-1 d-inline-block" href="">Favourite Stores <span>(3)</span></a></li>
							<li><a class="my-1 d-inline-block" href="">Recommended</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Settings</h2>

					<!-- email verified message  -->
                    @if (Auth::user()->email_verified_at == null) 
                    <div class="alert alert-warning">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                        <div class="icon hidden-xs">
                        <i class="fa fa-exclamation-circle"></i>
                        </div>
                        <strong>Warning</strong>
                        <Br /> The registered email address has not been verified, some functionalities are disabled. Verify email address to in order to start bidding.
                    </div>
                    @else 
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    @endif

					<!-- validation message -->
					@if ($errors->any())
						<div class="alert alert-warning">
							<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
							<div class="icon hidden-xs">
								<i class="fa fa-exclamation-circle"></i>
							</div>
                        	<strong>Error</strong>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
						</div>
					@endif

					<!-- success message -->
					@if(session('success'))
						<div class="alert alert-success">
							<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
							<div class="icon hidden-xs">
								<i class="fa fa-check"></i>
							</div>
                        	<strong>Success</strong>
							<p>
								{{session('success')}}
							</p>
						</div>
					@endif
					
					<!-- success message -->
					@if(session('error'))
						<div class="alert alert-warning">
							<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
							<div class="icon hidden-xs">
								<i class="fa fa-times"></i>
							</div>
                        	<strong>Error</strong>
							<p>
								{{session('error')}}
							</p>
						</div>
					@endif

				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">

							@if(Auth::user()->user_role == 2)
							<h3 class="widget-header user">Edit Business Information</h3>
							<form method="POST" action="{{ url('/update_settings') }}">
								@csrf

								<!-- Business Name -->
								<div class="form-group">
									<label for="first-name">Business name</label>
									<input type="text" class="form-control" id="business-name" name="business_name" placeholder="Enter business name" value="{{ ucwords(strtolower(Auth::user()->business_name)) }}">
								</div>
								<!-- Brella number -->
								<div class="form-group">
									<label for="brella-number">Brella number</label>
									<input type="text" class="form-control" id="brella-number" name="brella_number" placeholder="Enter brella number" value="{{ Auth::user()->brella_number }}">
								</div>
								<!-- Brella number -->
								<div class="form-group">
									<label for="region">Region</label>
									<br>
									<select name="region" class="w-100">
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
								<!-- Street address -->
								<div class="form-group">
									<label for="street-address">Street address</label>
									<input type="text" class="form-control" id="street-address" name="street_address" placeholder="Enter street address" value="{{ ucwords(strtolower(Auth::user()->street_address)) }}">
								</div>
                                <!-- Mobile -->
								<div class="form-group">
									<label for="mobile">Mobile</label>
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile" value="{{ Auth::user()->mobile }}">
								</div>
								<!-- Submit button -->
								<button type="submit" class="btn btn-transparent">Save Changes</button>
							</form>
							@elseif(Auth::user()->user_role == 3)
							<h3 class="widget-header user">Edit Personal Information</h3>
							<form method="POST" action="{{ url('/update_settings') }}">
								@csrf

								<!-- First Name -->
								<div class="form-group">
									<label for="first-name">First Name</label>
									<input type="text" class="form-control" id="first-name" name="first_name" placeholder="Enter first name" value="{{ ucwords(strtolower(Auth::user()->first_name)) }}">
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="last-name">Last Name</label>
									<input type="text" class="form-control" id="last-name" name="last_name" placeholder="Enter last name" value="{{ ucwords(strtolower(Auth::user()->last_name)) }}">
								</div>
                                <!-- Mobile -->
								<div class="form-group">
									<label for="mobile">Mobile</label>
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile" value="{{ ucwords(strtolower(Auth::user()->mobile)) }}">
								</div>
								<!-- Submit button -->
								<button type="submit" class="btn btn-transparent">Save Changes</button>
							</form>
							@endif

							
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
					<div class="widget change-password">
						<h3 class="widget-header user">Edit Password</h3>
						<form method="POST" action="{{ url('/update_password') }}">
							@csrf
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-password">Current Password</label>
								<input required type="password" class="form-control" id="current-password" name="current_password" placeholder="Enter current password">
							</div>
							<!-- New Password -->
							<div class="form-group">
								<label for="new-password">New Password</label>
								<input required type="password" class="form-control" id="new-password" name="new_password" placeholder="Enter new password">
							</div>
							<!-- Confirm New Password -->
							<div class="form-group">
								<label for="confirm-password">Confirm New Password</label>
								<input required type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirm password">
							</div>
							<!-- Submit Button -->
							<button type="submit" class="btn btn-transparent">Change Password</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo-footer.png" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="category.html">Category</a></li>
            <li><a href="single.html">Single Page</a></li>
            <li><a href="store.html">Store Single</a></li>
            <li><a href="single-blog.html">Single Post</a>
            </li>
            <li><a href="blog.html">Blog</a></li>



          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              <img src="images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p>Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="{{url('/assets/plugins/jQuery/jquery.min.js')}}"></script>
<script src="{{url('/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{url('/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('/assets/plugins/bootstrap/js/bootstrap-slider.js')}}"></script>
  <!-- tether js -->
<script src="{{url('/assets/plugins/tether/js/tether.min.js')}}"></script>
<script src="{{url('/assets/plugins/raty/jquery.raty-fa.js')}}"></script>
<script src="{{url('/assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{url('/assets/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('/assets/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{url('/assets/plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
<!-- google map -->
<script src="{{url('/assets/plugins/google-map/gmap.js')}}"></script>
<script src="{{url('/assets/js/script.js')}}"></script>

</body>

</html>