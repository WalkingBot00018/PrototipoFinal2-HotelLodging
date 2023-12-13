
<link rel="stylesheet" href="{{ asset('css/role/create.css') }}"> 
<form method="post" action="{{ route('role.store') }}" class="my-form">

    @csrf
    
    <div class="form-group">
        <label for="nombre_rol">Nombre del Rol:</label>
        <input type="text" name="nombre_rol" id="nombre_rol" class="form-control"/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>