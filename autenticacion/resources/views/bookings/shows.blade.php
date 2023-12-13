@if ($reservas)
    <h1>reservation DETAILS</h1>
    <p>Numero reserva: {{ $reservas->nro_reserva }}</p>
    <p>Numero habitacion: {{ $reservas->nro_habitacion }}</p>
    <p>Id cliente: {{ $reservas->id_cliente }}</p>
    <p>Fecha entrada: {{ $reservas->fecha_entrada }}</p>
    <p>Fecha salida: {{ $reservas->fecha_salida }}</p>  
    <p>Estado: {{ $reservas->estado }}</p> 
    <a href="{{ route('bookings.index') }}">Volver al Listado</a>
@else
    <p>reserva no encontrado</p>
@endif