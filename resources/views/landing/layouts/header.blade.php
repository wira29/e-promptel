<header class="main-header header-style-1 font-heading">
    <div class="header-top">
        <div class="container">
            <div class="row pt-20 pb-20">
                <div class="col-md-3 col-xs-6">
                    <a href="index-2.html">
                        <!-- <img
                            class="logo"
                            src="assets/imgs/theme/logo.png"
                            alt=""
                    /> -->
                        E-Promptel
                    </a>
                </div>
                <div class="col-md-9 col-xs-6 text-end header-top-right">
                    <div class="dark-light-mode-cover">
                        <a class="dark-light-mode" href="#"></a>
                    </div>
                    <a
                        class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow"
                        href="{{ route('login') }}"
                        >Masuk</a
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="header-sticky">
        <div class="container align-self-center position-relative">
            <div class="mobile_menu d-lg-none d-block"></div>
            <div class="main-nav d-none d-lg-block float-start">
                <nav>
                    <!--Desktop menu-->
                    <ul class="main-menu d-none d-lg-inline font-small">
                        <li>
                            <a
                                class="{{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}"
                                >Beranda</a
                            >
                        </li>
                        <li>
                            <a
                                class="{{ request()->routeIs('news') ? 'active' : '' }}"
                                href="{{ route('news') }}"
                                >Berita</a
                            >
                        </li>
                        <li class="menu-item-has-children">
                            <a
                                class="{{ request()->routeIs('videos') || request()->routeIs('audios') || request()->routeIs('articles') ? 'active' : '' }}"
                                href="index-2.html"
                            >
                                Layanan</a
                            >
                            <ul class="sub-menu text-muted font-small">
                                <li>
                                    <a href="{{ route('videos') }}"
                                        >Materi Video</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('audios') }}"
                                        >Materi Audio</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('articles') }}"
                                        >Artikel</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li><a href="category.html">Poling</a></li>
                        <li>
                            <a
                                class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}"
                                >Kontak</a
                            >
                        </li>
                    </ul>
                    <!--Mobile menu-->
                    <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                        <li class="menu-item-has-children">
                            <a href="#">Beranda</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Berita</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Layanan</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Poling</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="float-end header-tools text-muted font-small"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
