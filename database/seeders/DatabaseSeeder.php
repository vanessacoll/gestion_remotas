<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

      $this->call(JustificacionesTableSeeder::class);
      $this->call(StatusTableSeeder::class);
      $this->call(TipClientesTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(PermissionsTableSeeder::class);
      

    }
}
