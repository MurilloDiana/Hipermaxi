<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagoadicional extends Model
{

    protected $primaryKey = "id_pagoadicional";
    protected $fillable = [      
      'horas_extras',
      'pagoPorHoras',
      'fecha_feriado',
      'pagoFeriado',
      'pagoPorAntiguedad',
      'id_ingreso1',
      'id_emp'
    ];

}
