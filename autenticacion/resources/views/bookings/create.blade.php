@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('bookings.index') }}">REGRESAR</a>
<form method="post" action="{{ route('bookings.store') }}" class="my-form">

    @csrf
    
    <label for="nro_reserva">Número de Reserva</label>
    <input type="text" name="nro_reserva" id="nro_reserva" >

    <label for="nro_habitacion">Numero habitacion</label>
    <input type="text" name="nro_habitacion" id="nro_habitacion" >

    <label for="id_cliente">Id cliente</label>
    <input type="text" name="id_cliente" id="id_cliente">

    <label for="fecha_entrada">Fecha entrada</label>
    <input type="date" name="fecha_entrada" id="fecha_entrada" >

    <label for="fecha_salida">Fecha salida</label>
    <input type="date" name="fecha_salida" id="fecha_salida">

    <label for="estado">Estado</label>
    <input type="text" name="estado" id="estado" >


    <input type="submit" value="Create" class="btn btn-primary"/>

</form>

@endsection