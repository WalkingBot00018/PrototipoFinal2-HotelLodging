<?php

namespace App\Models;
use App\models\Customer;
use App\models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $table = 'bookings';
   
    protected $fillable = [
        'nro_reserva',
        'nro_habitacion',
        'id_cliente',
        'fecha_entrada',
        'fecha_salida',
        'estado',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_cliente', 'id_cliente');
    }

    public function billing()
    {
        return $this->belongsTo(Billing::class, 'nro_reserva', 'nro_reserva');
    }
}
