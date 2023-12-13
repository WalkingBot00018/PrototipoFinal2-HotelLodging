@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('payment_method.index') }}">REGRESAR</a>
<form method="post" action="{{ route('payment_method.store') }}" class="my-form">

    @csrf
    
    <label for="nombre_metodo">Nombre de metodo</label>
    <input type="text" name="nombre_metodo" id="nombre_metodo" >



    <input type="submit" value="Create" class="btn btn-primary"/>

</form>

@endsection