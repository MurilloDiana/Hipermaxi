<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{ 
   // use HasFactory;
   protected $primaryKey = "id_p";
   protected $fillable = [      
       'FECHA_INI',
       'FECHA_FIN',
       'ASUNTO',
       'DIAS'
   ];
}
