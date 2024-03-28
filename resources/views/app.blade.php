<header class="header-area header-three">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('images/logo/img.png') }}" class="w-25" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">

                        <div class="main-menu text-right text-xl-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('/') }}">Accueil</a>
                                    </li>
                                    <li><a href="{{ route('cursus') }}">Cursus</a></li>

                                    <li >
                                        <a href="{{ route('news') }}">Actualités</a>
                                    </li>
                                    <li >
                                        <a href="{{ route('about') }}">À  propos</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
                        <div class="login">
                            <ul>
                                <li><a href="#" class="menu-tigger"><i class="fal fa-search"></i></a></li>
                                <li>
                                    <div class="second-header-btn">
                                        <a href="#" class="btn">Cours</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
