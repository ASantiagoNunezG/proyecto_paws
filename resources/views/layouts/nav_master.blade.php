<nav class="navbar navbar-expand-lg navbar-light" id="cabecera" style="background-color: #744253;">
    <div class="container" >
        <div class="col-md-3 mb-2 mb-md-0 d-flex align-items-center">
            <a href="{{ '/' }}" class="text-decoration-none">
                <img src="{{ asset('images/admin/paws_logo_arriba.png') }}" alt="" style="max-height: 100px;">
            </a>
        </div>
        <div class="col-md-6 mb-2 mb-md-0 d-flex justify-content-center">
            <div class="border p-2 text-center" >
                <a href="{{ route('administrador') }}" class="nav-link fs-5 text-light text-decoration-none" >
                    <img src="{{ asset('images/admin/administrador_nav.png') }}" alt="" style="max-height: 40px;">
                    PANEL DE ADMINISTRACIÓN
                    <img src="{{ asset('images/admin/administrador_nav.png') }}" alt="" style="max-height: 40px;">
                </a>
            </div>
        </div>
        <div class="col-md-3 mb-2 mb-md-0 d-flex justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Responsive Settings Options -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown" style="border: 1px solid white">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border: 1px solid #ddd;">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
