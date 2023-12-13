@extends('layouts.app')

@section('content')
<a href="{{ route('bookings.create') }}">Create new reservation</a>

<table>
    <thead>
        <tr>
            <th>Numero reserva</th>
            <th>Numero habitacion</th>
            <th>Id cliente</th>
            <th>Fecha Entrada</th>
            <th>Fecha Salida</th>
            <th>Estado</th>
            <th>nombre</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($reservas as $reservas)
            <tr>
                <td>{{ $reservas->nro_reserva }}</td>
                <td>{{ $reservas->nro_habitacion }}</td>
                <td>{{ $reservas->id_cliente }}</td>
                <td>{{ $reservas->fecha_entrada }}</td>
                <td>{{ $reservas->fecha_salida }}</td>
                <td>{{ $reservas->estado }}</td>
                <td>{{ $reservas->customer ? $reservas->customer->nombre : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('bookings.shows', $reservas->id) }}">Ver</a>
                    <a href="{{ route('bookings.edit', $reservas->id) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('bookings.destroy', $reservas->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                        </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection