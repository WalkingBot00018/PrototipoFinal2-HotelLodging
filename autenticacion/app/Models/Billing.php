<?php

namespace App\Models;
use App\models\PaymentMethod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $table = 'billing';
   
    protected $fillable = [
        'nro_factura',
        'nro_reserva',
        'fecha_emision',
        'monto_total',
        'id_metodo_pago',
    ];




    public function bookings(){
        return $this->hasMany(Bookings::class, 'nro_reserva', 'nro_reserva');
    }

    public function PaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'id_metodo_pago', 'id_metodo_pago');
    }
}
