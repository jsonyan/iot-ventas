<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoTagRfidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uids = [
            '8351C3A0',
            '6DA5DE00',
            // '73DBCA0E',
            // '8FA5851F'
        ];

        foreach ($uids as $uid) {
            DB::table('producto_tag_rfid')->insert([
                'pro_id' => 1,
                'ptr_uid' => $uid,
                'ptr_codigo' => $uid,
                'ptr_estado' => 'activo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
