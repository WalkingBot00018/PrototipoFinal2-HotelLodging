
    <a href="{{ route('role.create') }}">Crear nuevo rol</a>
    <link rel="stylesheet" href="{{ asset('css/role/index.css') }}">  

    <table>
    <thead>
        <tr>
            <th>Nombre del Rol</th>
            <th>Usuarios Asociados</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($rol as $role)
            <tr>
                <td>{{ $role->nombre_rol }}</td>
                <td>
                    @forelse ($role->users as $user)
                        <p>{{ $user->nombre_usuario }}</p>
                    @empty
                        <p>No hay usuarios asociados a este rol</p>
                    @endforelse
                </td>
                <td>
                    <a href="{{ route('role.shows', $role->id_rol) }}">Ver</a>
                    <a href="{{ route('role.edit', $role->id_rol) }}">Editar</a>

                    <form method="POST" action="{{ route('role.destroy', $role->id_rol) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3"><h6>No hay datos</h6></td>
            </tr>
        @endforelse
    </tbody>
</table>
