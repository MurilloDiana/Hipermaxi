<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingreso extends Model
{
    protected $primaryKey = "id_ingreso";

    protected $fillable = [ 
    'Sueldo',
    'id_ingreso_emp'
    ];
}
