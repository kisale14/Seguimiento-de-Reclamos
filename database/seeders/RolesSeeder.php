<?php

namespace Database\Seeders;

use App\Models\Administradore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol = new Administradore();

        $rol->tipo = "Usuario";
        $rol->save();

        $rol1 = new Administradore();

        $rol1->tipo = "Administrador";
        $rol1->save();
    }
}
