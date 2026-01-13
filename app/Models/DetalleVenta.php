<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = "detalle_venta";
    protected $primaryKey = "dve_id";
    /*
    ------------------------------------------------------------------------
    METODOS PARA RELACIONES
    ------------------------------------------------------------------------
     */
    //detalle que corresponde al producto x
    public function producto(){
        return $this->belongsTo(Producto::class, 'pro_id');
    }
    //detalle que corresponde a la venta x
    public function venta(){
        return $this->belongsTo(Venta::class, 'ven_id');
    }
}
