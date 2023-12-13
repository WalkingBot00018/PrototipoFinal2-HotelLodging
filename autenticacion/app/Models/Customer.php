<?php

namespace App\Models;
use App\models\User;
use App\models\Bookings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'nro_doc',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'id_cliente', 'id');
    }
    public function bookings(){
        return $this->hasMany(Bookings::class, 'id_cliente', 'id_cliente');
    }
    
}
