<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = "venta";
    protected $primaryKey = "ven_id";
    /*
    ------------------------------------------------------------------------
    METODOS PARA RELACIONES
    ------------------------------------------------------------------------
     */
    //Ventas que corresponden al cliente
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cli_id');
    }

    //Ventas que corresponden al usuario
    public function usuario(){
        return $this->belongsTo(Usuario::class, 'usu_id');
    }

    //Detalle que corresponden a la venta
    public function detalle(){
        return $this->hasMany(DetalleVenta::class, 'ven_id');
    }
}
