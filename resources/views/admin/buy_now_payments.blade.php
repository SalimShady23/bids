<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Buy now payments</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/admin/dist/css/adminlte.min.css')}}">
  <style>
    #main {
  margin: 50px 0;
}

#main #faq .card {
  margin-bottom: 30px;
  border: 0;
}

#main #faq .card .card-header {
  border: 0;
  -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
          box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
  border-radius: 2px;
  padding: 0;
}

#main #faq .card .card-header .btn-header-link {
  color: #fff;
  display: block;
  text-align: left;
  background: #28a745;
  color: #fff;
  padding: 20px;
}

#main #faq .card .card-header .btn-header-link:after {
  content: "\f107";
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  float: right;
}

#main #faq .card .card-header .btn-header-link.collapsed {
  background: #007bff;
  color: #fff;
}

#main #faq .card .card-header .btn-header-link.collapsed:after {
  content: "\f106";
}

#main #faq .card .collapsing {
  background: #343a40;
  line-height: 30px;
}

#main #faq .card .collapse {
  border: 0;
}

#main #faq .card .collapse.show {
  background: #343a40;
  line-height: 30px;
  color: #fff;
}
  </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <form method="POST" action="{{ route('logout') }}">
		    <a class="nav-link" href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                <i class="fa fa-power-off"></i> Logout
                @csrf
            </a>
        </form>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BIDS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ ucwords(strtolower(Auth::user()->first_name)) }} {{ ucwords(strtolower(Auth::user()->last_name)) }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/admin_index" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ad"></i>
              <p>
                Auction
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/active_auctions" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active auctions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/suspended_auctions" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspended auctions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/completed_auctions" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Completed auctions</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/create_category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category & SubCategory</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Sub Categories</p>
                </a>
              </li>
            </ul>
          </li>  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/create_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pending_users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/inactive_users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive users</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/auction_reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Auction reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/user_reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User reports</p>
                </a>
              </li>
            </ul>
          </li>  
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-coins"></i>
              <p>
                Payments
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/active_payments" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/inactive_payments" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Winning payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/buy_now_payments" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buy now payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/inactive_payments" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive payments</p>
                </a>
              </li>
            </ul>
          </li>
                 
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Buy now payments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/admin_index">Home</a></li>
              <li class="breadcrumb-item">Payments</li>
              <li class="breadcrumb-item active"><a href="/admin/buy_now_payments">Buy now payments</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-primary card-outline">
              <div class="card-body">

              @if(session('paymentSuccess'))
              <div class="alert alert-success">
                {{ session('paymentSuccess') }}
              </div>
              @endif

              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Invoice amount</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php $i = 0; ?>
                    @foreach($payments as $payment)
                    <tr>
                        <td>
                            {{ ++$i; }}
                        </td>
                        <td>
                            {{ ucwords(strtolower($payment->username)) }}
                        </td>
                        <td>
                            {{ number_format($payment->invoice_amount) }} TZS
                        </td>
                        <td>
                            @if($payment->invoice_status == "PENDING")
                            <button class="btn btn-danger text-white">Unpaid</button>
                            @elseif($payment->invoice_status == "PAID")
                            <button class="btn btn-success text-white">Paid</button>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" id="show-payment" data-url="{{ route('buy_now_payments.show', $payment->fk_user) }}" data-toggle="modal" data-target="#viewPaymentModal">
                              <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                    <!-- View Modal -->
                    <div class="modal fade" id="viewPaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Payment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <div id="main">
                          <div class="container">
                            <div class="accordion" id="faq">
                              <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">User information</a>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">

                                    <div class="card" id="business_view" style="display: none;">
                                      <div class="card-body">

                                      <div class="row">
                                        <div class="col-sm-6">
                                          Business name
                                        </div>
                                        <div class="col-sm-6">
                                          <span id="busines_name"></span>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                          Brella number
                                        </div>
                                        <div class="col-sm-6">
                                          <span id="brella_num"></span>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                          Email
                                        </div>
                                        <div class="col-sm-6">
                                          <span id="busines_email"></span>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                          Mobile
                                        </div>
                                        <div class="col-sm-6">
                                          <span id="busines_mobile"></span>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                          Region
                                        </div>
                                        <div class="col-sm-6">
                                          <span id="region"></span>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                          Street address
                                        </div>
                                        <div class="col-sm-6">
                                          <span id="street_address"></span>
                                        </div>
                                      </div>

                                    </div>
                                  </div>

                                  <div class="card" id="personal_view" style="display: none;">
                                    <div class="card-body">

                                    <div class="row">
                                      <div class="col-sm-6">
                                        Full name
                                      </div>
                                      <div class="col-sm-6">
                                        <span id="per_firstname"></span> <span id="per_lastname"></span>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-6">
                                        Username
                                      </div>
                                      <div class="col-sm-6">
                                        <span id="per_username"></span>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-6">
                                        Email
                                      </div>
                                      <div class="col-sm-6">
                                        <span id="per_email"></span>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-6">
                                        Mobile
                                      </div>
                                      <div class="col-sm-6">
                                        <span id="per_mobile"></span>
                                      </div>
                                    </div>

                                    </div>
                                  </div>


                                    </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">Payment Information</a>
                                </div>

                                  <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                      <div class="card-body">

                                      <div class="row">
                                        <div class="col-sm-6">
                                            Receipt file
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="/receipt/{{ $payment->receipt_image }}" class="btn btn-info" download>Download receipt</a>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                            Invoice amount
                                        </div>
                                        <div class="col-sm-6">
                                            {{ number_format($payment->invoice_amount) }} TZS
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                            Invoice type
                                        </div>
                                        <div class="col-sm-6">
                                            {{ ucwords(strtolower($payment->invoice_type)) }}
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-6">
                                            Created at
                                        </div>
                                        <div class="col-sm-6">
                                            {{ date('l jS \of F Y', strtotime($payment->created_at)) }}
                                        </div>
                                      </div>


                                      </div>
                                  </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">Action Panel</a>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                        
                                        <form action="{{ url('/controlPayment') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="receipt_id" value="{{ $payment->id }}">
                                            <input type="hidden" name="invoice_id" value="{{ $payment->fk_invoice }}">
                                            <input type="hidden" name="auction_id" value="{{ $payment->fk_auction }}">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form-label">Receipt action</label>
                                                        <select name="receipt_action" class="form-control">
                                                            <option value="">Select action</option>
                                                            <option value="APPROVE">Approve</option>
                                                            <option value="DENY">Deny</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-1">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                              </div>
                          </div>
                          </div>
                        </div>

                          

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                  
                  </tbody>
                </table>

              </div>
        </div><!-- /.card -->
       
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">BIDS</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{url('/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/admin/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('/admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('/admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('/admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('/admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('/admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{url('/admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/admin/dist/js/pages/dashboard2.js')}}"></script>

<script>
     $(document).ready(function () {
       
       /* When click show user */
        $('body').on('click', '#show-payment', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {

              $('#viewPaymentModal').modal('show');
              
              if (data.user_role == 2) {

                $("#business_view").show();
                $("#personal_view").hide();
                $("#busines_name").text(data.business_name);
                $("#brella_num").text(data.brella_number);
                $("#busines_email").text(data.email);
                $("#busines_mobile").text(data.mobile);
                $("#region").text(data.region);
                $("#street_address").text(data.street_address);
                 
              } else if (data.user_role == 3) {

                $("#personal_view").show();
                $("#per_firstname").text(data.first_name);
                $("#per_lastname").text(data.last_name);
                $("#per_username").text(data.username);
                $("#per_email").text(data.email);
                $("#per_mobile").text(data.mobile);
                $("#business_view").hide();

              }
          })
       });
    });
</script>
</body>
</html>
