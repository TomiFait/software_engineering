<!DOCTYPE html> 
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>Mentoring</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('asset/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
		
	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
			
			
			<!-- Page Content -->
			<div class="bg-pattern-style">
				<div class="content">
							
					<!-- Login Tab Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
									<h3>LexBank <span>Login </span></h3>
                                    <p class="text-muted">Access account</p>
								</div>
								<form method="POST" action="{{ route('login') }}">
                                    @csrf
									<div class="form-group">
										<label class="form-control-label">Email Address</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<label class="form-control-label">Password</label>
										<div class="pass-group">
											{{-- <input type="password" class="form-control pass-input"> --}}
                                            <input id="password" type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

											<span class="fas fa-eye toggle-password"></span>
										</div>

                                        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									{{-- <div class="text-end">
										<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
									</div> --}}
									<button class="btn btn-primary login-btn" type="submit">Login</button>
									<div class="text-center dont-have">Don’t have an account? <a href="{{url('register')}}">Register</a></div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Login Tab Content -->

				</div>

			</div>		
			<!-- /Page Content -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{asset('asset/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('asset/js/script.js')}}"></script>
		
	</body>
</html>