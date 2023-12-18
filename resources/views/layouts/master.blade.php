<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/abraham.css') }}">
    <title>@yield('title', 'Administrador - PAWS')</title>
</head>

<body class="fondo-body d-flex flex-column min-vh-100 " style="background-image: url('{{asset('images/admin/paws2.png')}}')">

    <div>
        @include('layouts.nav_master')
    </div>

    <div class="container mt-4" style="margin-bottom: 100px">
        <div class="mi-div-con-estilo border border-dark bg-white p-3" >
            @if (session('success'))
                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            setTimeout(function() {
                                var alert = document.getElementById('success-alert');
                                alert.classList.add('fade');
                                alert.classList.remove('show');

                                // Elimina la alerta después de la animación de desvanecimiento
                                setTimeout(function() {
                                    alert.remove();
                                }, 150); // Ajusta este valor según sea necesario
                            }, 3000); // 5000 milisegundos = 5 segundos
                        });
                    </script>
                </div>
            @endif
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
<footer style="color: white">
    <p>&copy; 2023 PAWS - VETERINARIOS ESPECIALISTAS - DERECHOS RESERVADOS</p>
</footer>

</html>
