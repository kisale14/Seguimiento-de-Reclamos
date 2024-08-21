<?php

namespace Database\Seeders;

use App\Models\Propietario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propietario = new Propietario();

        $propietario->nombre = "Francisco";
        $propietario->apellido = "Lopez";
        $propietario->cedula =  "12589654";
        $propietario->nacimiento = "2024-03-01";

        $propietario->save();


        $propietario1 = new Propietario();

        $propietario1->nombre = "Sergio";
        $propietario1->apellido = "Gomez";
        $propietario1->cedula =  "12589654";
        $propietario1->nacimiento = "2024-03-01";

        $propietario1->save();

        $propietario2 = new Propietario();

        $propietario2->nombre = "Lucas";
        $propietario2->apellido = "Romero";
        $propietario2->cedula =  "12589654";
        $propietario2->nacimiento = "2024-03-01";

        $propietario2->save();

    }
}
