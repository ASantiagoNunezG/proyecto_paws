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
                    <div class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Productos</a>
                    </div>
                    

                    <div class="col-md-3 text-end">

                        <!-- Botón para abrir el modal si desea iniciar sesion -->
                        <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Iniciar Sesión
                        </button>

                        <!-- Botón para abrir el modal si desea registrarse -->
                        <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Registrarse
                        </button>
                    </div>
                </header>
            </div>
        </nav>

        <!-- Modal de Iniciar Sesion  -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Tu formulario de inicio de sesión -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <div>
                                <label for="email" class="form-label">{{ __('Correo Electronico') }}</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Ingresar contraseña -->
                            <div class="mt-4">
                                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- ------------------------------------------------------- --}}

        <!-- Modal de Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tu formulario de registro -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="form-label">{{ __('Nombre') }}</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>


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