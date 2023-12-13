@extends('layouts.app')

@section('content')
<a href="{{ route('billing.create') }}">Create new BILLING</a>

<table>
    <thead>
        <tr>
            <th>Numero factura</th>
            <th>Numero reserva</th>
            <th>Fecha emision</th>
            <th>monto_total</th>
            <th>id metodo de pago</th>
            <th>fecha entrada</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($facturacion as $facturacion)
            <tr>
                <td>{{ $facturacion->nro_factura }}</td>
                <td>{{ $facturacion->nro_reserva }}</td>
                <td>{{ $facturacion->fecha_emision }}</td>
                <td>{{ $facturacion->monto_total }}</td>
                <td>{{ $facturacion->id_metodo_pago }}</td>
                <td>
                {{ $facturacion->bookings->first() ? $facturacion->bookings->first()->fecha_entrada : 'sin nada' }}
                </td>
                <td>
                    <a href="{{ route('billing.shows', $facturacion->id) }}">Ver</a>
                    <a href="{{ route('billing.edit', $facturacion->id) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('billing.destroy', $facturacion->id) }}">
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