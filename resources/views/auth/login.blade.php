<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Login ke Dashboard</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="handheldfriendly" content="true"/>
    <meta name="MobileOptimized" content="width"/>
    <meta name="description" content="Mordenize"/>
    <meta name="author" content=""/>
    <meta name="keywords" content="Mordenize"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
          href="{{ asset('logo.png') }}"/>
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href=" {{ asset('dashboard_assets/dist/css/style.min.css') }}"/>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{ asset('logo.png') }}"
         alt="loader" class="lds-ripple img-fluid"/>
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed"
     data-header-position="fixed">
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{ route('home') }}" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                <img
                                    src="{{ asset('logo.png') }}"
                                    width="180" alt="">
                            </a>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input value="{{ old('username') }}" autocomplete="off" type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           name="username"
                                           aria-describedby="emailHelp">

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input autocomplete="off" type="password" name="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           id="exampleInputPassword1">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <button type="submit" class="btn btn-primary py-8 mb-4 rounded-2">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Import Js Files -->
<script src="{{ asset('dashboard_assets/dist/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!--  core files -->
<script src="{{ asset('dashboard_assets/dist/js/app.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/js/app.init.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/js/sidebarmenu.js') }}"></script>

<script src="{{ asset('dashboard_assets/dist/js/custom.js') }}"></script>
</body>
</html>
