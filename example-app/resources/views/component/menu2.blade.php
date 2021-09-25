<nav class="navbar navbar-expand-lg navbar-light bg-success p-2">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto p-2">
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger m-2">Sair</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
