<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PersonaUnidad extends Pivot
{
    use HasFactory;
    protected $table ='recorridos';
    protected $fillable =
    [
        'fecha',
        'km',
        'recorrido',
        'litros',
        'persona_id',
        'unidad_id',
    ];
}
