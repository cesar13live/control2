<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'numi',
        'nume',
        'ciudad',
        'estado',
        'pais',
        'pais',
        'cp',
        'telefono',
        'fax',
        'email',

    ];
}
