<?php

namespace App\Models;
use App\models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $table = 'payment_method';
    protected $primaryKey = 'id_metodo_pago';
   
    protected $fillable = [
        'nombre_metodo',
    ];


    public function billing(){
        return $this->hasMany(Billing::class, 'id_metodo_pago', 'id_metodo_pago');
    }
}
