<!--====== Start Header ======-->
<header class="header-area">
    <!--=== Header Navigation ===-->
    <div class="header-navigation default-navigation">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <!--=== Primary Menu ===-->
            <div class="primary-menu">
                <!--=== Site Branding ===-->
                <div class="site-branding">
                    <a href="index.html" class="brand-logo"><img src="{{  asset('user/assets/images/logo/logoo-putih.png')}}" alt="Site Logo"></a>
                </div>
                <!--=== Nav Inner Menu ===-->
                <div class="nav-menu">
                    <!--=== Mobile Logo ===-->
                    <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                        <a href="index.html" class="brand-logo"><img src="{{  asset('user/assets/images/logo/logo-black.png')}}" alt="Site Logo"></a>
                    </div>
                    <!--=== Main Menu ===-->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--=== Nav right Item ===-->
                <div class="nav-right-item d-flex align-items-center">
                    <div class="menu-button d-xl-block d-none">
                        <button class="main-btn btn-green" data-bs-toggle="modal" data-bs-target="#stuntingModal">Check now<i class="far fa-angle-double-right"></i></button>
                    </div>
                    <div class="navbar-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header ======-->