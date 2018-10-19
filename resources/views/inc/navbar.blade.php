<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">People of Pondong Batangan</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{{ (Request::is('about') ? 'active' : '') }}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{{ (Request::is('history') ? 'active' : '') }}}" href="/history">History</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{{ (Request::is('teachings/*') ? 'active' : '') }}}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Teachings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/teachings/richman-poorman">{{ $headTitle }}</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{{ (Request::is('programs') ? 'active' : '') }}}" href="/programs">Programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{{ (Request::is('news') ? 'active' : '') }}}" href="/news">News</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
