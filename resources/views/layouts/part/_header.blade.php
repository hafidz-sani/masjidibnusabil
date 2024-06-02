<!-- Page Header Start-->
<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('logo.png') }}"
                        alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div class="notification-slider">
                <div class="d-flex h-100"> <img src="{{ asset('cuba/assets/images/giftools.gif') }}" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="font-primary">Don't Miss Out! </span><span class="f-light">Out
                            new update has been release.</span></h6><i class="icon-arrow-top-right f-light"></i>
                </div>
                <div class="d-flex h-100"><img src="{{ asset('cuba/assets/images/giftools.gif') }}" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="f-light">Something you love is now on sale! </span>
                    </h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
                </div>
            </div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                <li>
                    <div class="mode">
                        <svg>
                            <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#moon') }}"></use>
                        </svg>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box">
                        <svg>
                            <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#notification') }}"></use>
                        </svg>
                        <!-- <span class="badge rounded-pill badge-secondary">4 </span> -->
                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Notitications</h6>
                        <ul>
                            <li><a class="f-w-700" href="#">Lihat Semua</a></li>
                        </ul>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="media profile-media"><img class="b-r-10"
                            src="{{ asset('cuba/assets/images/dashboard/profile.png') }}" alt="">
                        <div class="media-body"><span>{{ Auth::user()->name }}</span>
                            <p class="mb-0">{{ Auth::user()->name }} <i class="middle fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    data-feather="log-in"> </i><span>Log out</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Header Ends-->
