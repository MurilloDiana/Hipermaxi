<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JornadaLaboral extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'id_user',       
        'datetime_marcado'
    ];
}