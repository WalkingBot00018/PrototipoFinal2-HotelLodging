<?php

namespace App\Http\Controllers;
use App\Models\Billing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index(){
        $facturacion = Billing::all();
        return view('billing.index', ['facturacion'=>$facturacion]);
    }

    public function create()
    {
        return view("billing.create");
    }


    public function store(Request $request)
    {

        Billing::create($request->all());

    // Carga la relación 'habitacion' en lugar de 'reservas'
        

        return redirect()->route("billing.index")->with("success", "factura registrada exitosamente");
        
    }
    public function show($id)
{
    $facturacion = Billing::find($id);

    if (!$facturacion) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('billing.index')->with('error', 'factura no encontrado');
    }

    return view('billing.shows', ['facturacion' => $facturacion]);
}


public function edit($id)
    {
        $facturacion = Billing::find($id);
        return view('billing.edit', compact('facturacion'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Billing::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/factura')->with('success', 'factura actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $facturacion = Billing::find($id);
        $facturacion->delete(); 
        return redirect('/factura')->with('success', 'factura eliminado correctamente');
        
}
}
