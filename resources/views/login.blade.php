<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Class Project" />

    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/selectize.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="/assets/css/owl.theme.css" />
    <link rel="stylesheet" href="/assets/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
</head>
<body>
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="/" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="vh-100" style="background: url('/assets/images/login-bg.jpg') center center;">

            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="login-page bg-white shadow rounded p-4" style="background-color: #ffffff3d!important;">
                                    <div class="text-center">
                                        <h4 class="mb-4">Login</h4>  
                                    </div>
                                    <form class="login-form" action="/login" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <p class="float-right forgot-pass"><a href="recovery_passward.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                                <div class="form-group">
                                                    <div class="custom-control m-0 custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-0">
                                                <input type="submit" name="submit" class="btn btn-primary w-100">
                                            </div>
                                            <div class="col-lg-12 mt-4 text-center">
                                                <h6>Or Login With</h6>
                                                <ul class="list-unstyled social-icon mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                                </ul><!--end icon-->
                                            </div>
                                            <div class="col-12 text-center">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="/signup" class="text-dark font-weight-bold">Sign Up</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div><!---->
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->
        <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    
    <!-- selectize js -->
    <script src="/assets/js/selectize.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/counter.int.js"></script>
    
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/home.js"></script>
</body>
</html>