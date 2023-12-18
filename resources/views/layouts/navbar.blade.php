<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon"/>

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
        <nav class="fixed-top" id="cabecera">
            <div class="container">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <h1 class="fs-2 fw-bold text-white" id="navbar-title" href="#">PAWS</h1>
                    </div>
            
                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{ route('usuario') }}" class="nav-link fs-5 text-light fw-semibold">Inicio</a></li>
                        <li><a href="{{ route('producto.index') }}" class="nav-link fs-5 text-light fw-semibold">Productos</a></li>                        
                        <li><a href="{{ route('adopcion.index') }}" class="nav-link fs-5 text-light fw-semibold">Adopta</a></li>
                        <li><a href="{{ route('nosotros') }}" class="nav-link fs-5 text-light fw-semibold">Nosotros</a></li>
                    </ul>

                    <div class="dropdown col-md-3 text-end">
                        <button class="btn bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-white">
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

    {{-- PIE DE PAGINA --}}

    <div id="footer" class="text-light py-5 mt-5">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <!-- Logo -->
                <div class="col mb-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo PAWS" class="img-fluid">
                </div>
    
                <!-- Contáctanos -->
                <div class="col mb-3">
                    <h5 class="fw-bold text-decoration-underline">Contáctanos</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mt-2">MIRAFLORES</li>
                        <li class="nav-item mt-2">Teléfono: (01) 236-5789</li>
                        <li class="nav-item">WhatsApp: +51 986-452-364</li>
                    </ul>
                </div>
    
                <!-- Horarios de atención -->
                <div class="col mb-3">
                    <h5 class="fw-bold text-decoration-underline">Horarios de atención</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">SEDE MIRAFLORES</li>
                    </ul>
                    <ul>
                        <li>Lunes - Viernes: 10am a 6pm</li>
                        <li>Sábado: 11am a 3pm</li>
                        <li>Domingo: Cerrado</li>
                    </ul>
                </div>
    
                <!-- Síguenos -->
                <div class="col mb-3">
                    <h5 class="fw-bold text-decoration-underline">Síguenos</h5>
                    <a class="bi bi-facebook text-light" style="font-size: 40px; margin-right: 15px;" href="https://www.facebook.com/groups/2667833180158982" target="_blank"></a>
                    <a class="bi bi-instagram text-light" style="font-size: 40px;" href="https://www.instagram.com/petsland.pe/" target="_blank"></a>
                </div>
            </footer>
    
            <!-- Derechos Reservados -->
            <div class="d-flex justify-content-between py-3 border-top">
                <p class="text-light">&copy; 2023 PAWS - VETERINARIOS ESPECIALISTAS - DERECHOS RESERVADOS</p>
            </div>
        </div>
    </div>
    

</html>