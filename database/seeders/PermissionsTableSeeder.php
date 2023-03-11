<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Permission list
        Permission::create(['name' => 'registrar_usuarios']);
        Permission::create(['name' => 'clientes']);
        Permission::create(['name' => 'registrar_clientes']);
        Permission::create(['name' => 'editar_clientes']);
        Permission::create(['name' => 'borrar_clientes']);
        Permission::create(['name' => 'remotas']);
        Permission::create(['name' => 'registrar_remotas']);
        Permission::create(['name' => 'editar_remotas']);
        Permission::create(['name' => 'borrar_remotas']);
        Permission::create(['name' => 'historico_remotas']);
        Permission::create(['name' => 'planes']);
        Permission::create(['name' => 'registrar_planes']);
        Permission::create(['name' => 'editar_planes']);
        Permission::create(['name' => 'borrar_planes']);
        Permission::create(['name' => 'contenciones']);
        Permission::create(['name' => 'registrar_contenciones']);
        Permission::create(['name' => 'editar_contenciones']);
        Permission::create(['name' => 'borrar_contenciones']);
        Permission::create(['name' => 'satelites']);
        Permission::create(['name' => 'registrar_satelites']);
        Permission::create(['name' => 'editar_satelites']);
        Permission::create(['name' => 'borrar_satelites']);
        Permission::create(['name' => 'reportes_cli']);
        Permission::create(['name' => 'reportes_est']);
        Permission::create(['name' => 'crear_usuarios']);
        Permission::create(['name' => 'editar_usuarios']);
        Permission::create(['name' => 'borrar_usuarios']);

        //Administrador
        $admin = Role::create(['name' => 'Soporte u Operaciones']);

        $admin->givePermissionTo([
            'registrar_usuarios',
            'clientes',
            'registrar_clientes',
            'editar_clientes',
            'borrar_clientes',
            'remotas',
            'registrar_remotas',
            'editar_remotas',
            'borrar_remotas',
            'historico_remotas',
            'planes',
            'registrar_planes',
            'editar_planes',
            'borrar_planes',
            'contenciones',
            'registrar_contenciones',
            'editar_contenciones',
            'borrar_contenciones',
            'satelites',
            'registrar_satelites',
            'editar_satelites',
            'borrar_satelites',
            'reportes_cli',
            'reportes_est',
            'crear_usuarios',
            'editar_usuarios',
            'borrar_usuarios'
        ]);
        //$admin->givePermissionTo('products.index');
        //$admin->givePermissionTo(Permission::all());
        
        //User Admin
        $user = User::find(1); //Ruben Mendoza
        $user->assignRole('Soporte u Operaciones');

        //Cliente O Reseller
        $cliente = Role::create(['name' => 'Cliente o Reseller']);

        $cliente->givePermissionTo([
            'historico_remotas',
            'planes',
            'registrar_usuarios',
            'editar_usuarios'
        ]);


        //Staff
        $staff = Role::create(['name' => 'Staff']);

        $staff->givePermissionTo([
            'clientes',
            'remotas',
            'historico_remotas',
            'planes',
            'contenciones',
            'satelites',
            'reportes_cli',
            'reportes_est',
            'registrar_usuarios',
            'editar_usuarios'
        ]);

       
    }
}


