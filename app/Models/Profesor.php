<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $primaryKey = 'rut';
    protected $fillable = ['rut', 'nombre', 'apellido'];
    public $timestamps = true;
    public $incrementing = false;

    public function propuestas():BelongsToMany{

        return $this->belongsToMany(Propuesta::class,'profesor_propuesta', 'profesor_rut', 'propuesta_id');
    }

    // public function propuestasConPivot():BelongsToMany{
    //     return $this->belongsToMany(Propuesta::class)->withPivot(['fecha', 'comentario']);

    // }
    
    public function propuestasConPivot(): BelongsToMany
    {
        return $this->belongsToMany(Propuesta::class, 'profesor_propuesta', 'profesor_rut', 'propuesta_id')->withPivot(['fecha', 'comentario']);
    }






}


