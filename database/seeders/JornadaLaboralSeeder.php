<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JornadaLaboral;

class JornadaLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $JornadaLaborales = [
            [             
                'id_user'=>5,                
                'datetime_marcado'=>'2022-07-18 04:30:42',                
            ],
            [             
                'id_user'=>2,                
                'datetime_marcado'=>'2022-07-18 04:30:43',                
            ],
            [             
                'id_user'=>3,                
                'datetime_marcado'=>'2022-07-18 04:30:44',                
            ],
            [             
                'id_user'=>4,                
                'datetime_marcado'=>'2022-07-18 04:30:45',                
            ],
            [             
                'id_user'=>1,                
                'datetime_marcado'=>'2022-07-18 04:30:46',                
            ],
            [             
                'id_user'=>5,                
                'datetime_marcado'=>'2022-07-18 04:30:47',                
            ],
            [             
                'id_user'=>1,                
                'datetime_marcado'=>'2022-07-18 04:30:48',                
            ],
            [             
                'id_user'=>2,                
                'datetime_marcado'=>'2022-07-18 04:30:49',                
            ],
        ];
    
        foreach ($JornadaLaborales as $key => $JornadaLaboral) {
            JornadaLaboral::create($JornadaLaboral);
        }
    }
}
