<nav class="navbar navbar-expand-lg navbarCustom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/Sweet-Life.png" height="40px" width="140px" alt="Logo">
        </a>
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
                    <a class="nav-link active" href="#">Chi Siamo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Caramelle
                    </a>
                    <ul class="dropdown-menu dropCustom">
                        <li><a class="dropdown-item" href="#">Gommose</a></li>
                        <li><a class="dropdown-item" href="#">Dure</a></li>
                        <li><a class="dropdown-item" href="#">Liquirizie</a></li>
                    </ul>
                </li>
            </ul>
            @guest
                <li class="nav-item d-flex mr-auto">
                    <a class="nav-link" href="{{ route('login') }}">Accedi / </a>
                    <a class="nav-link me-2" href="{{ route('register') }}">&nbsp Registrati</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-3" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropCustom" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/logout"
                                onclick="event.preventDefault(); getElementById('form-logout').submit();">Logout</a></li>
                        <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            @endguest
            <form class="d-flex" role="search">
                <input class="form-control me-2 searchCustom" type="search" placeholder="Cosa stai cercando?"
                    aria-label="Search">
                <button class="btn btnCustom" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>
