@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('billing.index') }}">REGRESAR</a>
<form method="post" action="{{ route('billing.store') }}" class="my-form">

    @csrf
    
    <label for="nro_factura">Número de factura</label>
    <input type="text" name="nro_factura" id="nro_factura" >

    <label for="nro_reserva">Número de reserva</label>
    <input type="text" name="nro_reserva" id="nro_reserva" >

    <label for="fecha_emision">Fecha emision</label>
    <input type="date" name="fecha_emision" id="fecha_emision" >

    <label for="monto_total">Monto total</label>
    <input type="text" name="monto_total" id="monto_total">

    <label for="id_metodo_pago">id metodo de pago</label>
    <input type="text" name="id_metodo_pago" id="id_metodo_pago" >


    <input type="submit" value="Create" class="btn btn-primary"/>

</form>

@endsection