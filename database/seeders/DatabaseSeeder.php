<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\empleado;//adiciona el models de la tabla
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Empleado::create([        
            'NOMBRE'=>'super administrador',
            'FECHA_NAC'=>'2022-05-11',
            'GENERO'=>'M',
            'CI'=>'12345678',
            'EMAIL'=>'root@gmail.com',
            'TELEFONO'=>'12345678',
            'DIRECCION'=>'raiz',
            'FECHA_ING'=>'2022-05-11',
            'AREA'=>'raiz',
            'ANTIGUEDAD'=>'2',            
            'NIVEL'=>'1'
        ]);        

        User::create([                    
            'username'=>'root',
            'email'=>'root@gmail.com',            
            'password'=>'123456789'            
        ]);
    }
}
