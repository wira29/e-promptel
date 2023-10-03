<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
           href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
        </a>
    </li>
</ul>
<ul class="navbar-nav quick-links d-none d-lg-flex">

</ul>
<div class="d-block d-lg-none">
    <img
        src="{{ asset('logo.png') }}"
        class="dark-logo" width="50" alt=""/>
    {{--    <img--}}
    {{--        src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"--}}
    {{--        class="dark-logo" width="180" alt=""/>--}}
    {{--    <img--}}
    {{--        src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"--}}
    {{--        class="light-logo" width="180" alt=""/>--}}
</div>
<button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <div class="d-flex align-items-center justify-content-between">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">


            <li class="nav-item dropdown">
                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="user-profile-img">
                            <img src="{{ asset('avatar.jpg') }}" class="rounded-circle"
                                 width="35" height="35" alt=""/>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                     aria-labelledby="drop1">
                    <div class="profile-dropdown position-relative" data-simplebar>
                        <div class="py-3 px-7 pb-0">
                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                        </div>
                        <div class="d-flex align-items-center py-9 mx-7">
                            <img src="{{ asset('avatar.jpg') }}" class="rounded-circle"
                                 width="80" height="80" alt=""/>
                            <div class="ms-3">
                                <h5 class="mb-1 fs-3">{{ auth()->user()->name }}</h5>
                                <span
                                    class="mb-1 d-block text-dark">{{ auth()->user()->username }}</span>
                                <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                    <i class="ti ti-mail fs-4"></i> {{ auth()->user()->email ?? '' }}
                                </p>
                            </div>
                        </div>
                        <div class="message-body">
                            <a href="{{ route('user.profile') }}" class="py-8 px-7 mt-8 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img
                                  src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-account.svg"
                                  alt="" width="24" height="24">
                            </span>
                                <div class="w-75 d-inline-block v-middle ps-3">
                                    <h6 class="mb-1 bg-hover-primary fw-semibold"> Akun Saya</h6>
                                    <span class="d-block text-dark">Profil & Password</span>
                                </div>
                            </a>

                        </div>
                        <div class="d-grid py-4 px-7 pt-8">
                            <a class="btn btn-outline-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
