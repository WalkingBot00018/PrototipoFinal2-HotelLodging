<?php

namespace App\Http\Controllers;
use App\models\PaymentMethod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index(){
        $metodpagos = PaymentMethod::all();
        return view('payment_method.index', ['metodpagos'=>$metodpagos]);
    }

    public function create()
    {
        return view("payment_method.create");
    }


    public function store(Request $request)
    {

        PaymentMethod::create($request->all());

    // Carga la relación 'habitacion' en lugar de 'reservas'
        

        return redirect()->route("payment_method.index")->with("success", "metodo pago registrada exitosamente");
        
    }
    public function show($id_metodo_pago)
{
    $metodpagos = PaymentMethod::find($id_metodo_pago);

    if (!$metodpagos) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('payment_method.index')->with('error', 'metodo de pago no encontrado');
    }

    return view('payment_method.shows', ['metodpagos' => $metodpagos]);
}


public function edit($id_metodo_pago)
    {
        $metodpagos = PaymentMethod::find($id_metodo_pago);
        return view('payment_method.edit', compact('metodpagos'));
    }

    public function update(Request $request, $id_metodo_pago)
    {
       

        // Actualiza el usuario
        PaymentMethod::where('id_metodo_pago', $id_metodo_pago)->update($request->except('_token', '_method'));

        return redirect('/metodopago')->with('success', 'factura actualizado correctamente');
    }

        

    

public function destroy($id_metodo_pago)
    {
        
        $metodpagos = PaymentMethod::find($id_metodo_pago);
        $metodpagos->delete(); 
        return redirect('/metodopagos')->with('success', 'metodo de pago eliminado correctamente');
        
}
}
