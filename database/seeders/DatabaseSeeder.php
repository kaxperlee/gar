<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Calificacion;
use App\Models\Canal;
use App\Models\Caracter;
use App\Models\Incidencia;
use App\Models\Manejo;
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

        $this->call(ClasecontrolSeeder::class);
        $this->call(CodigoSeeder::class);

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('password');
        $user->save();

        $user = new Canal();
        $user->Nombre = "Email";

        $user->save();
        $user = new Canal();
        $user->Nombre = "Fax";

        $user->save();
        $user = new Canal();
        $user->Nombre = "Papel";

        $user->save();
        $user = new Canal();
        $user->Nombre = "Teléfono";

        $user->save();
        $user = new Canal();
        $user->Nombre = "Otro";

        $user->save();

        $user = new Caracter();
        $user->Nombre = "Normal";

        $user->save();

        $user = new Caracter();
        $user->Nombre = "Urgente";

        $user->save();

        $manejo = new Manejo();
        $manejo->Nombre = 'Evitar riesgo';
        $manejo->save();

        $manejo = new Manejo();
        $manejo->Nombre = 'Reducir riesgo' ;
        $manejo->save();

        $manejo = new Manejo();
        $manejo->Nombre = 'Asumir riesgo';
        $manejo->save();

        $calificacion = new Calificacion();
        $calificacion->Nombre = 'Muy alto';
        $calificacion->save();

        $calificacion = new Calificacion();
        $calificacion->Nombre = 'Alto';
        $calificacion->save();

        $calificacion = new Calificacion();
        $calificacion->Nombre = 'Medio';
        $calificacion->save();

        $calificacion = new Calificacion();
        $calificacion->Nombre = 'Bajo';
        $calificacion->save();

        //$this->call(RiesgoSeeder::class);
        //
        $this->call(SeguimientoSeeder::class);
        $this->call(ActualSeeder::class);
        $this->call(RiesgoSeeder::class);
        $this->call(ControlSeeder::class);

        Incidencia::factory(10)->create();
        //Seguimiento::factory(19)->create();
        //Riesgo::factory(120)->create();
        //Control::factory(120)->create();

    }
}
