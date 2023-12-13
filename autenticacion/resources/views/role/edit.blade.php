<h1>Editar  Rol</h1>
<form method="POST" action="{{ route('role.update', $roles->id_rol) }}">
<link rel="stylesheet" href="{{ asset('css/role/edit.css') }}"> 
    @csrf
    @method('PUT')
    <label for="nombre_rol">Nombre del rol</label>
    <input type="text" name="nombre_rol" value="{{ $roles->nombre_rol }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('role.shows', $roles->id_rol) }}">Ver Detalles</a>
</form>
