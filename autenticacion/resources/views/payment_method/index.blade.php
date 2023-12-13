@extends('layouts.app')

@section('content')
<a href="{{ route('payment_method.create') }}">Create new payment method</a>

<table>
    <thead>
        <tr>
            <th>Nombre de metodo</th>
            <th>monto total</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($metodpagos as $metodpagos)
            <tr>
                <td>{{ $metodpagos->nombre_metodo }}</td>
                <td>{{ $metodpagos->billing->first() ? $metodpagos->billing->first()->monto_total : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('payment_method.shows', $metodpagos->id_metodo_pago) }}">Ver</a>
                    <a href="{{ route('payment_method.edit', $metodpagos->id_metodo_pago) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('payment_method.destroy', $metodpagos->id_metodo_pago) }}">
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