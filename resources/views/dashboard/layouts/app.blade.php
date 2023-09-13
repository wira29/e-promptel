<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>{{ config('app.name') }}</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="handheldfriendly" content="true"/>
    <meta name="MobileOptimized" content="width"/>
    <meta name="description" content="Mordenize"/>
    <meta name="author" content=""/>
    <meta name="keywords" content="Mordenize"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
          href="{{ asset('logo.png') }}"/>
    <!-- Owl Carousel  -->
    <link rel="stylesheet"
          href="{{ asset('dashboard_assets/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('dashboard_assets/dist/css/style.min.css') }}"/>

    @yield('style')
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{ asset('logo.png') }}"
         alt="loader" class="lds-ripple img-fluid"/>
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{ asset('logo.png') }}"
         alt="loader" class="lds-ripple img-fluid"/>
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-theme="orange_theme" data-layout="vertical" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            @include('dashboard.layouts.sidebar')
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                @include('dashboard.layouts.navbar')
            </nav>
        </header>
        <!--  Header End -->

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
<!--  Shopping Cart -->
<div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight"
     aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
    </div>
    <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="../../dist/images/products/product-1.jpg" width="95" height="75"
                         class="rounded-1 me-9 flex-shrink-0" alt=""/>
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-light-success text-success "
                                        type="button" id="add1"> -
                                </button>
                                <input type="text"
                                       class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                                       placeholder="" aria-label="Example text with button addon"
                                       aria-describedby="add1" value="1"/>
                                <button class="btn text-success bg-light-success  p-0 round-20 border-0 add"
                                        type="button" id="addo2"> +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="../../dist/images/products/product-2.jpg" width="95" height="75"
                         class="rounded-1 me-9 flex-shrink-0" alt=""/>
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-light-success text-success "
                                        type="button" id="add2"> -
                                </button>
                                <input type="text"
                                       class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                                       placeholder="" aria-label="Example text with button addon"
                                       aria-describedby="add2" value="1"/>
                                <button class="btn text-success bg-light-success  p-0 round-20 border-0 add"
                                        type="button" id="addon34"> +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="../../dist/images/products/product-3.jpg" width="95" height="75"
                         class="rounded-1 me-9 flex-shrink-0" alt=""/>
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-light-success text-success "
                                        type="button" id="add3"> -
                                </button>
                                <input type="text"
                                       class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                                       placeholder="" aria-label="Example text with button addon"
                                       aria-describedby="add3" value="1"/>
                                <button class="btn text-success bg-light-success  p-0 round-20 border-0 add"
                                        type="button" id="addon3"> +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="align-bottom">
            <div class="d-flex align-items-center pb-7">
                <span class="text-dark fs-3">Sub Total</span>
                <div class="ms-auto">
                    <span class="text-dark fw-semibold fs-3">$2530</span>
                </div>
            </div>
            <div class="d-flex align-items-center pb-7">
                <span class="text-dark fs-3">Total</span>
                <div class="ms-auto">
                    <span class="text-dark fw-semibold fs-3">$6830</span>
                </div>
            </div>
            <a href="eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
        </div>
    </div>
</div>

<!--  Mobilenavbar -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
     aria-labelledby="offcanvasWithBothOptionsLabel">
    @include('dashboard.layouts.mobile_navbar')
</div>

<!--  Import Js Files -->
<script src=" {{ asset('dashboard_assets/dist/libs/jquery/dist/jquery.min.js') }}"></script>
<script src=" {{ asset('dashboard_assets/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!--  core files -->
<script src="{{ asset('dashboard_assets/dist/js/app.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/js/app.init.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('dashboard_assets/dist/js/custom.js') }}"></script>
<!--  current page js files -->
<script src="{{ asset('dashboard_assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
{{--<script src="{{ asset('dashboard_assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>--}}
<script src="{{ asset('dashboard_assets/dist/js/dashboard.js') }}"></script>

@yield('script')
</body>

</html>
