@if(count($usuarios) > 0)
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario->name }} - {{ $usuario->email }}</li>
        @endforeach
    </ul>
@else
    <p>No se encontraron usuarios</p>
@endif