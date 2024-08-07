<!-- Header -->
<header id="header_main" class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__body">
                    <div class="header__logo">
                        <a href="{{url('/')}}">
                            <img id="site-logo" src="{{static_asset('logo.png')}}"
                                 alt="{{config('app.name')}}" width="165" height="70"
                                 data-retina="{{static_asset('logo.png')}}" data-width="165"
                                 data-height="70">
                        </a>
                    </div>

                    <div class="header__right">
                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{url('services')}}">Our Service</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{url('packages')}}">Packages</a>
                                </li>

                               @if(!auth()->check())
                                    <li class="menu-item">
                                        <a href="{{route('register')}}">Register</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{route('login')}}">Login</a>
                                    </li>
                               @endif

                                @if(auth()->check())
                                    <li class="menu-item">
                                        <a href="{{url('user/dashboard')}}">Dashboard</a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                        <div class="mobile-button"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end Header -->

