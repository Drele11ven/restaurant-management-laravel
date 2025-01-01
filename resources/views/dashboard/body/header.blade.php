<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
               href="javascript:void(0)"></a>
            <!-- sidebar-toggle
            <a class="logo-horizontal" href="index.html">
                <img alt="logo" class="header-brand-img desktop-logo" height="40"
                     src="{{asset('../assets/images/logo/logo-wide.png')}}">
                <img alt="logo" class="header-brand-img light-logo1" height="35"
                     src="{{asset('../assets/images/logo/logo-wide.png')}}">
            </a>-->
            <!-- LOGO -->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <div class="dropdown d-flex profile-1">
                    <a class="nav-link leading-none d-flex" data-bs-toggle="dropdown"
                       href="javascript:void(0)">
                        <img alt="profile-user" class="avatar  profile-user brround cover-image"
                             src="{{asset('../assets/images/users/plc-user.jpg')}}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ Auth::user()->name }}</h5>
                                <small class="text-muted">{{ Auth::user()->phone_number }}</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <!--
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> پروفایل
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-mail"></i> صندوق ورودی
                            <span class="badge bg-danger rounded-pill float-end">5</span>
                        </a>-->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon fe fe-alert-circle"></i> خروج از سیستم
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









