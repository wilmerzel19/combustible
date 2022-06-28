<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;


    protected $table ='unidades';
    protected $fillable =
    [
        'placa',
        'tipo_vehiculo',
        'tarjeta_id'
    ];
}
