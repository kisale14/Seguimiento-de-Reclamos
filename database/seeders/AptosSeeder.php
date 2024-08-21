<?php

namespace Database\Seeders;

use App\Models\Apartamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AptosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aptos = new Apartamento();

        $aptos->piso = "1";
        $aptos->num_apto = "1";
        $aptos->letra = "A";
        $aptos->habitacion = "3";
        $aptos->metros = "60";

        $aptos->save();

        $aptos1 = new Apartamento();

        $aptos1->piso = "2";
        $aptos1->num_apto = "40";
        $aptos1->letra = "A";
        $aptos1->habitacion = "3";
        $aptos1->metros = "60";

        $aptos1->save();

        $aptos3 = new Apartamento();

        $aptos3->piso = "5";
        $aptos3->num_apto = "55";
        $aptos3->letra = "A";
        $aptos3->habitacion = "3";
        $aptos3->metros = "60";

        $aptos3->save();
    }
}
