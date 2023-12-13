h1>Editar Reserva</h1>
<form method="POST" action="{{ route('bookings.update', $reservas->id) }}">
    @csrf
    @method('PUT')
    <label for="nro_reserva">Número de Reserva</label>
    <input type="text" name="nro_reserva" value="{{ $reservas->nro_reserva }}">

    <label for="nro_habitacion">Numero habitacion</label>
    <input type="text" name="nro_habitacion" value="{{ $reservas->nro_habitacion }}">

    <label for="id_cliente">Id cliente</label>
    <input type="text" name="id_cliente" value="{{ $reservas->id_cliente }}">

    <label for="fecha_entrada">Fecha entrada</label>
    <input type="date" name="fecha_entrada" value="{{ $reservas->fecha_entrada }}">

    <label for="fecha_salida">Fecha salida</label>
    <input type="date" name="fecha_salida" value="{{ $reservas->fecha_salida }}">

    <label for="estado">Estado</label>
    <input type="text" name="estado" value="{{ $reservas->estado }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('bookings.shows', $reservas->id) }}">Ver Detalles</a>