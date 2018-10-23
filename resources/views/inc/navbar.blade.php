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
                        <a class="dropdown-item" href="/teachings/richman-poorman">Rich Man - Poor Man Tension in Society</a>
                        <a class="dropdown-item" href="/teachings/meager-desire">The Meager Desire of the Poor</a>
                        <a class="dropdown-item" href="/teachings/never-despise-the-least">Never Despise the Least</a>
                        <a class="dropdown-item" href="/teachings/funds-from-small-contributions">Funds from Small Contributions</a>
                        <a class="dropdown-item" href="/teachings/sacrament-of-the-small">The Sacrament of the Small</a>
                        <a class="dropdown-item" href="/teachings/christian-charity-of-the-batangueno">Christian Charity of the Batangueño</a>
                        <a class="dropdown-item" href="/teachings/a-way-to-love-a-way-of-life">a Way to Love, a Way of Life</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{{ (Request::is('programs') ? 'active' : '') }}}" href="/programs">Programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{{ (Request::is('news') ? 'active' : '') }}}" href="/news">Ulat Batangan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

