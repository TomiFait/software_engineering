<!-- Header -->
<header class="header">
				<div class="header-fixed">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{ url('/') }}" class="navbar-brand logo">
                            <span style="color:rgb(78, 78, 221)">Lex</span>Bank
							{{-- <img src="{{asset('asset/img/logo.png')}}" class="img-fluid" alt="Logo"> --}}
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{ url('/') }}" class="menu-logo">
								<span style="color:rgb(78, 78, 221)">Lex</span>Bank
								{{-- <img src="assets/img/logo.png" class="img-fluid" alt="Logo"> --}}
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a  class="nav-link" href="{{ url('/') }}">Home</a>
							</li>
							<li>
								<a class="nav-link" href="{{ url('/') }}">About Us</a>
							</li>
							<li>
								<a class="nav-link" href="{{ url('/') }}">How it Works</a>
							</li>
							<li>
								<a class="nav-link" href="{{ url('/') }}">Contact</a>
							</li>
							<li class="login-link">
								<a href="{{ url('login') }}">Login / Signup</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('login') }}">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{ url('register')}}">Register</a>
						</li>
					</ul>
				</nav>
				</div>
			</header>
			<!-- /Header -->