
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Scrooge I Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    
   
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
				<a class="d-flex font-24 font-weight-500 auth-brand" href="#">
                    E-Recruitment
                </a>
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div class="auth-cover-img overlay-wrap" style="background-image:url(admin/dist/img/bg.png);">
                           
                        </div>
                    </div>
					<div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <h1 class="display-5 mb-10">Welcome Back :)</h1>
                                    <p class="mb-30">Sign in to your account and enjoy unlimited perks.</p>
                                    <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                           <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror 
                                        </div>
                                    </div>

                                    <button class="btn btn-danger btn-block" type="submit">Login</button>
                                    <p class="font-14 text-center mt-15">Having trouble logging in?</p>
                                    <p class="text-center">Do have an account yet? <a href="signup.html">Sign Up</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Owl JavaScript -->
    <script src="{{asset('admin/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('admin/dist/js/feather.min.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('admin/dist/js/init.js')}}"></script>
    <script src="{{asset('admin/dist/js/login-data.js')}}"></script>
</body>

</html>