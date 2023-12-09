@extends('layouts.cabecera')
@section('content')


<div class="contenedor-imagen">
  <img src="{{ asset('images/fondo.png') }}" alt="" class="imagen-fondo">
  <div class="contenido">
      <h1 class="fw-bold">¿Te gustan los animales?</h1>
      <h3>Ayudalos a encontrar un hogar</h3>
      <a href="#" class="btn btn-secondary mt-3">Adopta hoy</a>
  </div>
</div>
<section class="mt-5 contenedor-mascotas">
  <h2 class="text-center">MASCOTAS</h2>
  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card shadow-sm efecto-levantamiento">
              <img src="{{ asset('images/fondo.png') }}" alt="" height="200">
              <div class="card-body">
                  <h3 class="text-center">Pepita</h3>
                  <h6>Sexo: Hembra</h6>
                  <h6>Edad: 8 meses</h6>
                  <div class="d-flex justify-content-center align-items-center mt-3">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Adoptar</button>
                  </div>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm efecto-levantamiento">
              <img src="{{ asset('images/fondo.png') }}" alt="" height="200">
              <div class="card-body">
                  <h3 class="text-center">Pepita</h3>
                  <h6>Sexo: Hembra</h6>
                  <h6>Edad: 8 meses</h6>
                  <div class="d-flex justify-content-center align-items-center mt-3">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Adoptar</button>
                  </div>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm efecto-levantamiento">
              <img src="{{ asset('images/fondo.png') }}" alt="" height="200">
              <div class="card-body">
                  <h3 class="text-center">Pepita</h3>
                  <h6>Sexo: Hembra</h6>
                  <h6>Edad: 8 meses</h6>
                  <div class="d-flex justify-content-center align-items-center mt-3">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Adoptar</button>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 col-3 mx-auto mt-5">
      <button class="btn btn-secondary btn-md" type="button">Ver más</button>
    </div>
</section>
<section class="mt-3 contenedor-mascotas">
  <h2 class="text-center">NUESTROS PRODUCTOS</h2>
  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        <div class="col">
          <div class="card shadow-sm efecto-levantamiento">
              <img src="{{ asset('images/fondo.png') }}" alt="" height="200">
              <div class="card-body">
                  <h6 class="fw-bold">RICOCAN</h6>
                  <p>Saco de 15kg para perros grandes</p>
                  <p class="text-end fw-semibold">S/25.00</p>
                  <div class="d-flex justify-content-center align-items-center">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
                  </div>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm efecto-levantamiento">
              <img src="{{ asset('images/fondo.png') }}" alt="" height="200">
              <div class="card-body">
                  <h6 class="fw-bold">RICOCAN</h6>
                  <p>Saco de 15kg para perros grandes</p>
                  <p class="text-end fw-semibold">S/25.00</p>
                  <div class="d-flex justify-content-center align-items-center">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
                  </div>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm efecto-levantamiento">
              <img src="{{ asset('images/fondo.png') }}" alt="" height="200">
              <div class="card-body">
                  <h6 class="fw-bold">RICOCAN</h6>
                  <p>Saco de 15kg para perros grandes</p>
                  <p class="text-end fw-semibold">S/25.00</p>
                  <div class="d-flex justify-content-center align-items-center">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
                  </div>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm efecto-levantamiento">
              <img src="{{ asset('images/fondo.png') }}" alt="" height="200">
              <div class="card-body">
                  <h6 class="fw-bold">RICOCAN</h6>
                  <p>Saco de 15kg para perros grandes</p>
                  <p class="text-end fw-semibold">S/25.00</p>
                  <div class="d-flex justify-content-center align-items-center">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2 col-3 mx-auto mt-3">
    <button class="btn btn-secondary btn-md" type="button">Ver más</button>
  </div>
</section>
<section class="mt-5">
  <h2 class="text-center">NUESTROS SERVICIOS</h2>
  <div class="album py-5 ">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-md servicio-card">
            <img src="{{ asset('images/logo.png') }}" alt="" class="servicio-imagen" >
            <div class="card-body">
              <h3 class="text-center">Rehabilitación</h3>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-md servicio-card">
            <img src="{{ asset('images/logo.png') }}" alt="" class="servicio-imagen" >
            <div class="card-body">
              <h3 class="text-center">Rehabilitación</h3>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-md servicio-card">
            <img src="{{ asset('images/logo.png') }}" alt="" class="servicio-imagen" >
            <div class="card-body">
              <h3 class="text-center">Rehabilitación</h3>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-md servicio-card">
            <img src="{{ asset('images/logo.png') }}" alt="" class="servicio-imagen" >
            <div class="card-body">
              <h3 class="text-center">Rehabilitación</h3>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-md servicio-card">
            <img src="{{ asset('images/logo.png') }}" alt="" class="servicio-imagen" >
            <div class="card-body">
              <h3 class="text-center">Rehabilitación</h3>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-md servicio-card">
            <img src="{{ asset('images/logo.png') }}" alt="" class="servicio-imagen" >
            <div class="card-body">
              <h3 class="text-center">Rehabilitación</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
