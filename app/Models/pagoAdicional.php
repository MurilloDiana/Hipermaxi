<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagoAdicional extends Model
{
    use HasFactory;
    protected $primaryKey = "id_pago";
    protected $fillable = [      
        'tiempo_extra',
        'totalHorasExtras',
        'fecha_feriados',
        'totalFeriado',
        'BonoAntiguedad',
        'BonoTotal',
        'id_ig',
        'id_pa_emp'
    ]; 
}