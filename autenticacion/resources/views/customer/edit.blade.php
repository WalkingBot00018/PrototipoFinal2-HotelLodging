<h1>Editar cliente</h1>
<form method="POST" action="{{ route('customer.update', $clientes->id_cliente) }}">
    @csrf
    @method('PUT')

    <label for="">Nombre de cliente: </label>
    <input type="text" name="nombre" value="{{ $clientes->nombre }}"/>

    <label for="">Apellido del cliente: </label>
    <input type="text" name="apellido" value="{{ $clientes->apellido }}"/>

    <label for="">Correo: </label>
    <input type="text" name="correo" value="{{ $clientes->correo }}"/>

    <label for="">Telefono: </label>
    <input type="text" name="telefono" value="{{ $clientes->telefono }}"/>

    <label for="">Numero de documento: </label>
    <input type="text" name="nro_doc" value="{{ $clientes->nro_doc }}"/>

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('customer.shows', $clientes->id_cliente) }}">Ver Detallesv</a>