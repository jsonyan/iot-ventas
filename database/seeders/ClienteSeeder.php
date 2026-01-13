<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        $clientes = [
            [
                'cli_nombre'        => 'María Fernanda López',
                'cli_nro_documento' => '6543210 LP',
                'cli_email'         => 'maria.lopez@example.com',
                'cli_telefono'      => '78945612',
            ],
            [
                'cli_nombre'        => 'José Antonio Rojas',
                'cli_nro_documento' => '7458123 CB',
                'cli_email'         => 'jose.rojas@example.com',
                'cli_telefono'      => '78754231',
            ],
            [
                'cli_nombre'        => 'Carla Torres Villarroel',
                'cli_nro_documento' => '8124579 SC',
                'cli_email'         => 'carla.torres@example.com',
                'cli_telefono'      => '76489123',
            ],
            [
                'cli_nombre'        => 'Luis Alberto Mendoza',
                'cli_nro_documento' => '7012458 LP',
                'cli_email'         => 'luis.mendoza@example.com',
                'cli_telefono'      => '75894216',
            ],
            [
                'cli_nombre'        => 'Ana Gabriela Quispe',
                'cli_nro_documento' => '9321456 OR',
                'cli_email'         => 'ana.quispe@example.com',
                'cli_telefono'      => '72654123',
            ],
            [
                'cli_nombre'        => 'Rodrigo Salazar Pérez',
                'cli_nro_documento' => '8412569 PT',
                'cli_email'         => 'rodrigo.salazar@example.com',
                'cli_telefono'      => '78963254',
            ],
            [
                'cli_nombre'        => 'Daniela Flores Choque',
                'cli_nro_documento' => '7215468 TJ',
                'cli_email'         => 'daniela.flores@example.com',
                'cli_telefono'      => '74256981',
            ],
            [
                'cli_nombre'        => 'Ernesto Vargas Zurita',
                'cli_nro_documento' => '6578941 CH',
                'cli_email'         => 'ernesto.vargas@example.com',
                'cli_telefono'      => '76548931',
            ],
            [
                'cli_nombre'        => 'Patricia Ramos Aguilar',
                'cli_nro_documento' => '8952146 LP',
                'cli_email'         => 'patricia.ramos@example.com',
                'cli_telefono'      => '75489612',
            ],
            [
                'cli_nombre'        => 'Mauricio Gutiérrez Rivas',
                'cli_nro_documento' => '7412580 CB',
                'cli_email'         => 'mauricio.gutierrez@example.com',
                'cli_telefono'      => '79321548',
            ],
        ];

        foreach ($clientes as $cliente) {
            Cliente::create($cliente);
        }
    }
}
