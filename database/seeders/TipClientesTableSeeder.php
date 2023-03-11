<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tip_cliente;

class TipClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tip_cliente::create([
            'des_tip'      => 'USUARIO FINAL',

        ]);

        Tip_cliente::create([
            'des_tip'      => 'RESELLER',

        ]);
    }
}
