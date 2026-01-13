<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        $productos = [
            [
                'pve_id' => 1,
                'pro_sku' => 'JUKI-8700',
                'pro_nombre' => 'Máquina de Coser Industrial Juki DDL-8700',
                'pro_descripcion' => 'Máquina recta industrial de alta velocidad.',
                'pro_precio_venta' => 5200,
                'pro_precio_compra' => 4100,
                'pro_stock_minimo' => 2,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 1,
                'pro_sku' => 'JACK-E4',
                'pro_nombre' => 'Máquina Overlock Jack E4',
                'pro_descripcion' => 'Overlock 4 hilos automática.',
                'pro_precio_venta' => 3800,
                'pro_precio_compra' => 2900,
                'pro_stock_minimo' => 2,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 2,
                'pro_sku' => 'SINGER-4411',
                'pro_nombre' => 'Máquina Recta Singer Heavy Duty 4411',
                'pro_descripcion' => 'Máquina doméstica de estructura metálica.',
                'pro_precio_venta' => 1600,
                'pro_precio_compra' => 1200,
                'pro_stock_minimo' => 3,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 3,
                'pro_sku' => 'BROTHER-CV3550',
                'pro_nombre' => 'Máquina Collaretera Brother CV3550',
                'pro_descripcion' => 'Máquina collaretera para costuras profesionales.',
                'pro_precio_venta' => 4900,
                'pro_precio_compra' => 3700,
                'pro_stock_minimo' => 1,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 4,
                'pro_sku' => 'SIRUBA-BH790',
                'pro_nombre' => 'Máquina Ojaladora Siruba BH-790',
                'pro_descripcion' => 'Ojaladora electrónica para alta producción.',
                'pro_precio_venta' => 7300,
                'pro_precio_compra' => 6000,
                'pro_stock_minimo' => 1,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 4,
                'pro_sku' => 'YAMATO-AZ8000',
                'pro_nombre' => 'Máquina Fileteadora Yamato AZ8000',
                'pro_descripcion' => 'Fileteadora industrial de precisión.',
                'pro_precio_venta' => 6800,
                'pro_precio_compra' => 5400,
                'pro_stock_minimo' => 1,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 5,
                'pro_sku' => 'MINI-SEWPRO',
                'pro_nombre' => 'Máquina de Coser Portátil Mini SewPro',
                'pro_descripcion' => 'Máquina portátil ideal para reparaciones rápidas.',
                'pro_precio_venta' => 250,
                'pro_precio_compra' => 150,
                'pro_stock_minimo' => 5,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 3,
                'pro_sku' => 'BROTHER-PE800',
                'pro_nombre' => 'Máquina Bordadora Brother PE800',
                'pro_descripcion' => 'Bordadora con pantalla LCD y memoria interna.',
                'pro_precio_venta' => 6200,
                'pro_precio_compra' => 4800,
                'pro_stock_minimo' => 1,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 6,
                'pro_sku' => 'TYPICAL-TW28',
                'pro_nombre' => 'Máquina Zigzag Industrial Typical TW2-8',
                'pro_descripcion' => 'Máquina zigzag para costuras especiales.',
                'pro_precio_venta' => 4100,
                'pro_precio_compra' => 3100,
                'pro_stock_minimo' => 1,
                'pro_estado' => 'activo'
            ],
            [
                'pve_id' => 7,
                'pro_sku' => 'JUKI-MF7523',
                'pro_nombre' => 'Máquina de Puntada Cadena Juki MF-7523',
                'pro_descripcion' => 'Máquina de puntada cadena para prendas elásticas.',
                'pro_precio_venta' => 7200,
                'pro_precio_compra' => 5800,
                'pro_stock_minimo' => 1,
                'pro_estado' => 'activo'
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
