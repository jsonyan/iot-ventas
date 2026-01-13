<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";
    protected $primaryKey = "cli_id";
    /*
    ------------------------------------------------------------------------
    METODOS PARA RELACIONES
    ------------------------------------------------------------------------
     */
    //Ventas que corresponden al cliente
    public function ventas(){
        return $this->hasMany(Venta::class, 'cli_id');
    }

}
