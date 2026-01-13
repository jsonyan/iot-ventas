<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'rol_nombre'    => 'Admin',
                'rol_descripcion'       => 'Administrador del sistema',
            ],
            [
                'rol_nombre'    => 'Almacen',
                'rol_descripcion'       => 'Encargado de Almacen',
            ],
            [
                'rol_nombre'    => 'Ventas',
                'rol_descripcion'       => 'Encargado de ventas',
            ],
            [
                'rol_nombre'    => 'Gerencia',
                'rol_descripcion'       => 'Gerencia de la empresa',
            ],
        ];

        foreach ($roles as $p) {
            Rol::create($p);
        }
    }
}
