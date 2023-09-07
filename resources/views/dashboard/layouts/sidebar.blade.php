<div class="brand-logo d-flex flex-row align-items-center justify-content-center p-3">
    <a href="{{ route('dashboard.home') }}" class="text-nowrap logo-img">
        <img
            src="{{ asset('logo.png') }}"
            class="dark-logo" width="100" alt=""/>
        {{--        <img--}}
        {{--            src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"--}}
        {{--            class="dark-logo" width="180" alt=""/>--}}
        {{--        <img--}}
        {{--            src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"--}}
        {{--            class="light-logo" width="180" alt=""/>--}}
    </a>
    <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8 text-muted p-3"></i>
    </div>
</div>
<!-- Sidebar navigation-->
<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Dashboard</span>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Layanan</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('categories.*') ? 'active' : '' }}"
               href="{{ route('categories.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-list-details"></i>
                  </span>
                <span class="hide-menu">Materi Audio</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('categories.*') ? 'active' : '' }}"
               href="{{ route('categories.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-list-details"></i>
                  </span>
                <span class="hide-menu">Materi Video</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Artikel</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('categories.*') ? 'active' : '' }}"
               href="{{ route('categories.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-list-details"></i>
                  </span>
                <span class="hide-menu">Kategori</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('articles.*') ? 'active' : '' }}"
               href="{{ route('articles.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-text"></i>
                  </span>
                <span class="hide-menu">List Artikel</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Berita</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('articles.*') ? 'active' : '' }}"
               href="{{ route('articles.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-text"></i>
                  </span>
                <span class="hide-menu">List Agenda</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('articles.*') ? 'active' : '' }}"
               href="{{ route('articles.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-text"></i>
                  </span>
                <span class="hide-menu">List Kegiatan</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Pengaturan</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('about.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-help"></i>
                  </span>
                <span class="hide-menu">Tentang</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('about.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-help"></i>
                  </span>
                <span class="hide-menu">Visi Misi</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('about.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-help"></i>
                  </span>
                <span class="hide-menu">Struktur Organisasi</span>
            </a>
        </li>
    </ul>

</nav>
