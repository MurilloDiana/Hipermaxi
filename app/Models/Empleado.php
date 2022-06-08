<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    
    use HasFactory;

    
    protected $fillable = [                
        'NOMBRE',
        'FECHA_NAC',
        'GENERO',
        'CI',
        'EMAIL',
        'TELEFONO',
        'DIRECCION',
        'FECHA_ING',
        'AREA',
        'ANTIGUEDAD',
        'NIVEL',
        'CODIGO'
    ];
    

}