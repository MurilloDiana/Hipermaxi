<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jornada_laboral extends Model
{
    use HasFactory;
    protected $table = "jornada_laborals";
    //RENOMBRA LA PRIMARY KEY
    protected $primaryKey = "id";
    
    protected $fillable = [                
        'hora_entrada',
        'hora_salida'
 ];
}
