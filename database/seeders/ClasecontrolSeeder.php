<?php

namespace Database\Seeders;

use App\Models\Clasecontrol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasecontrolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clasecontrol = new Clasecontrol();
        $clasecontrol->Nombre = "Manual";
        $clasecontrol->save();

        $clasecontrol = new Clasecontrol();
        $clasecontrol->Nombre = "Automático";
        $clasecontrol->save();

        $clasecontrol = new Clasecontrol();
        $clasecontrol->Nombre = "Otro";
        $clasecontrol->save();
    }
}
