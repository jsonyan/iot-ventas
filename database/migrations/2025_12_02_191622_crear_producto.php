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
        Schema::create('producto', function (Blueprint $table) {
            $table->Increments('pro_id');
            $table->integer('pve_id');
            $table->text('pro_sku');
            $table->text('pro_nombre');
            $table->text('pro_descripcion');
            $table->double('pro_precio_venta');
            $table->double('pro_precio_compra');
            $table->integer('pro_stock_minimo');
            $table->text('pro_estado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
