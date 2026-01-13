<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;
    protected $table = "usuario";
    protected $primaryKey = "usu_id";
    /*
    ------------------------------------------------------------------------
    METODOS PARA RELACIONES
    ------------------------------------------------------------------------
     */
    //Ventas que corresponden al cliente
    public function ventas(){
        return $this->hasMany(Venta::class, 'usu_id');
    }

}
