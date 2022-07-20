<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boletaPago extends Model
{
    protected $primaryKey = "IDboleta_pago";
    protected $fillable = [ 
    'fecha_emision',
    'fecha_recibido',
    'dias_trabajados',
    'monto_pagoAdic',
    'monto_desc',
    'monto_total',
    'id_pagoadicional',
    'id_emp',
    'id_descuent',
    ];
}
