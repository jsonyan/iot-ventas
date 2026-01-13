<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->Increments('dve_id');
            $table->integer('ven_id');
            $table->integer('pro_id');
            $table->text('dve_cantidad'); 
            $table->text('dve_precio_unitario');
            $table->text('dve_subtotal');
            $table->integer('dve_despachados')->default(0);//contador de despachados
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_venta');
    }
};
