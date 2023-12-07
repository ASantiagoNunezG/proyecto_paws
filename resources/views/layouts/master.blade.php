<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Área de Administrador - PAWS</title>

    <!-- Scripts -->

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
                        <li><a href="{{'/'}}" class="nav-link fs-5 text-light">Inicio</a></li>
                        /*<li><a href="/administrador/mascota" class="nav-link fs-5 text-light">Mascotas</a></li>
                        <li><a href="/administrador/productos" class="nav-link fs-5 text-light">Productos</a></li>
                        <li><a href="{{route('proveedores.index')}}" class="nav-link fs-5 text-light">Proveedores</a></li>*/
                        
                    </ul>

                    <div class="col-md-3 text-end">
                        @guest
                            @if (Route::has('login'))
                                <button type="button" class="btn btn-outline-light me-2">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </button>
                            @endif

                            @if (Route::has('register'))     
                                <button type="button" class="btn btn-light">             
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </button>
                            @endif

                            @if(Auth::check())
                            <li class="nav-item dropdown">
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </button>
                        
                                    <div class="dropdown-content">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a href="">Perfil</a>
                                        <a href="">Mis mascotas</a>
                                        <a href="">Mis citas</a>
                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                            @endif
                        @endguest
                    </div>
                </header>
            </div>
        </nav>
        <div style="text-align: center" class="container mt-4">
          <hr>
          
          <div class="mi-div-con-estilo border border-dark bg-white p-3" style="text-align: left">
            <main class="py-4">
              @yield('content')
          </main>
          </div>
          <hr>
        </div>
       
        
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
<footer id="footer">
  <div class="d-flex flex-column flex-sm-row justify-content-center py-3 my-3 border-top" >
    <p class="text-light">&copy; 2023 PAWS - VETERINARIOS ESPECIALISTAS - DERECHOS RESERVADOS</p>
  </div> 
</footer>
</html>


