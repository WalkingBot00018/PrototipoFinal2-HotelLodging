
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">  
<a class="olo" href="{{ route('user.create') }}">Create new user</a>
@forelse ($users as $user)
    <div class="user-item">
        <span>{{ $user->nro_doc }}</span>
        <span>{{ $user->nombre_usuario }}</span>
        <span>{{ $user->email }}</span>
        <span>{{ $user->roles ? $user->roles->nombre_rol : 'sin rol' }}</span>
        <div class="user-actions">
            <a href="{{ route('user.shows', $user->id) }}">Ver</a>
            <a href="{{ route('user.edit', $user->id) }}">Editar</a>
            <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
            </form>
        </div>
    </div>
@empty
    <h6>No hay datos</h6>
@endforelse


