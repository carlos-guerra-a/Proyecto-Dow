<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Propuesta;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('propuestas')->insert([

            ["id"=>"1","fecha"=>"2023-05-01","documento"=>"Desarrollo de una aplicación web de trabajos","estado"=>"1","estudiante_rut"=>"19567894-5"],
            ["id"=>"2","fecha"=>"2023-05-02","documento"=>"Creación de un sistema de reservas de hoteles","estado"=>"2","estudiante_rut"=>"16502307-2"],
            ["id"=>"3","fecha"=>"2023-05-03","documento"=>"Desarrollo de una plataforma en línea de bancos","estado"=>"3","estudiante_rut"=>"32222444-7"],
            ["id"=>"4","fecha"=>"2023-05-04","documento"=>"Creación de una tienda en línea de ropa","estado"=>"4","estudiante_rut"=>"24500003-2"],
            ["id"=>"5","fecha"=>"2023-05-05","documento"=>"Desarrollo de una aplicación de gestión","estado"=>"2","estudiante_rut"=>"22599374-7"],
            ["id"=>"6","fecha"=>"2023-05-06","documento"=>"Desarrollo de una aplicación móvil y web de repartos","estado"=>"1","estudiante_rut"=>"25596321-0"],
            ["id"=>"7","fecha"=>"2023-05-07","documento"=>"Creación de una plataforma educativa en línea","estado"=>"1","estudiante_rut"=>"19828567-6"],
            ["id"=>"8","fecha"=>"2023-05-08","documento"=>"Desarrollo de una aplicación móvil de entrenamiento","estado"=>"4","estudiante_rut"=>"19828567-6"],
            ["id"=>"9","fecha"=>"2023-05-09","documento"=>"Creación de una plataforma en línea para cantar","estado"=>"2","estudiante_rut"=>"16502307-2"],
            ["id"=>"10","fecha"=>"2023-05-14","documento"=>"Creación de una plataforma que conecta a conductores y pasajeros","estado"=>"2","estudiante_rut"=>"25596321-0"],
            ["id"=>"11","fecha"=>"2023-05-15","documento"=>"Desarrollo de una aplicación móvil y web de citas","estado"=>"4","estudiante_rut"=>"25596321-0"]
        ]);
    }
}
