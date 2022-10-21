<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actividadesriesgo;
use App\Models\AuxCanal;
use App\Models\AuxCaracter;
use App\Models\Control;
use App\Models\Incidencia;
use App\Models\Seguimiento;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CodigoSeeder::class);

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('password');
        $user->save();

        $user = new AuxCanal();
        $user->Canal = "Email";
        $user->idCanal = "email";
        $user->save();
        $user = new AuxCanal();
        $user->Canal = "Fax";
        $user->idCanal = "fax";
        $user->save();
        $user = new AuxCanal();
        $user->Canal = "Papel";
        $user->idCanal = "papel";
        $user->save();
        $user = new AuxCanal();
        $user->Canal = "Teléfono";
        $user->idCanal = "telefono";
        $user->save();
        $user = new AuxCanal();
        $user->Canal = "Otro";
        $user->idCanal = "otro";
        $user->save();

        $user = new AuxCaracter();
        $user->Caracter = "Normal";
        $user->idCaracter = "normal";
        $user->save();

        $user = new AuxCaracter();
        $user->Caracter = "Urgente";
        $user->idCaracter = "urgente";
        $user->save();

        Incidencia::factory(24)->create();
        Seguimiento::factory(19)->create();
        Actividadesriesgo::factory(120)->create();
        Control::factory(120)->create();


    }
}
