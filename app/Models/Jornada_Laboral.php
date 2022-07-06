<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada_Laboral extends Model
{
    use HasFactory;
    protected $table="jornada_laborals";
    protected $fillable = [ 
        'id',       
        'datetime_marcado'
    ];
}
