<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=>$users]);
    }

    public function create()
    {
        return view("auth.register");
    }


    public function store(Request $request)
    {
        $request->validate([
            "nro_doc"=> "required|string|min:2|max:10",
            "nombre_usuario"=> "required|string|min:5|max:20",
            "email"=> "required|email|min:2|max:20",
            "password"=> "required|min:2|max:225",
            "id_rol"=> "required|string|min:1|max:10",
        ]);

        // User::create($request->all());

        $user = User::create([
            "nro_doc"=> $request->nro_doc,
            "nombre_usuario"=> $request->nombre_usuario,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
            "id_rol"=> $request->id_rol,
        ]);
        
        $users = User::with('roles')->get();

        auth()->attempt($request->only('','email','password'));

        return redirect()->route("user.index")->with("success","usuario registrado exitosamente");
        
    }
    public function show($id)
{
    $user = User::find($id);

    if (!$user) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('user.index')->with('error', 'Usuario no encontrado');
    }

    return view('user.shows', ['user' => $user]);
}


public function edit($id)
    {
        $users = User::find($id);
        return view('user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        User::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $users = User::find($id);
        $users->delete(); 
        return redirect('/usuarios')->with('success', 'Usuario eliminado correctamente');
        
    }

}


