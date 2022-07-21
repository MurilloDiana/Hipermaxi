<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memorandum extends Model
{
    use HasFactory;
    protected $table="memoranda";
    protected $primaryKey = "id_me";
    protected $fillable = [        
        'fecha',
        'descripcion',
        'id_emp',
        'id_falta'
    ];
}
