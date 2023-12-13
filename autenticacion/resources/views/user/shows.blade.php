@if ($user)
    <h1>USER DETAILS</h1>
    <p>Numero de Documento: {{ $user->nro_doc }}</p>
    <p>Nombre Usuario: {{ $user->nombre_usuario }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Password: {{ $user->password }}</p>
    <p>Id rol: {{ $user->id_rol }}</p>
    <a href="{{ route('user.index') }}">Volver al Listado</a>
@else
    <p>Usuario no encontrado</p>
@endif
