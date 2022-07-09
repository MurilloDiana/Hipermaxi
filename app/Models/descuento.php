<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descuento extends Model
{

    protected $primaryKey = "id_descuento";
    protected $fillable = [ 
    'AFP',
    'Total_falta',
    'Total_retraso',
    'Total_descuento',
    'id_emp_desc'
    
    ];
}