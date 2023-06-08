<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Estudiante extends Model
{   
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey = 'rut';
    public $incrementing = false;
    protected $fillable = ['rut', 'nombre', 'apellido', 'email'];
    

    //obtiene todas las propuestas de un alumno
    public function propuestas():HasMany{
        return $this->hasMany(Propuesta::class, 'estudiante_rut', 'rut');
    }
}

 //obtiene todas las propuestas de un alumno
 //public function propuestas():HasMany{
   // return $this->hasMany(Propuesta::class, 'estudiante_rut', 'rut');}}

