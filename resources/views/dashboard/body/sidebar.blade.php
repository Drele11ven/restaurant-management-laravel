<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('index')}}">
                <img alt="logo" class="header-brand-img desktop-logo" src="{{asset('../assets/images/logo/logo-wide.png')}}">
                <img alt="logo" class="header-brand-img toggle-logo" src="{{asset('../assets/images/logo/logo-square.png')}}">
                <img alt="logo" class="header-brand-img light-logo" src="{{asset('../assets/images/logo/logo-square.png')}}">
                <img alt="logo" class="header-brand-img light-logo1" src="{{asset('../assets/images/logo/logo-wide.png')}}">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg fill="#7b8191" height="24" viewBox="0 0 24 24" width="24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/>
                </svg>
            </div>

            @php
                use Illuminate\Support\Facades\Auth;
                // Check the authenticated user's role
                $roleName = Auth::user()->role;
            @endphp
            @if($roleName === 'Admin')
                <!-- for Admin -->
                <ul class="side-menu">
                    <li class="sub-category">
                        <h3>اصلی admin</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboard')}}"><i
                                class="side-menu__icon fe fe-home"></i><span class="side-menu__label">داشبورد</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('index')}}"><i
                                class="side-menu__icon fa fa-angellist"></i><span class="side-menu__label">کما</span></a>
                    </li>

                </ul>
                <!-- END -->
            @elseif($roleName === 'Restaurant Manager')
                <!-- for Organization Admin -->
                <ul class="side-menu">
                    <li class="sub-category">
                        <h3>اصلی rst</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboard')}}"><i
                                class="side-menu__icon fe fe-home"></i><span class="side-menu__label">داشبورد</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('index')}}"><i
                                class="side-menu__icon fa fa-angellist"></i><span class="side-menu__label">کما</span></a>
                    </li>
                </ul>
                <!-- END -->
            @elseif($roleName === 'Customer')
                    <!-- for User -->
                <ul class="side-menu">
                    <li class="sub-category">
                        <h3>اصلی rst</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboard')}}"><i
                                class="side-menu__icon fe fe-home"></i><span class="side-menu__label">داشبورد</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('index')}}"><i
                                class="side-menu__icon fa fa-angellist"></i><span class="side-menu__label">کما</span></a>
                    </li>
                </ul>
                <!-- END -->
            @else
                <!-- Default section -->
                <div class="alert alert-warning">شما دسترسی لازم را برای مشاهده این بخش ندارید.</div>
            @endif


            <div class="slide-right" id="slide-right">
                <svg fill="#7b8191" height="24" viewBox="0 0 24 24" width="24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/>
                </svg>
            </div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>









