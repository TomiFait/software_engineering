<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Mentoring - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('admin/css/feathericon.min.css')}}">
		
		<!-- Morris CSS -->
		<link rel="stylesheet" href="{{asset('admin/plugins/morris/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="{{url('home')}}" class="logo">
						LexBank
					</a>
					<a href="{{url('home')}}" class="logo logo-small">
						LexBank
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				{{-- <div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				 --}}
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            {{ auth()->user()->first_name}} {{ auth()->user()->last_name}}
							{{-- <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-12.jpg" width="31" alt="Ryan Taylor"></span> --}}
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									{{-- <img src="assets/img/profiles/avatar-12.jpg" alt="User Image" class="avatar-img rounded-circle"> --}}
								</div>
								<div class="user-text">
									<h6> {{ auth()->user()->first_name}} {{ auth()->user()->last_name}}</h6>
									<p class="text-muted mb-0">Account Owner</p>
								</div>
							</div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
							{{-- <a class="dropdown-item" href="login.html">Logout</a> --}}
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="active"> 
								<a href="{{url('home')}}"><span>Dashboard</span></a>
							</li>
							<li> 
								<a href="{{url('transfer')}}"><span>Transfer</span></a>
							</li>
							<li> 
								<a href="{{url('deposit')}}"><span>Deposit</span></a>
							</li>
							<li> 
								<a href="{{url('withdraw')}}"><span>Withdrawal</span></a>
							</li>
							<li> 
								<a href="{{url('view')}}"><span>View Account</span></a>
							</li>
						
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h3> 
								<ul class="breadcrumb">
									Account Number:  <li class="breadcrumb-item active">{{auth()->user()->account_number}}</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

                    @yield('content')

					
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="{{asset('admin/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Feather Icon JS -->
		<script src="{{asset('admin/js/feather.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{asset('admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Raphael JS -->
		<script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Morris JS -->
		<script src="{{asset('admin/plugins/morris/morris.min.js')}}"></script>  

		<!-- Chart JS -->
		<script src="{{asset('admin/js/chart.morris.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{asset('admin/js/script.js')}}"></script>
		
    </body>
</html>
