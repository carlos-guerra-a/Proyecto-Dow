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

    
    //obtener propuestas asociadas a profesor
    public function propuestas():BelongsToMany{

        return $this->belongsToMany(Propuesta::class);
    }


    //obtener propuestas comentadas por profesor
    //incluyendo campos de tabla pivote
    public function propuestasConPivot():BelongsToMany{
        return $this->belongsToMany(Propuesta::class)->withPivot(['fecha', 'comentario']);

    }


}


