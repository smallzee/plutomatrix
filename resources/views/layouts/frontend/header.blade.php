
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
                                <li class="menu-item menu-item-has-children current-menu-item">
                                    <a href="#">Home Page</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Blog Page</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-v1.html">Blog Style 01</a></li>
                                        <li class="menu-item"><a href="blog-v2.html">Blog Style 02</a></li>
                                        <li class="menu-item"><a href="blog-v3.html">Blog Style 03</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="connect-wallet.html">Connect Wallet</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Elements</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item"><a href="features.html">Features</a></li>
                                        <li class="menu-item"><a href="roadmap.html">Road Map</a></li>
                                        <li class="menu-item"><a href="document.html">Documents</a></li>
                                        <li class="menu-item"><a href="our-team.html">Our Team</a></li>
                                        <li class="menu-item"><a href="partner.html">Partner</a></li>
                                        <li class="menu-item"><a href="token-sales.html">Token Sale</a></li>
                                        <li class="menu-item"><a href="button.html">Button</a></li>

                                        <li class="menu-item"><a href="footer.html">Footer</a></li>

                                        <li class="menu-item"><a href="faq.html">Faq</a></li>
                                        <li class="menu-item"><a href="icon.html">Icon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="sign-in.html">Sign In</a></li>
                                        <li class="menu-item"><a href="sign-up.html">Sign Up</a></li>
                                        <li class="menu-item"><a href="page-404.html">Page 404</a></li>
                                        <li class="menu-item"><a href="comingsoon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="group-button">
                            <a class="btn-action" href="sign-in.html">
                                <span>LOGIN</span>
                            </a>
                        </div>
                        <div class="mobile-button"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end Header -->
