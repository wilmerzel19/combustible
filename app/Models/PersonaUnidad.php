<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PersonaUnidad extends Pivot
{

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
