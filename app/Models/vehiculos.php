<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class vehiculo extends Model
{

    protected $fillable=[
        'tipo_vehiculos',
        'categorias'
    ];
}