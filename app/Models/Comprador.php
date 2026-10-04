<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comprador extends Model
{
    protected $table = 'compradores';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'auto_comprado',
        'marca',
        'modelo',
        'anio',
        'precio',
        'fecha_compra',
    ];
}