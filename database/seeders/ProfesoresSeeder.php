<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;
use Carbon\Carbon;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([

            ["rut"=>"10599633-5","nombre"=>"Oscar","apellido"=>"Hernández","created_at"=>Carbon::now()],
            ["rut"=>"11599647-5","nombre"=>"María","apellido"=>"Cárdenas","created_at"=>Carbon::now()],
            ["rut"=>"12369852-6","nombre"=>"Pamela","apellido"=>"Lira","created_at"=>Carbon::now()]



        ]);
    }
}

