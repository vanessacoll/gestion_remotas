<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Justificacion;

class JustificacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Justificacion::create([
            'des_just'      => 'A petición del Cliente',

        ]);

        Justificacion::create([
            'des_just'      => 'Solicitado por Departamento de Administración',

        ]);

        Justificacion::create([
            'des_just'      => 'Pruebas de Servicio',

        ]);

        Justificacion::create([
            'des_just'      => 'Recomendaciones del Departamento Técnico',

        ]);

        Justificacion::create([
            'des_just'      => 'Avería en Electrónica',

        ]);

        Justificacion::create([
            'des_just'      => 'Degradación de la Señal',

        ]);

        Justificacion::create([
            'des_just'      => 'Avería en Antena',

        ]);

        Justificacion::create([
            'des_just'      => 'Avería de Modem',

        ]);

        Justificacion::create([
            'des_just'      => 'Cambio de Titular de la Remota',

        ]);

        Justificacion::create([
            'des_just'      => 'Mudanza de la Remota',

        ]);

        Justificacion::create([
            'des_just'      => 'Antena Movida',

        ]);
    }
}
