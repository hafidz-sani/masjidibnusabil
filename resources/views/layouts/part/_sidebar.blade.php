<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="mt-3 d-flex justify-content-center"><a href="{{ route('home') }}"><img class="img-fluid for-light"
                    width="80px" src="{{ asset('images/logo_masjid.png') }}" alt=""><img
                    class="img-fluid for-dark" src="{{ asset('images/logo_masjid.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('logo_icon.png') }}"
                    alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{ asset('logo_icon.png') }}"
                                alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>

                    {{-- START GENERAL --}}
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{ route('home') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#fill-home') }}">
                                </use>
                            </svg><span>Beranda</span></a>
                    </li>
                    {{-- END GENERAL --}}

                    {{-- START ADMIN --}}
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Menu Admin</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <!-- <a class="sidebar-link sidebar-title link-nav" 
                            href="{{ route('dashboard.admin.users.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#fill-home') }}">
                                </use>
                            </svg>
                            <span>Manajemen Users</span>
                        </a> -->
                        <a class="sidebar-link sidebar-title link-nav" 
                            href="{{ route('dashboard.admin.gallery.index') }}">
                            <!-- <svg class="stroke-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#fill-home') }}">
                                </use>
                            </svg> -->
                            <span>Manajemen Galeri</span>
                        </a>
                        <a class="sidebar-link sidebar-title link-nav" 
                            href="{{ route('dashboard.admin.finance.index') }}">
                            <!-- <svg class="stroke-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#fill-home') }}">
                                </use>
                            </svg> -->
                            <span>Manajemen Keuangan</span>
                        </a>
                        <a class="sidebar-link sidebar-title link-nav" 
                            href="{{ route('dashboard.admin.lecture.index') }}">
                            <!-- <svg class="stroke-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#fill-home') }}">
                                </use>
                            </svg> -->
                            <span>Manajemen Kajian</span>
                        </a>
                        <a class="sidebar-link sidebar-title link-nav" 
                            href="{{ route('dashboard.admin.person.index') }}">
                            <!-- <svg class="stroke-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#fill-home') }}">
                                </use>
                            </svg> -->
                            <span>Manajemen Data Jamaah</span>
                        </a>
                        <a class="sidebar-link sidebar-title link-nav" 
                            href="{{ route('dashboard.admin.event.index') }}">
                            <!-- <svg class="stroke-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}">
                                </use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#fill-home') }}">
                                </use>
                            </svg> -->
                            <span>Manajemen Agenda</span>
                        </a>
                        
                    </li>
                    {{-- END ADMIN --}}
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
