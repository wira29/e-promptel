<!DOCTYPE html>
<html class="no-js" lang="en">
    <!-- Mirrored from demos.alithemes.com/html/stories/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 04:02:07 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>E-Promptel</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="assets/imgs/theme/favicon.png"
        />
        <!-- NewsBoard CSS  -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/widgets.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/responsive.css') }}"
        />

        @yield('css')
    </head>

    <body class="theme-mode">
        <div class="scroll-progress primary-bg"></div>
        <!-- Start Preloader -->
        <div class="preloader text-center">
                <img src="{{ asset("logo.png") }}" width="80" alt="logo" />
{{--            <div class="circle">--}}
{{--            </div>--}}
        </div>
        <!-- Start Header -->
        @include('landing.layouts.header')
        <!--Start search form-->
        <div class="main-search-form">
            <div class="container">
                <div class="pt-50 pb-50">
                    <div class="row mb-20">
                        <div
                            class="col-12 align-self-center main-search-form-cover m-auto"
                        >
                            <p class="text-center">
                                <span class="search-text-bg">Search</span>
                            </p>
                            <form action="#" class="search-header">
                                <div class="input-group w-100">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search stories, places and people"
                                    />
                                    <div class="input-group-append">
                                        <button
                                            class="btn btn-search bg-white"
                                            type="submit"
                                        >
                                            <i
                                                class="elegant-icon icon_search"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-80 text-center">
                        <div class="col-12 font-small suggested-area">
                            <h5 class="suggested font-heading mb-20 text-muted">
                                <strong>Suggested keywords:</strong>
                            </h5>
                            <ul class="list-inline d-inline-block">
                                <li class="list-inline-item">
                                    <a href="category.html">World</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html">American</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html">Opinion</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html">Tech</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html">Science</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html">Books</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html">Travel</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html">Business</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-80">
                        <div class="col-lg-4">
                            <div
                                class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30"
                            >
                                <div
                                    class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden"
                                >
                                    <a class="color-white" href="single.html">
                                        <img
                                            src="assets/imgs/news/thumb-2.jpg"
                                            alt=""
                                        />
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6>
                                        <a href="category.html">Travel Tips</a>
                                    </h6>
                                    <p class="text-muted font-small">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div
                                class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30"
                            >
                                <div
                                    class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden"
                                >
                                    <a class="color-white" href="single.html">
                                        <img
                                            src="assets/imgs/news/thumb-4.jpg"
                                            alt=""
                                        />
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6>
                                        <a href="category.html">Lifestyle</a>
                                    </h6>
                                    <p class="text-muted font-small">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div
                                class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30"
                            >
                                <div
                                    class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden"
                                >
                                    <a class="color-white" href="single.html">
                                        <img
                                            src="assets/imgs/news/thumb-3.jpg"
                                            alt=""
                                        />
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6>
                                        <a href="category.html">Hotel Review</a>
                                    </h6>
                                    <p class="text-muted font-small">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Main content -->
        <main>@yield('content')</main>
        <!-- End Main content -->
        <!-- Footer Start-->
        @include("landing.layouts.footer")
        <!-- End Footer -->
        <div class="dark-mark"></div>
        <!-- Vendor JS-->
        <script src="{{
                asset('assets/js/vendor/modernizr-3.6.0.min.js')
            }}"></script>
        <script src="{{
                asset('assets/js/vendor/jquery-3.6.0.min.js')
            }}"></script>
        <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{
                asset('assets/js/vendor/jquery.slicknav.js')
            }}"></script>
        <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.ticker.js') }}"></script>
        <script src="{{
                asset('assets/js/vendor/jquery.vticker-min.js')
            }}"></script>
        <script src="{{
                asset('assets/js/vendor/jquery.scrollUp.min.js')
            }}"></script>
        <script src="{{
                asset('assets/js/vendor/jquery.nice-select.min.js')
            }}"></script>
        <script src="{{
                asset('assets/js/vendor/jquery.magnific-popup.js')
            }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.sticky.js') }}"></script>
        <script src="{{
                asset('assets/js/vendor/perfect-scrollbar.js')
            }}"></script>
        <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
        <script src="{{
                asset('assets/js/vendor/jquery.theia.sticky.js')
            }}"></script>
        <!-- NewsBoard JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src =
                    "https://embed.tawk.to/64fc14f9a91e863a5c1283fd/1h9sb3s66";
                s1.charset = "UTF-8";
                s1.setAttribute("crossorigin", "*");
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>

        @yield('script')
        <!--End of Tawk.to Script-->
    </body>

    <!-- Mirrored from demos.alithemes.com/html/stories/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 04:02:46 GMT -->
</html>
