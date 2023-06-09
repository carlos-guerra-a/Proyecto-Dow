<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{   
    use HasFactory;
    protected $table = 'propuestas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'fecha', 'documento', 'estado', 'estudiante_rut',];

        public function estudiante():BelongsTo{
            return $this->belongsTo(Estudiante::class, 'estudiante_rut', 'rut');}
        
        
        public function profesores(): BelongsToMany
        {
            return $this->belongsToMany(Profesor::class, 'profesor_propuesta', 'propuesta_id', 'profesor_rut');
        }    

        // public function profesores():BelongsToMany{
        //     return $this->belongsToMany(Profesor::class);
        // }    

        // public function profesoresConPivot():BelongsToMany{
        //     return $this->belongsToMany(Profesor::class)->withPivot(['fecha', 'comentario']);

          public function profesoresConPivot(): BelongsToMany
        {
            return $this->belongsToMany(Profesor::class, 'profesor_propuesta', 'propuesta_id', 'profesor_rut')->withPivot(['fecha', 'comentario']);
        }
            

    

}

