<?php

namespace App\Http\Controllers;
use App\models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        
        $clientes = Customer::with('users')->get();
        return view('customer.index', ['cliente' => $clientes]);
    }

    public function create()
    {
        return view("customer.create");
    }


    public function store(Request $request)
    {

        Customer::create($request->all());
        
        $cliente = Customer::with('users')->get();

        return redirect()->route("customer.index")->with("success","clientes registrado exitosamente");
        
    }

    public function show($id_cliente)
{
    $clientes = Customer::find($id_cliente);

    if (!$clientes) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('customer.index')->with('error', 'rol no encontrado');
    }

    return view('customer.shows', ['clientes' => $clientes]);
}

    public function edit($id_cliente)
    {
        $clientes = Customer::find($id_cliente);
        return view('customer.edit', compact('clientes'));
    }

    public function update(Request $request, $id_cliente)
    {
       

        // Actualiza el usuario
        Customer::where('id_cliente', $id_cliente)->update($request->except('_token', '_method'));

        return redirect('/cliente')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id_cliente)
    {
        
        $clientes = Customer::find($id_cliente);
        $clientes->delete(); 
        return redirect('/cliente')->with('success', 'cliente eliminado correctamente');
        
    }
    
}
