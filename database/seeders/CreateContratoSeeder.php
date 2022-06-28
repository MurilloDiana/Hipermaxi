<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contrato;

class CreateContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contratos = [
            [             
                'id'=>'2',
                'inicio_contrato'=>'2022-06-19',
                'final_contrato'=>'2023-06-19',                
            ],
            [             
                'id'=>'4',
                'inicio_contrato'=>'2022-06-19',
                'final_contrato'=>'2023-06-19',
            ],
            [                
                'id'=>'3',
                'inicio_contrato'=>'2022-06-19',
                'final_contrato'=>'2023-06-19',
            ],            
        ];
    
        foreach ($contratos as $key => $contrato) {
            Contrato::create($contrato);
        }
    }
}
