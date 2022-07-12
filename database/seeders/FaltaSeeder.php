<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Falta;

class FaltaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faltas = [
            [             
                'id_empleado'=>1,
                'motivo'=>'resfriado',
                'dia_faltado'=>'2022-08-20',
                'tipo_falta'=>'justificada',                
            ],
            [             
                'id_empleado'=>1,
                'motivo'=>'resfriado',
                'dia_faltado'=>'2022-08-20',
                'tipo_falta'=>'justificada',                
            ],
            [             
                'id_empleado'=>1,
                'motivo'=>'resfriado',
                'dia_faltado'=>'2022-08-20',
                'tipo_falta'=>'justificada',                
            ],
        ];
    
        foreach ($faltas as $key => $falta) {
            Falta::create($falta);
        }
    }
}
