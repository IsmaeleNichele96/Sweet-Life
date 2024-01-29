<nav class="navbar navbar-expand-lg bg-body-tertiary navbarsize">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chi Siamo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Caramelle
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Gommose</a></li>
                        <li><a class="dropdown-item" href="#">Dure</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Liquirizie</a></li>
                    </ul>
                </li>
            </ul>
            <li class="nav-item d-flex mr-auto">
                <a class="nav-link" href="{{ route('login') }}">Accedi / </a>
                <a class="nav-link me-2" href="{{ route('register') }}">&nbsp Registrati</a>
            </li>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>