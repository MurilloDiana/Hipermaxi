<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\empleado;//adiciona el models de la tabla

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
            'FECHA_NAC'=>'2000-05-11',
            'GENERO'=>'M',
            'CI'=>'11325240',
            'EMAIL'=>'fabina@gmail.com',
            'TELEFONO'=>'69008952',
            'DIRECCION'=>'radial 10',
            'FECHA_ING'=>'2022-05-11',
            'AREA'=>'Cajero',
            'ANTIGUEDAD'=>'2',
            'USUARIO'=>'301',
            'PASSWORD'=>Hash::make('miralonomas'),
            'NIVEL'=>'3'
        ]);

        Empleado::create([            
            'NOMBRE'=>'maria',
            'FECHA_NAC'=>'1999-05-11',
            'GENERO'=>'F',
            'CI'=>'11325241',
            'EMAIL'=>'fabina@gmail.com',
            'TELEFONO'=>'69008952',
            'DIRECCION'=>'radial 10',
            'FECHA_ING'=>'2022-05-11',
            'AREA'=>'Cajero',
            'ANTIGUEDAD'=>'2',
            'USUARIO'=>'302',
            'PASSWORD'=>Hash::make('maria2'),
            'NIVEL'=>'3'
        ]);
        
        Empleado::create([            
            'NOMBRE'=>'carlos',
            'FECHA_NAC'=>'1998-06-11',
            'GENERO'=>'M',
            'CI'=>'11325000',
            'EMAIL'=>'carlos@gmail.com',
            'TELEFONO'=>'69008945',
            'DIRECCION'=>'radial 17/2',
            'FECHA_ING'=>'2022-05-10',
            'AREA'=>'Cajero',
            'ANTIGUEDAD'=>'2',
            'USUARIO'=>'303',
            'PASSWORD'=>Hash::make('carlos1'),
            'NIVEL'=>'3'
        ]);
        Empleado::create([            
            'NOMBRE'=>'mario',
            'FECHA_NAC'=>'1997-05-11',
            'GENERO'=>'M',
            'CI'=>'14525241',
            'EMAIL'=>'mario@gmail.com',
            'TELEFONO'=>'67808952',
            'DIRECCION'=>'Av. Irala',
            'FECHA_ING'=>'2022-06-11',
            'AREA'=>NULL,
            'ANTIGUEDAD'=>'1',
            'USUARIO'=>'201',
            'PASSWORD'=>Hash::make('mario1'),
            'NIVEL'=>'2'
        ]);
        
        Empleado::create([            
            'NOMBRE'=>'carla',
            'FECHA_NAC'=>'1998-05-11',
            'GENERO'=>'F',
            'CI'=>'11356000',
            'EMAIL'=>'carla@gmail.com',
            'TELEFONO'=>'77008945',
            'DIRECCION'=>'Av.Paurito',
            'FECHA_ING'=>'2022-05-11',
            'AREA'=>NUll,
            'ANTIGUEDAD'=>'1',
            'USUARIO'=>'202',
            'PASSWORD'=>Hash::make('carla1'),
            'NIVEL'=>'2'
        ]);
        Empleado::create([            
            'NOMBRE'=>'daniel',
            'FECHA_NAC'=>'1998-01-11',
            'GENERO'=>'M',
            'CI'=>'11356012',
            'EMAIL'=>'daniel@gmail.com',
            'TELEFONO'=>'75808945',
            'DIRECCION'=>'Av.Cañoto',
            'FECHA_ING'=>'2020-05-11',
            'AREA'=>NUll,
            'ANTIGUEDAD'=>'3',
            'USUARIO'=>'101',
            'PASSWORD'=>Hash::make('daniel1'),
            'NIVEL'=>'1'
        ]);
        Empleado::create([            
            'NOMBRE'=>'luis',
            'FECHA_NAC'=>'1999-08-11',
            'GENERO'=>'M',
            'CI'=>'11378000',
            'EMAIL'=>'luis@gmail.com',
            'TELEFONO'=>'77688945',
            'DIRECCION'=>'Av.Paraguay',
            'FECHA_ING'=>'2022-05-15',
            'AREA'=>'Panaderia',
            'ANTIGUEDAD'=>NULL,
            'USUARIO'=>'304',
            'PASSWORD'=>Hash::make('luis1'),
            'NIVEL'=>'3'
        ]);
        Empleado::create([            
            'NOMBRE'=>'daniela',
            'FECHA_NAC'=>'1999-11-01',
            'GENERO'=>'F',
            'CI'=>'11356982',
            'EMAIL'=>'daniela@gmail.com',
            'TELEFONO'=>'75788945',
            'DIRECCION'=>'Av.Cañoto',
            'FECHA_ING'=>'2020-08-11',
            'AREA'=>'Panaderia',
            'ANTIGUEDAD'=>NULL,
            'USUARIO'=>'305',
            'PASSWORD'=>Hash::make('daniela1'),
            'NIVEL'=>'3'
        ]);
    }
}
