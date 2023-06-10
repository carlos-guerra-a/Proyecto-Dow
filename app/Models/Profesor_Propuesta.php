<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesor_Propuesta extends Model
{
    use HasFactory;
    protected $table = 'profesor_propuesta';
    protected $primaryKey = ['propuesta_id', 'profesor_rut'];
    protected $fillable = ['propuesta_id', 'profesor_rut', 'fecha', 'hora', 'comentario'];
    public $timestamps = true;
    public $incrementing = false;

    public function profesor():BelongsTo{
        return $this->belongsTo(Profesor::class, 'rut', 'profesor_rut');
    }

    public function propuesta():BelongsTo{
        return $this->belongsTo(Propuesta::class, 'id', 'propuesta_id');
    }

}
