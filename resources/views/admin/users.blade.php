<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Active Users</title>

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
            <a href="#" class="nav-link active">
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
                <a href="/admin/users" class="nav-link active">
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
            <a href="#" class="nav-link">
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
            <h1 class="m-0">View Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/admin_index">Home</a></li>
              <li class="breadcrumb-item">User</li>
              <li class="breadcrumb-item active"><a href="/admin/users">View Users</a></li>
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

              @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
              @endif

              <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php $i = 0; ?>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{ ++$i; }}
                            </td>
                            <td>
                                {{ ucwords(strtolower($user->username)) }}
                            </td>
                            <td>
                                {{ ucwords(strtolower($user->email)) }}
                            </td>
                            <td>
                                {{ $user->mobile }}
                            </td>
                            <td>
                            <!-- <a href="javascript:void(0)" id="show-user" data-url="{{ route('users.show', $user->id) }}" class="btn btn-info">
                                Show
                            </a> -->
                            <a class="btn btn-primary" id="show-user" data-url="{{ route('users.show', $user->id) }}" data-toggle="modal" data-target="#viewUserModal">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-success" id="edit-user" data-url="{{ route('users.show', $user->id) }}" data-toggle="modal" data-target="#editUserModal" style="margin-left: 20px;">
                              <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a class="btn btn-danger" id="delete-user" data-url="{{ route('users.show', $user->id) }}" data-toggle="modal" data-target="#deleteUserModal" style="margin-left: 20px;">
                              <i class="fa fa-trash"></i>
                            </a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- View Modal -->
                    <div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View User</h5>
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

                                    <div class="row">
                                      <div class="col-sm-6">
                                        Created at
                                      </div>
                                      <div class="col-sm-6">
                                        <span id="per_created_at"></span>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-6">
                                        Updated at
                                      </div>
                                      <div class="col-sm-6">
                                        <span id="per_updated_at"></span>
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
                                    aria-expanded="true" aria-controls="faq2">Bidding history</a>
                                </div>

                                  <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                      <div class="card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                          moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                          Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                          shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                          proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                          aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                      </div>
                                  </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">S.S.S</a>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                        aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/edit_user') }}" method="POST">
                              @csrf

                              <div class="" id="business_form" style="display: none;">
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Business name</label>
                                            <input type="text" name="business_name" id="business_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Brella number</label>
                                            <input type="text" name="brella_number" id="brella_number" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Username</label>
                                            <input type="text" name="business_username" id="business_user_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Mobile</label>
                                            <input type="text" name="business_mobile" id="business_mobile" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Region</label>
                                            <select name="business_region" id="business_region" class="form-control">
                                              <option value="ARUSHA">ARUSHA</option>
                                              <option value="DAR ES SALAAM">DAR ES SALAAM</option>
                                              <option value="DODOMA">DODOMA</option>
                                              <option value="GEITA">GEITA</option>
                                              <option value="IRINGA">IRINGA</option>
                                              <option value="KAGERA">KAGERA</option>
                                              <option value="KASKAZINI PEMBA">KASKAZINI PEMBA</option>
                                              <option value="KASKAZINI UNGUJA">KASKAZINI UNGUJA</option>
                                              <option value="KATAVI">KATAVI</option>
                                              <option value="KIGOMA">KIGOMA</option>
                                              <option value="KILIMANJARO">KILIMANJARO</option>
                                              <option value="KUSINI PEMBA">KUSINI PEMBA</option>
                                              <option value="KUSINI UNGUJA">KUSINI UNGUJA</option>
                                              <option value="LINDI">LINDI</option>
                                              <option value="MANYARA">MANYARA</option>
                                              <option value="MARA">MARA</option>
                                              <option value="MBEYA">MBEYA</option>
                                              <option value="MOROGORO">MOROGORO</option>
                                              <option value="MTWARA">MTWARA</option>
                                              <option value="MWANZA">MWANZA</option>
                                              <option value="NJOMBE">NJOMBE</option>
                                              <option value="PWANI">PWANI</option>
                                              <option value="RUKWA">RUKWA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Street address</label>
                                            <input type="text" name="business_street_address" id="business_street_address" class="form-control">
                                        </div>
                                    </div>
                                </div>

                              </div>

                              <div class="" id="personal_form" style="display: none;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">First name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Last name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Username</label>
                                            <input type="text" name="personal_username" id="personal_username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form-label">Mobile</label>
                                            <input type="text" name="personal_mobile" id="personal_mobile" class="form-control">
                                        </div>
                                    </div>
                                </div>

                              </div>
                        </div>
                        <input type="hidden" name="user_id" id="edit_user_id">
                        <input type="hidden" name="user_role" id="user_role">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/delete_user') }}" method="POST">
                              @csrf
                              <p>Are you sure you want to delete this user ?</p>
                              <input type="hidden" name="user_id" id="user_id">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                

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
<!-- DataTables  & Plugins -->
<script src="{{url('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('/admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": true,
      "ordering": true,
      "searching": true,
      "info": true,
      "paging": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script type="text/javascript">

    // program to convert first letter of a string to uppercase
    function capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }

      
    $(document).ready(function () {
       
       /* When click show user */
        $('body').on('click', '#show-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#viewUserModal').modal('show');
              
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
                $("#per_created_at").text(data.created_at);
                $("#per_updated_at").text(data.updated_at);
                $("#business_view").hide();

              }
              // $('#username').text(capitalizeFirstLetter(data.username));
              // $('#email').text(data.email);
          })
       });

       /* When click edit user */
       $('body').on('click', '#edit-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#editUserModal').modal('show');
              $('#edit_user_id').val(data.id);
              $("#user_role").val(data.user_role);
              if (data.user_role == 2) {
                  $("#business_form").show();
                  $("#business_name").val(data.business_name);
                  $("#brella_number").val(data.brella_number);
                  $("#business_user_name").val(data.username)
                  $("#business_mobile").val(data.mobile);
                  $("#business_region").append(new Option(data.region, data.region));
                  $("#business_region option[value="+data.region+"]").prop("selected", true)
                  $("#business_street_address").val(data.street_address);
                  $("#personal_form").hide()

              } else {
                  $("#personal_form").show();
                  $("#first_name").val(data.first_name);
                  $("#last_name").val(data.last_name);
                  $("#personal_username").val(data.username);
                  $("#personal_mobile").val(data.mobile);
                  $("#business_form").hide()

              }
          })
       });

       /* When click delete user */
       $('body').on('click', '#delete-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#deleteUserModal').modal('show');
              $('#user_id').val(data.id);
          })
       });
       
    });
  
</script>
</body>
</html>
