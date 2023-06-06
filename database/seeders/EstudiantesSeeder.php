<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;
use Carbon\Carbon;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([

            ["rut"=>"19828567-6","nombre"=>"Héctor","apellido"=>"Pérez","email"=>"hector.perez@usm.cl","created_at"=>Carbon::now()],
            ["rut"=>"25596321-0","nombre"=>"Fernando","apellido"=>"Vergara","email"=>"fer.vergara@usm.cl","created_at"=>Carbon::now()],
            ["rut"=>"22599374-7","nombre"=>"Juan","apellido"=>"González","email"=>"juan.gonzalez@usm.cl","created_at"=>Carbon::now()],
            ["rut"=>"24500003-2","nombre"=>"Andrea","apellido"=>"Garay","email"=>"andrea.garay@usm.cl","created_at"=>Carbon::now()],
            ["rut"=>"32222444-7","nombre"=>"Rosa","apellido"=>"Espina","email"=>"rosa.espina@usm.cl","created_at"=>Carbon::now()],
            ["rut"=>"16502307-2","nombre"=>"Cecilia","apellido"=>"Tapia","email"=>"cecilia.tapia@usm.cl","created_at"=>Carbon::now()],
            ["rut"=>"19567894-5","nombre"=>"Roberto","apellido"=>"Bernal","email"=>"roberto.bernal@usm.cl","created_at"=>Carbon::now()]
        ]);
    }
}

