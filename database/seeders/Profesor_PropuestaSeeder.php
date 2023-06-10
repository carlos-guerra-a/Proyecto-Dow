<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Profesor_Propuesta;

class Profesor_PropuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesor_propuesta')->insert([

            ["propuesta_id"=>"1", "profesor_rut"=>"10599633-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 1 PROFE OSCAR"],
            ["propuesta_id"=>"1", "profesor_rut"=>"11599647-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 1 PROFE MARIA"],
            ["propuesta_id"=>"2", "profesor_rut"=>"10599633-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 2 PROFE OSCAR"],
            ["propuesta_id"=>"3", "profesor_rut"=>"10599633-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 3 PROFE OSCAR"],
            ["propuesta_id"=>"3", "profesor_rut"=>"11599647-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 3 PROFE MARIA"],
            ["propuesta_id"=>"3", "profesor_rut"=>"12369852-6", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 3 PROFE PAMELA"],
            ["propuesta_id"=>"4", "profesor_rut"=>"10599633-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 4 PROFE OSCAR"],
            ["propuesta_id"=>"4", "profesor_rut"=>"12369852-6", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 4 PROFE PAMELA"],
            ["propuesta_id"=>"5", "profesor_rut"=>"12369852-6", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 5 PROFE PAMELA"],
            ["propuesta_id"=>"6", "profesor_rut"=>"10599633-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 6 PROFE OSCAR"],
            ["propuesta_id"=>"6", "profesor_rut"=>"11599647-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 6 PROFE MARIA"],
            ["propuesta_id"=>"6", "profesor_rut"=>"12369852-6", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 6 PROFE PAMELA"],
            ["propuesta_id"=>"7", "profesor_rut"=>"12369852-6", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 7 PROFE MARIA"],
            ["propuesta_id"=>"7", "profesor_rut"=>"11599647-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 7 PROFE PAMELA"],
            ["propuesta_id"=>"8", "profesor_rut"=>"12369852-6", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 8 PROFE PAMELA"],
            ["propuesta_id"=>"9", "profesor_rut"=>"10599633-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 9 PROFE OSCAR"],
            ["propuesta_id"=>"9", "profesor_rut"=>"11599647-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 9 PROFE MARIA"],
            ["propuesta_id"=>"10", "profesor_rut"=>"10599633-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 10 PROFE OSCAR"],
            ["propuesta_id"=>"10", "profesor_rut"=>"11599647-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 10 PROFE MARIA"],
            ["propuesta_id"=>"10", "profesor_rut"=>"12369852-6", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 10 PROFE PAMELA"],
            ["propuesta_id"=>"11", "profesor_rut"=>"11599647-5", "fecha"=>Carbon::now()->toDateString(), "hora"=>Carbon::now()->toTimeString(), "comentario"=>"COMENTARIO PROPUESTA ID 11 PROFE MARIA"]

        ]);
    }
}
