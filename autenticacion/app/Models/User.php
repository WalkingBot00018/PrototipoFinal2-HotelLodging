<?php
namespace App\Models;
use App\models\roles;
use App\models\Customer;
use App\models\Employess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nro_doc',
        'nombre_usuario',
        'email',
        'password',
        'id_rol',
    ];
public function store(Request $request){
    auth()->attempt($request->only('email', 'password'));
}
    public function roles()
    {
        return $this->belongsTo(roles::class, 'id_rol', 'id_rol');
    }
    public function clientes(){
        return $this->hasMany(Customer::class, 'id_cliente', 'id');
    }


    // public function employess(){
    //     return $this->hasMany(Employess::class, 'id', 'id');
    // }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

?>