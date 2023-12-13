@if ($metodpagos)
    <h1>PAYMENT METHOD DETAILS</h1>
    <p>Nombre de metodo pago: {{ $metodpagos->nombre_metodo }}</p>
    <a href="{{ route('payment_method.index') }}">Volver al Listado</a>
@else
    <p>metodo pago no encontrado</p>
@endif