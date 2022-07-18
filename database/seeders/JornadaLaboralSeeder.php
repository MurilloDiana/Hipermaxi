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
                'id_user'=>1,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
            [             
                'id_user'=>2,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
            [             
                'id_user'=>3,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
            [             
                'id_user'=>4,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
            [             
                'id_user'=>1,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
            [             
                'id_user'=>5,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
            [             
                'id_user'=>1,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
            [             
                'id_user'=>2,                
                'datetime_marcado'=>'2022-07-18 04:30:41',                
            ],
        ];
    
        foreach ($JornadaLaborales as $key => $JornadaLaboral) {
            JornadaLaboral::create($JornadaLaboral);
        }
    }
}
