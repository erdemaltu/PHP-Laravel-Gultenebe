<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Admin Girişi | TechnoSphere</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets')}}/images/favicon.ico">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('assets')}}/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="{{ asset('assets')}}/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
    
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    
                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">1.000</span>+ Mutlu Müşteri</h4>
                                                    
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                        <p class="font-size-14 mb-0">- Skote User</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                        <p class="font-size-14 mb-0">- Skote User</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="admin" role="tabpanel">
                                            <div class="mb-4 mb-md-4">
                                                <a  class="d-block auth-logo">
                                                    <img src="{{ asset('assets')}}/images/gultenebe.png" alt="" height="75" class="auth-logo-dark">
                                                    <img src="{{ asset('assets')}}/images/gultenebe.png" alt="" height="75" class="auth-logo-light">
                                                </a>
                                            </div>
                                            @include('admin.alert')
                                            <div>
                                                <h5 class="text-primary" style="color: #ee724b !important">Hoşgeldiniz !</h5>
                                                <p class="text-muted">Devam etmek için giriş yapınız..</p>
                                            </div>
                
                                            <div class="mt-4">
                                                <form action="{{ route('admin_logincheck')}}" method="post">
                                                @csrf
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">E-Postanız</label>
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-Posta girin" required>
                                                    </div>
                            
                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="#" class="text-muted">Parolamı unuttum?</a>
                                                        </div>
                                                        <label class="form-label">Parola</label>
                                                        <div class="input-group auth-pass-inputgroup">
                                                            <input type="password" class="form-control" placeholder="Parola girin" aria-label="Password" aria-describedby="password-addon" name="password" required>
                                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember-check" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember-check">
                                                            Beni hatırla
                                                        </label>
                                                    </div>
                                                    
                                                    <div class="mt-3 d-grid">
                                                        <button class="btn btn-primary waves-effect waves-light" style="background: #ee724b !important;border:none!important" type="submit">GİRİŞ</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="depo" role="tabpanel">
                                            <div class="mb-4 mb-md-4">
                                                <a  class="d-block auth-logo">
                                                    <img src="{{ asset('assets')}}/images/gultenebe.png" alt="" height="75" class="auth-logo-dark">
                                                    <img src="{{ asset('assets')}}/images/gultenebe.png" alt="" height="75" class="auth-logo-light">
                                                </a>
                                            </div>
                                            @include('admin.alert')
                                            <div>
                                                <h5 class="text-primary" style="color: #ee724b !important">Hoşgeldiniz !</h5>
                                                <p class="text-muted">Devam etmek için giriş yapınız..</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> @Erdemaltu.  <i class="mdi mdi-heart text-danger"></i> Tüm telif hakları saklıdır.</p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets')}}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('assets')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('assets')}}/libs/node-waves/waves.min.js"></script>

        <!-- owl.carousel js -->
        <script src="{{ asset('assets')}}/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- auth-2-carousel init -->
        <script src="{{ asset('assets')}}/js/pages/auth-2-carousel.init.js"></script>
        
        <!-- App js -->
        <script src="{{ asset('assets')}}/js/app.js"></script>

    </body>
</html>