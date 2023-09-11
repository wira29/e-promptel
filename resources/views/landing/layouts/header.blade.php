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
                        <li class="menu-item-has-children">
                            <a
                                class="{{ request()->routeIs('landing.home') || request()->routeIs('landing.about') || request()->routeIs('landing.vision-mission') || request()->routeIs('landing.organization') ? 'active' : '' }}"
                                href="index-2.html"
                            >
                                Beranda</a
                            >
                            <ul class="sub-menu text-muted font-small">
                                <li>
                                    <a href="{{ route('landing.home') }}">Beranda</a>
                                </li>
                                <li>
                                    <a href="{{ route('landing.about') }}"
                                        >Tentang</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('landing.vision-mission') }}"
                                        >Visi Misi</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('landing.organization') }}"
                                        >Struktur Organisasi</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a
                                class="{{ request()->routeIs('activities') || request()->routeIs('agenda') ? 'active' : '' }}"
                                href="index-2.html"
                            >
                                Berita</a
                            >
                            <ul class="sub-menu text-muted font-small">
                                <li>
                                    <a href="{{ route('agenda') }}">Agenda</a>
                                </li>
                                <li>
                                    <a href="{{ route('activities') }}"
                                        >Kegiatan</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a
                                class="{{ request()->routeIs('landing.videos') || request()->routeIs('landing.audios') || request()->routeIs('landing.articles') ? 'active' : '' }}"
                                href="index-2.html"
                            >
                                Layanan</a
                            >
                            <ul class="sub-menu text-muted font-small">
                                <li>
                                    <a href="{{ route('landing.videos') }}"
                                        >Materi Video</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('landing.audios') }}"
                                        >Materi Audio</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('landing.articles') }}"
                                        >Artikel</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a
                                class="{{ request()->routeIs('polling') ? 'active' : '' }}"
                                href="{{ route('polling') }}"
                                >Polling</a
                            >
                        </li>
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
