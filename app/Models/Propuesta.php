<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    protected $table = 'propuestas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'fecha', 'documento', 'estado', 'estudiante_rut',
    ];

      public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante_rut', 'rut');
    }
}
