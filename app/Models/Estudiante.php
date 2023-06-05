<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'rut';
    public $incrementing = false;
    protected $fillable = ['rut', 'nombre', 'apellido', 'email'];

    public function propuestas()
    {
        return $this->hasMany(Propuesta::class, 'estudiante_rut', 'rut');
    }
}
