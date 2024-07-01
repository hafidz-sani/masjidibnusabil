<header>
    <nav class="navbar navbar-b navbar-dark navbar-trans navbar-expand-xl fixed-top nav-padding" id="sidebar-menu"><a
            class="navbar-brand p-0" href="{{ route('home') }}"><img class="img-fluid" src="{{ asset('logo_dark.png') }}"
                alt=""></a>
        <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
            aria-label="Toggle navigation"><span></span><span></span><span></span></button>
        <div class="navbar-collapse justify-content-center collapse hidenav" id="navbarDefault">
            <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                <li class="nav-item"><a class="nav-link me-3" href="{{ route('profil') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link me-3" href="{{ route('agenda') }}">Agenda</a></li>
                <li class="nav-item"><a class="nav-link me-3" href="{{ route('photo') }}">Foto</a></li>
                <li class="nav-item"><a class="nav-link me-3" href="{{ route('video') }}">Video</a></li>
                <li class="nav-item"><a class="nav-link me-3" href="{{ route('kajian') }}">Kajian</a></li>
                <li class="nav-item"><a class="nav-link me-3" href="#landings">Keuangan</a></li>
            </ul>
        </div>
        @guest
            <div class="buy-btn rounded-pill">
                <a class="nav-link js-scroll" href="{{ route('login') }}">Login</a>
            </div>
        @endguest
        @auth
            <div class="d-flex">
                <a href="#" class="nav-link js-scroll btn btn-primary">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="ms-2">
                    {{ csrf_field() }}
                    <button class="nav-link js-scroll btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        @endauth
    </nav>
</header>
