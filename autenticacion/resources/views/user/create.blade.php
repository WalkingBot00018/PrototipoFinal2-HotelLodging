@extends('layouts.app')

@section('content')

<body>
   <form action="{{ route('user.store') }}" method="post">
    @csrf
    
    @if (session('mensaje'))
        <h6>{{ session('mensaje') }}</h6>   
    @endif

    
    <input type="text" name="nro_doc" id="" placeholder="Document Number" value="{{ old('nro_doc') }}">
    @error('nro_doc')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="text" name="nombre_usuario" id="" placeholder="nombre_usuario" value="{{ old('nombre_usuario') }}">
    @error('nombre_usuario')
        <h6>{{ $message }}</h6>
    @enderror
  
    <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
    @error('email')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="password" name="password" id="" placeholder="Password" value="{{ old('password') }}">

    @error('password')
        <h6>{{ $message }}</h6>
    @enderror

    <input type="text" name="id_rol" id="" placeholder="Role Id" value="4">
    
    @error('id_rol')
        <h6>{{ $message }}</h6>
    @enderror
    <input type="submit" name="send" value="Send">

    </form> 
</body>

@endsection

</html>