@extends('layouts.navbar')

@section('content')

<link rel="stylesheet" href="{{ asset('css/sindell.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    body {
        background-color: #f2f2f2; /* Color de fondo gris claro */
    }
  </style>

<div class="container">
    <H2 class="">Hola</H2>
    <h2 class="text-center mt-5 subtitulo">MISIÓN</h2>
    <div class="row mt-5">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/mision.png') }}" alt="Imagen Misión" class="img-fluid rounded sobre-nosotros-img">
        </div>
        <div class="col-md-6 sobre-nosotros-text order-md-1">
            <p>Nuestra misión es salvar y mejorar vidas, proporcionando refugio, atención médica y amor a cada animal que llega a nuestras instalaciones. Nos comprometemos a:</p>
            <ul>
                <li>Rescatar y rehabilitar animales en situaciones de abandono o maltrato.</li>
                <li>Encontrar hogares permanentes y amorosos para todas nuestras mascotas.</li>
                <li>Concientizar sobre la importancia de la adopción y el cuidado responsable de los animales.</li>
                <li>Trabajar con la comunidad para construir un mundo más compasivo para todos los seres vivos.</li>
            </ul>
            <p>Creemos que cada adopción exitosa es una historia de esperanza, superación y amor, y estamos dedicados a trabajar hacia un futuro donde cada mascota tenga la oportunidad de vivir una vida plena y feliz.</p>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="text-center mt-5 subtitulo">VISIÓN</h2>
    <div class="row mt-5">
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('images/vision.png') }}" alt="Imagen Sobre Nosotros" class="img-fluid rounded sobre-nosotros-img">
        </div>
        <div class="col-md-6 sobre-nosotros-text order-md-2">
            <p>Nuestra visión es construir un mundo donde cada mascota tenga un hogar amoroso. Desde nuestra fundación en el año 2018, nos hemos dedicado a rescatar y brindar cuidado a mascotas sin hogar, trabajando para asegurar que cada una de ellas encuentre un lugar donde sea querida y cuidada.</p>
            <p>Buscamos ser líderes en la promoción de la adopción responsable y en la concientización sobre el bienestar animal. Nos esforzamos por crear una comunidad comprometida con el cuidado y respeto hacia todas las formas de vida.</p>
        </div>
    </div>
</div>


<div class="container">
    <h2 class="text-center mt-5 subtitulo">FUNDADORES DE LA COMPAÑÍA</h2>
    <div class="row mt-5">
      <div class="col-lg-4 text-center asistente " id="fundador-1">
        <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ asset('images/asistente1.avif') }}" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h4 class="fw-normal mt-3">Sindell Perez</h4>
        <p>Dedica su tiempo incansablemente para brindar amor y atención segura a mascotas desfavorecidas. Su pasión y conocimientos contribuyen significativamente al rescate y rehabilitación exitosa de animales, demostrando un valioso compromiso con la causa del bienestar animal.</p>
      </div>
      <div class="col-lg-4 text-center asistente" id="fundador-2">
        <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ asset('images/asistente2.jpg') }}" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h4 class="fw-normal mt-3">Abraham Nuñez</h4>
        <p>Dedicado voluntario en rescate de mascotas, con formación sólida en cuidado animal. Comprometido en proporcionar ayuda a animales necesitados, ofreciendo atención médica, rehabilitación emocional y buscando hogares amorosos para adopción.</p>
      </div>
      <div class="col-lg-4 text-center asistente" id="fundador-3">
        <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="{{ asset('images/asistente3.jpg') }}" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h4 class="fw-normal mt-3">Jean Huaman</h4>
        <p>Entusiasta voluntario en rescate y cuidado de mascotas, con sólida formación en bienestar animal. Dedicado y comprometido a proporcionar cuidados compasivos, atención médica y afecto a animales que han enfrentado desafíos.</p>
      </div>
    </div>
</div>
@endsection