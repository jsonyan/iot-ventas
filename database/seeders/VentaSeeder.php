<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venta;

class VentaSeeder extends Seeder
{
    public function run()
    {
        $ventas = [
            [
                'cli_id' => 1,
                'usu_id' => 2, // Jefe
                'ven_total' => 1250.50,
                'ven_metodo_pago' => 'efectivo',
                'ven_fecha_venta' => '2025-01-10',
            ],
            [
                'cli_id' => 3,
                'usu_id' => 3, // Encargado ventas
                'ven_total' => 980.00,
                'ven_metodo_pago' => 'qr',
                'ven_fecha_venta' => '2025-01-12',
            ],
            [
                'cli_id' => 5,
                'usu_id' => 3,
                'ven_total' => 2200.75,
                'ven_metodo_pago' => 'transferencia bancaria',
                'ven_fecha_venta' => '2025-01-13',
            ],
            [
                'cli_id' => 2,
                'usu_id' => 2,
                'ven_total' => 1500.00,
                'ven_metodo_pago' => 'efectivo',
                'ven_fecha_venta' => '2025-01-15',
            ],
            [
                'cli_id' => 7,
                'usu_id' => 4, // Almacén
                'ven_total' => 675.40,
                'ven_metodo_pago' => 'qr',
                'ven_fecha_venta' => '2025-01-16',
            ],
            [
                'cli_id' => 4,
                'usu_id' => 3,
                'ven_total' => 3100.00,
                'ven_metodo_pago' => 'transferencia bancaria',
                'ven_fecha_venta' => '2025-01-17',
            ],
            [
                'cli_id' => 8,
                'usu_id' => 1, // Admin
                'ven_total' => 480.90,
                'ven_metodo_pago' => 'efectivo',
                'ven_fecha_venta' => '2025-01-18',
            ],
            [
                'cli_id' => 6,
                'usu_id' => 3,
                'ven_total' => 799.00,
                'ven_metodo_pago' => 'qr',
                'ven_fecha_venta' => '2025-01-20',
            ],
            [
                'cli_id' => 10,
                'usu_id' => 2,
                'ven_total' => 1950.00,
                'ven_metodo_pago' => 'efectivo',
                'ven_fecha_venta' => '2025-01-21',
            ],
            [
                'cli_id' => 9,
                'usu_id' => 3,
                'ven_total' => 2650.25,
                'ven_metodo_pago' => 'transferencia bancaria',
                'ven_fecha_venta' => '2025-01-22',
            ],
        ];

        foreach ($ventas as $venta) {
            Venta::create($venta);
        }
    }
}
