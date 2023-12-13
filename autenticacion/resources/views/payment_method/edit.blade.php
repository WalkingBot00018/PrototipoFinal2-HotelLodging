h1>Editar metodo pago</h1>
<form method="POST" action="{{ route('payment_method.update', $metodpagos->id_metodo_pago) }}">
    @csrf
    @method('PUT')
    <label for="nombre_metodo">Nombre del metodo</label>
    <input type="text" name="nombre_metodo" value="{{ $metodpagos->id_metodo_pago }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('payment_method.shows', $metodpagos->id_metodo_pago) }}">Ver Detalles</a>