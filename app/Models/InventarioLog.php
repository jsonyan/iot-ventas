<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarioLog extends Model
{
    protected $table = "inventario_log";
    protected $primaryKey = "ilo_id";
    /*
    ------------------------------------------------------------------------
    METODOS PARA RELACIONES
    ------------------------------------------------------------------------
     */
    //producto que corresponde al inventario
    public function producto(){
        return $this->belongsTo(Producto::class, 'pro_id');
    }
}
