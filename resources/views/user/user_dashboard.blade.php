@extends('layouts.navbar')

@section('content')

<link rel="stylesheet" href="{{ asset('css/sindell.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
  body {
      background-color: #f2f2f2; /* Color de fondo gris claro */
  }
</style>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="bd-placeholder-img" width="100%" height="600" src="{{ asset('images/carrusel1.png') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>¡Encuentra a tu Compañero Peludo Hoy!</h1>
          <h6>Salva una vida y añade amor a tu hogar adoptando a una mascota. Descubre la alegría de la compañía leal.</h6>
          <p><a class="btn btn-lg btn-primary mt-3" id="btn-2" href="#">¡Ver Mascotas Disponibles!</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="600" src="{{ asset('images/carrusel3.png') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
      <div class="container">
        <div class="carousel-caption">
          <h1>Explora y Adquiere</h1>
          <h6>Descubre nuestra variedad de productos de alta calidad. Encuentra lo que necesitas para hacer la vida de tu mascota más especial.</h6>
          <p><a class="btn btn-lg btn-primary mt-3" id="btn-2" href="#">Explora nuestra Colección</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="600" src="{{ asset('images/carrusel5.jpg') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Conoce Nuestra Pasión por el Rescate Animal</h1>
          <h6>Descubre la historia detrás de PAWS y cómo nuestra dedicación al rescate y cuidado de mascotas ha cambiado vidas. Únete a nosotros en nuestra misión de brindar amor y un hogar a aquellos que más lo necesitan.</h6>
          <p><a class="btn btn-lg btn-primary btn-carrusel mt-3" id="btn-2" href="#">Descubre Más</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <h2 class="text-center mt-5 subtitulo">SOBRE NOSOTROS</h2>
  
  <div class="row mt-5">
    <div class="col-md-6">
      <img src="{{ asset('images/fondo.png') }}" alt="Imagen Sobre Nosotros" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <p>Somos una organización dedicada al bienestar de los animales. Desde nuestra fundación en el año 2018, nos hemos comprometido a rescatar y encontrar hogares amorosos para mascotas sin hogar.</p>
      <p>Nuestra misión es proporcionar un refugio seguro, atención médica y cariño a cada animal que llega a nuestras instalaciones. Trabajamos arduamente para concientizar a la comunidad sobre la importancia de la adopción y el cuidado responsable de las mascotas.</p>
      <p>Detrás de cada adopción exitosa hay historias de esperanza, superación y amor. Cada miembro de nuestro equipo comparte la misma pasión por mejorar la vida de los animales y trabajar hacia un futuro donde cada mascota tenga un hogar feliz.</p>
    </div>
  </div>
</div>

<div class="container">
  <h2 class="text-center mt-5 subtitulo">NUESTROS MEJORES ASISTENTES</h2>
  <div class="row mt-5">
    <div class="col-lg-4 text-center asistente" id="fundador-1">
      <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ asset('images/asistente1.avif') }}" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
      <h4 class="fw-normal mt-3">Sindell Perez</h4>
      <p>Dedica su tiempo incansablemente para brindar amor y atención segura a mascotas desfavorecidas. Su pasión y conocimientos contribuyen significativamente al rescate y rehabilitación exitosa de animales, demostrando un valioso compromiso con la causa del bienestar animal.</p>
    </div>
    <div class="col-lg-4 text-center asistente" id="fundador-2">
      <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ asset('images/asistente2.jpg') }}" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
      <h4 class="fw-normal mt-3">Abraham Nuñez</h4>
      <p>Dedicado voluntario en rescate de mascotas, con formación sólida en cuidado animal. Comprometido en proporcionar ayuda a animales necesitados, ofreciendo atención médica, rehabilitación emocional y buscando hogares amorosos para adopción.</p>
    </div>
    <div class="col-lg-4 text-center asistente" id="fundador-3">
      <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ asset('images/asistente3.jpg') }}" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
      <h4 class="fw-normal mt-3">Jean Huaman</h4>
      <p>Entusiasta voluntario en rescate y cuidado de mascotas, con sólida formación en bienestar animal. Dedicado y comprometido a proporcionar cuidados compasivos, atención médica y afecto a animales que han enfrentado desafíos.</p>
    </div>
  </div>
</div>
<section class="mt-5 contenedor-mascotas">
  <h2 class="text-center subtitulo">MASCOTAS</h2>
  <div class="container">
    <div class="row mt-5" id="listaMascotas">
      @foreach($mascotas as $mascota)
          <div class="col-md-3 mb-3">
              <div class="card" id="efecto-levantamiento">
                <img src="{{ asset($mascota->foto) }}" class="card-img-top img-fluid mascota-img" alt="Foto de la mascota">
                <div class="card-body">
                      <h4 class="card-title text-center">{{ $mascota->nombre }}</h4>
                      <h6>Tamaño: {{ $mascota->tamano }}</h6>
                      <h6>Edad: {{ $mascota->edad }}</h6>
                      <h6>Edad: {{ $mascota->sexo }}</h6>
                      <div class="d-grid gap-2 col-6 mx-auto mt-3">
                          @if($mascota->estadoMascota)
                                <a class="btn btn-primary btn-custom" id="btn-2" type="btn" href="{{ route('adopcion.show', $mascota->id_mascota) }}">{{ $mascota->estadoMascota->nombre }}</a>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
  </div>
    <div class="d-grid gap-2 col-3 mx-auto mt-5">
      <a href="{{ route('adopcion.index') }}" id="btn-2" type="btn" class="btn btn-primary">Ver más mascotas</a>
    </div>
</section>
    {{--FORMULARIO PARA CONTACTARSE--}}
    <div id="contacto">
      <div class="container mt-5">
          <div class="row">
              <div class="col-md-6 mt-">
                  <img src="{{ asset('images/fondo.png') }}" alt="" class="img-fluid rounded" style="height: 450px">
              </div>
              <div class="col-md-6" id="formularioDiv">
                  <h2 class="text-center mb-4 subtitulo">DÉJANOS UN MENSAJE</h2>
                  <form>
                      <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
                      </div>
                      <div class="form-group">
                          <label for="correo" class="mt-2">Correo Electrónico:</label>
                          <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico" required>
                      </div>
                      <div class="form-group">
                          <label for="telefono" class="mt-2">Número de Teléfono:</label>
                          <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su número de teléfono" required>
                      </div>
                      <div class="form-group">
                          <label for="mensaje" class="mt-2">Mensaje:</label>
                          <textarea class="form-control" id="mensaje" rows="4" placeholder="Ingrese su mensaje" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-block mt-3 text-white" id="btn-2">Enviar Mensaje</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <script>
    $(document).ready(function () {
        $('form').submit(function (e) {
            e.preventDefault(); // Evita que el formulario se envíe normalmente
            // Muestra la alerta de SweetAlert2
            Swal.fire({
                title: '¡Gracias!',
                text: 'Pronto nos pondremos en contacto con usted.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });

            // Limpia el formulario después de enviar el mensaje
            $(this)[0].reset();
        });
    });
</script>
@endsection
