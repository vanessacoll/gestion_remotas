<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'des_status'      => 'ACTIVO',

        ]);

        Status::create([
            'des_status'      => 'INACTIVO',

        ]);

        Status::create([
            'des_status'      => 'SUSPENDIDO',

        ]);

        Status::create([
            'des_status'      => 'PREACTIVADO',

        ]);

        Status::create([
            'des_status'      => 'ACTIVADO COMERCIALMENTE',

        ]);

        Status::create([
            'des_status'      => 'SUSPENDIDO POR PAGO',

        ]);
    }
}
