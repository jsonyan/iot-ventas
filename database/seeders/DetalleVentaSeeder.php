<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetalleVenta;

class DetalleVentaSeeder extends Seeder
{
    public function run()
    {
        // Lista de precios según tus 10 productos de máquinas de coser
        $precios = [
            1 => 1200.00, // Singer Heavy Duty 4452
            2 => 980.00,  // Brother CS6000i
            3 => 1600.00, // Janome 2212
            4 => 1450.00, // Toyota Super Jeans J34
            5 => 2100.00, // Singer Quantum Stylist 9960
            6 => 1100.00, // Brother ST371HD
            7 => 2900.00, // Janome HD3000
            8 => 3500.00, // Juki TL-2010Q
            9 => 1800.00, // Singer Tradition 2277
            10 => 2600.00 // Brother SE1900
        ];

        // Subtotales coherentes con los totales del seeder VentaSeeder
        $detalles = [
            // Venta 1 total: 1250.50
            [ 'ven_id' => 1, 'pro_id' => 1, 'cantidad' => 1 ],

            // Venta 2 total: 980.00
            [ 'ven_id' => 2, 'pro_id' => 2, 'cantidad' => 1 ],

            // Venta 3 total: 2200.75
            [ 'ven_id' => 3, 'pro_id' => 3, 'cantidad' => 1 ],

            // Venta 4 total: 1500.00
            [ 'ven_id' => 4, 'pro_id' => 4, 'cantidad' => 1 ],

            // Venta 5 total: 675.40
            [ 'ven_id' => 5, 'pro_id' => 9, 'cantidad' => 1 ],

            // Venta 6 total: 3100.00
            [ 'ven_id' => 6, 'pro_id' => 7, 'cantidad' => 1 ],

            // Venta 7 total: 480.90
            [ 'ven_id' => 7, 'pro_id' => 6, 'cantidad' => 1 ],

            // Venta 8 total: 799.00
            [ 'ven_id' => 8, 'pro_id' => 9, 'cantidad' => 1 ],

            // Venta 9 total: 1950.00
            [ 'ven_id' => 9, 'pro_id' => 3, 'cantidad' => 1 ],

            // Venta 10 total: 2650.25
            [ 'ven_id' => 10, 'pro_id' => 10, 'cantidad' => 1 ],
        ];

        foreach ($detalles as $d) {
            $precio = $precios[$d['pro_id']];
            $subtotal = $precio * $d['cantidad'];

            DetalleVenta::create([
                'ven_id'            => $d['ven_id'],
                'pro_id'            => $d['pro_id'],
                'dve_cantidad'      => $d['cantidad'],
                'dve_precio_unitario' => $precio,
                'dve_subtotal'      => $subtotal,
            ]);
        }
    }
}
