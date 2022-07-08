<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faltajustificada extends Model
{
    use HasFactory;
    protected $primaryKey = "id_faltajusti";
    protected $fillable = [ 
    'fecha_falta',
    'Descripcion_falta',
    'file',
    'cod_emp'
    ];
}
