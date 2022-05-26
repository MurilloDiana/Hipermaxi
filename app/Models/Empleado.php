<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table='empleado';
    protected $primayKey='CODIGO';
    public $timestamps=false;//sirve para no migrar esta base de datos
    protected $fillable = [
        'CODIGO',
        'NOMBRE',
        'FECHA_NAC',
        'GENERO',
        'CI',
        'EMAIL',
        'TELEFONO',
        'DIRECCION',
        'FECHA_ING',
        'AREA',
        'USUARIO',
        'CONTRASEÑA',
        'NIVEL',
    ];
    

}