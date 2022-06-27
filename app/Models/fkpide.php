<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fkpide extends Model
{
   // use HasFactory;
    protected $primaryKey = "ID_EMP";
    protected $fillable = [      
        'ID_EMP',
        'ID_PERM'
    ];
}
