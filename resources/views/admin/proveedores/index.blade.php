@extends('layouts.master')

@section('title','Proveedores')
@section('content')
    <div class="container">
        <h2>Consulta de Proveedores</h2>

        <form action="{{ route('proveedores.index') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar por nombre" name="nombre" value="{{ request('nombre') }}">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>

        @if ($proveedores->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>RUC</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>{{ $proveedor->nombre }}</td>
                            <td>{{ $proveedor->ruc }}</td>
                            <td>{{ $proveedor->telefono }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $proveedores->links() }} <!-- Mostrar la paginación -->
        @else
            <p>No se encontraron resultados.</p>
        @endif
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
@endsection
