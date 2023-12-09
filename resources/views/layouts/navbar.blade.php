<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!--Estilos-->

        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <title>PAWS</title>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </head>
    <body>
    {{-- ---------------------------------CABECERA--------------------------- --}}

    <div id="app">
        <nav class="" id="cabecera">
            <div class="container">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <h1 class="navbar-brand fs-2 fw-bold" href="#">PAWS</h1>
                    </div>
            
                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{ route('usuario') }}" class="nav-link fs-5 text-light">Inicio</a></li>
                        <li><a href="" class="nav-link fs-5 text-light">Productos</a></li>
                        <li><a href="" class="nav-link fs-5 text-light">Servicios</a></li>
                        <li><a href="{{ route('adopcion.index') }}" class="nav-link fs-5 text-light">Adopta</a></li>
                        <li><a href="#" class="nav-link fs-5 text-light">Nosotros</a></li>
                    </ul>

                    <div class="dropdown col-md-3 text-end">
                        <button class="btn bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                Mi cuenta
                            </a>
                            <li><a class="dropdown-item" href="#">Mis mascotas</a></li>
                            <li><a class="dropdown-item" href="#">Mis citas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </header>
            </div>
        </nav>
        <main class="">
            @yield('content')
        </main>
    </div>
    

    
    </body>
    {{-- ---------------------------------FOOTER--------------------------- --}}
    <div class="" id="footer">
        <div class="container" id="footer">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3 ">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid" style="max-width: 100%;">
                </div>
      
                <div class="col mb-3">
                    <h5 class="fw-bold text-light text-decoration-underline">Contáctanos</h5>
                    <ul class="nav flex-column text-light">
                        <li class="nav-item mt-2">MIRAFLORES</li>
                        <li class="nav-item mt-2">Teléfono: (01) 236-5789</li>
                        <li class="nav-item ">Whatssap: +51 986-452-364</li>
                    </ul>
                </div>
                <div class="col mb-3">
                    <h5 class="fw-bold text-light text-decoration-underline">Horarios de atención</h5>
                    <ul class="nav flex-column text-light mt-3">
                        <li class="nav-item mb-2">SEDE MIRAFLORES</li>
                    </ul>
                    <ul class="text-light">
                        <li>Lunes - Viernes : 10am a 6pm</li>
                        <li>Sábado: 11am a 3pm</li>
                        <li>Domingo</li>
                    </ul>
                </div>
                <div class="col mb-3">
                    <h5 class="fw-bold text-light text-decoration-underline">Síguenos</h5>
                    <i class="bi bi-facebook text-light" style="font-size: 40px; margin-right: 15px;"></i>
                    <i class="bi bi-instagram text-light" style="font-size: 40px;"></i>
                </div>
            </footer>
            <div class="d-flex flex-column flex-sm-row justify-content-center py-3 my-3 border-top">
                <p class="text-light">&copy; 2023 PAWS - VETERINARIOS ESPECIALISTAS - DERECHOS RESERVADOS</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                </ul>
            </div>            
        </div>
    </div>

</html>