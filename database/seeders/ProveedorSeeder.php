<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    public function run()
    {
        $proveedores = [
            [
                'pve_nombre'    => 'Juki Corporation',
                'pve_nit'       => '1023456012',
                'pve_telefono'  => '77710001',
                'pve_email'     => 'contacto@juki.com',
                'pve_direccion' => 'Av. Industrial 123, Tokio, Japón'
            ],
            [
                'pve_nombre'    => 'Brother Industrial',
                'pve_nit'       => '2045678012',
                'pve_telefono'  => '77720002',
                'pve_email'     => 'ventas@brother.com',
                'pve_direccion' => 'Calle Central 456, Osaka, Japón'
            ],
            [
                'pve_nombre'    => 'Singer Supplies',
                'pve_nit'       => '3056789012',
                'pve_telefono'  => '77730003',
                'pve_email'     => 'info@singer.com',
                'pve_direccion' => 'Av. América 789, Nueva York, USA'
            ],
        ];

        foreach ($proveedores as $p) {
            Proveedor::create($p);
        }
    }
}
