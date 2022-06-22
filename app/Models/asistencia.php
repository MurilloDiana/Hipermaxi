<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    use HasFactory;
    protected $table = "asistencias";
    //RENOMBRA LA PRIMARY KEY
    protected $primaryKey = "id";
    
    protected $fillable = [                
        'total_dias',
        'fecha'
 ];

}
