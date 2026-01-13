<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = "inventario";
    protected $primaryKey = "inv_id";
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
