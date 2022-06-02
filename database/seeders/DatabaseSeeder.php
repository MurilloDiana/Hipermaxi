<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\empleado;//adiciona el models de la tabla
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
            'NOMBRE'=>'nelson',
            'FECHA_NAC'=>'2022-05-11',
            'GENERO'=>'M',
            'CI'=>'11325240',
            'EMAIL'=>'fabina@gmail.com',
            'TELEFONO'=>'69008952',
            'DIRECCION'=>'radial 10',
            'FECHA_ING'=>'2022-05-11',
            'AREA'=>'produccion',
            'ANTIGUEDAD'=>'2',
            'USUARIO'=>'300',
            'PASSWORD'=>Hash::make('miralonomas'),
            'NIVEL'=>'1'
        ]);

        Empleado::create([            
            'NOMBRE'=>'maria',
            'FECHA_NAC'=>'2022-05-11',
            'GENERO'=>'M',
            'CI'=>'11325240',
            'EMAIL'=>'fabina@gmail.com',
            'TELEFONO'=>'69008952',
            'DIRECCION'=>'radial 10',
            'FECHA_ING'=>'2022-05-11',
            'AREA'=>'produccion',
            'ANTIGUEDAD'=>'2',
            'USUARIO'=>'300',
            'PASSWORD'=>Hash::make('maria'),
            'NIVEL'=>'1'
        ]);

    }
}
