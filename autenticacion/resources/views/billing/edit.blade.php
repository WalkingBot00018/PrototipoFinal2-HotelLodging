h1>Editar factura</h1>
<form method="POST" action="{{ route('billing.update', $facturacion->id) }}">
    @csrf
    @method('PUT')


    <label for="nro_factura">Número de factura</label>
    <input type="text" name="nro_factura" id="nro_factura" value="{{ $facturacion->nro_factura }}">

    <label for="nro_reserva">Número de reserva</label>
    <input type="text" name="nro_reserva" id="nro_reserva" value="{{ $facturacion->nro_reserva }}">

    <label for="fecha_emision">Fecha emision</label>
    <input type="date" name="fecha_emision" id="fecha_emision" value="{{ $facturacion->fecha_emision }}">

    <label for="monto_total">Monto total</label>
    <input type="text" name="monto_total" id="monto_total" value="{{ $facturacion->monto_total }}">

    <label for="id_metodo_pago">id metodo de pago</label>
    <input type="date" name="id_metodo_pago" id="id_metodo_pago" value="{{ $facturacion->id_metodo_pago }}">
   

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('bookings.shows', $facturacion->id) }}">Ver Detalles</a>