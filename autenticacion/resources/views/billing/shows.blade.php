@if ($facturacion)
    <h1>billing DETAILS</h1>
    <p>Numero factura: {{ $facturacion->nro_factura }}</p>
    <p>Numero reserva: {{ $facturacion->nro_reserva }}</p>
    <p>fecha_emision: {{ $facturacion->fecha_emision }}</p>
    <p>monto_total: {{ $facturacion->monto_total }}</p>
    <p>id metodo pago: {{ $facturacion->id_metodo_pago }}</p>   
    <a href="{{ route('bookings.index') }}">Volver al Listado</a>
@else
    <p>reserva no encontrado</p>
@endif