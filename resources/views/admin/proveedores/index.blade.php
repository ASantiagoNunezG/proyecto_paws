@extends('layouts.master')

@section('title','Proveedores')
@section('content')
    <div class="container">
        <a href="{{route('administrador')}}">Volver</a>
        <h2>Consulta de Proveedores</h2>
        <form action="{{ route('proveedores.buscar') }}" method="GET">
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
        @else
            <p>No se encontraron resultados.</p>
        @endif
    </div>
@endsection
