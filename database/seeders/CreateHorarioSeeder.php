<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Horario;

class CreateHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horarios = [
            [             
                'hora_ingreso'=>'08:00',
                'hora_salida'=>'12:00',
                'turno'=>'mañana',
                'dia_libre'=>'2010-04-04',
            ],
            [             
                'hora_ingreso'=>'14:00',
                'hora_salida'=>'18:00',
                'turno'=>'tarde',
                'dia_libre'=>'2010-04-04',
            ],
            [                
                'hora_ingreso'=>'18:00',
                'hora_salida'=>'22:00',
                'turno'=>'noche',
                'dia_libre'=>'2010-04-04',
            ],            
        ];
    
        foreach ($horarios as $key => $horario) {
            Horario::create($horario);
        }
    }
}
