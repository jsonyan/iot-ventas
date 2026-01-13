<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoTagRFID extends Model
{
    protected $table = "producto_tag_rfid";
    protected $primaryKey = "ptr_id";
    /*
    ------------------------------------------------------------------------
    METODOS PARA RELACIONES
    ------------------------------------------------------------------------
     */
    //producto que corresponde al inventario
    public function producto(){
        return $this->belongsTo(Producto::class, 'pro_id');
    }

    //inventario que corresponde al tag
    public function inventario(){
        return $this->belongsTo(Inventario::class, 'inv_id');   
    }
}
