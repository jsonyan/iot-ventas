<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventario;
use App\Models\Producto;

class InventarioSeeder extends Seeder
{
    public function run()
    {
        // Cantidades de inventario inicial por producto
        $inventarios = [
            ['sku' => 'MINI-SEWPRO',   'cantidad' => 5],
            ['sku' => 'SINGER-4411',   'cantidad' => 8],
            ['sku' => 'JUKI-8700',    'cantidad' => 3],
            ['sku' => 'JACK-E4',    'cantidad' => 6],
            ['sku' => 'BROTHER-CV3550',    'cantidad' => 4],
            ['sku' => 'SIRUBA-BH790',    'cantidad' => 7],
            ['sku' => 'YAMATO-AZ8000',  'cantidad' => 2],
            ['sku' => 'BROTHER-PE800',    'cantidad' => 10],
            ['sku' => 'TYPICAL-TW28',   'cantidad' => 12],
            ['sku' => 'JUKI-MF7523',    'cantidad' => 3],
        ];

        foreach ($inventarios as $item) {
            $producto = Producto::where('pro_sku', $item['sku'])->first();

            if ($producto) {
                Inventario::create([
                    'pro_id'        => $producto->pro_id,
                    'inv_cantidad'  => $item['cantidad'],
                ]);
            }
        }
    }
}
