<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;


    protected $table ='tarjetas';
    protected $fillable =
    [
        'codigo',
        'tipo_combustible',
    ];
}
