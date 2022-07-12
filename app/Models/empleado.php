<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasFactory;
    //RENOMBRA LA PRIMARY KEY
    protected $primaryKey = "CODIGO";
    
    protected $fillable = [                
        'NOMBRE',
        'FECHA_NAC',
        'GENERO',
        'CI',
        'EMAIL',
        'TELEFONO',
        'DIRECCION',
        'FECHA_ING',
        'AREA'
    ];
}
