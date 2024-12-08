<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //Datos a tomar en cuenta para la creacion de roles: name, description y created_at
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Usuario administrador que gestionara el sistema en general.', 'created_at' => now()],
            ['name' => 'superadmin', 'description' => 'Usuario administrador con control total del sistema.', 'created_at' => now()],
            ['name' => 'cliente', 'description' => 'Usuario cliente que podra interactuar con el sistema.', 'created_at' => now()],
            ['name' => 'supercliente', 'description' => 'Usuario cliente premium que podra interactuar con el sistema.', 'created_at' => now()]
        ]);
    }
}
