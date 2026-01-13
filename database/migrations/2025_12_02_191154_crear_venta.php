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
        Schema::create('venta', function (Blueprint $table) {
            $table->Increments('ven_id');
            $table->integer('cli_id');
            $table->integer('usu_id');
            $table->text('ven_total');
            $table->text('ven_metodo_pago'); //efectivo, transferencia bancaria, qr
            $table->date('ven_fecha_venta');
            $table->integer('ven_estado')->default(0);//despachado = 1, sin_despachar = 0
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};
