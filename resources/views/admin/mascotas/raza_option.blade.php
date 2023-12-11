@foreach ($razas as $raza)
    <option value="{{ $raza->id_raza }}">{{ $raza->nombre }}</option>
@endforeach
