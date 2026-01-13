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
        Schema::create('producto_tag_rfid', function (Blueprint $table) {
            $table->increments('ptr_id');
            $table->integer('pro_id')->nullable();                      // ID del producto
            $table->integer('inv_id')->nullable();                      // ID del inventario
            $table->text('ptr_codigo')->unique();     // Codigo interno qr/barra
            $table->string('ptr_uid', 32)->unique();        // UID RFID en hexadecimal
            $table->text('ptr_estado')->default('activo');  // activo / inactivo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_tag_rfid');
    }
};
