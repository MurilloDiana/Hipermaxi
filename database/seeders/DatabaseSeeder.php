<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\empleado;//adiciona el models de la tabla
use App\Models\User;
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
            'NOMBRE'=>'super administrador',
            'FECHA_NAC'=>'2022-05-11',
            'GENERO'=>'M',
            'CI'=>'12345678',
            'EMAIL'=>'root@gmail.com',
            'TELEFONO'=>'12345678',
            'DIRECCION'=>'raiz',
            'FECHA_ING'=>'2022-05-11',
            'AREA'=>'raiz',
            'NIVEL'=>'1'
        ]);    
        
        Empleado::create([        
            'NOMBRE'=>'RENE BURGOA',
            'FECHA_NAC'=>'2015-05-13',
            'GENERO'=>'M',
            'CI'=>'15978644',
            'EMAIL'=>'renebru@gmail.com',
            'TELEFONO'=>'78958461',
            'DIRECCION'=>'calle Ranchito',
            'FECHA_ING'=>'2021-10-15',
            'AREA'=>'raiz',
            'NIVEL'=>'1'
        ]);    
        
        Empleado::create([        
            'NOMBRE'=>'RENE BURGOA2',
            'FECHA_NAC'=>'2015-05-13',
            'GENERO'=>'M',
            'CI'=>'15978644',
            'EMAIL'=>'renebru@gmail.com',
            'TELEFONO'=>'78958461',
            'DIRECCION'=>'calle Ranchito',
            'FECHA_ING'=>'2021-10-12',
            'AREA'=>'raiz',
            'NIVEL'=>'1'
        ]);    
        
        Empleado::create([        
            'NOMBRE'=>'ALBERTO MURRILO',
            'FECHA_NAC'=>'2020-01-01',
            'GENERO'=>'M',
            'CI'=>'16900641',
            'EMAIL'=>'albrMurillo@gmail.com',
            'TELEFONO'=>'70075184',
            'DIRECCION'=>'calle 9 av Apojeosin limite',
            'FECHA_ING'=>'2019-01-01',
            'AREA'=>'raiz',
            'NIVEL'=>'1'
        ]);         

        Empleado::create([        
            'NOMBRE'=>'JORGE CARI',
            'FECHA_NAC'=>'1995-10-02',
            'GENERO'=>'M',
            'CI'=>'13959642',
            'EMAIL'=>'jorge@gmail.com',
            'TELEFONO'=>'78005974',
            'DIRECCION'=>'barrio flor',
            'FECHA_ING'=>'2018-08-20',
            'AREA'=>'raiz',
            'NIVEL'=>'1'
        ]);         
        
        Empleado::create([        
            'NOMBRE'=>'RICARDO GEM',
            'FECHA_NAC'=>'1998-02-22',
            'GENERO'=>'M',
            'CI'=>'15789645',
            'EMAIL'=>'ricardo@gmail.com',
            'TELEFONO'=>'78958461',
            'DIRECCION'=>'calle Ranchito',
            'FECHA_ING'=>'2017-01-15',
            'AREA'=>'raiz',
            'NIVEL'=>'1'
        ]); 
        
        Empleado::create([        
            'NOMBRE'=>'ROBERTO PEÑA',
            'FECHA_NAC'=>'1998-01-12',
            'GENERO'=>'M',
            'CI'=>'15578966',
            'EMAIL'=>'roberto@gmail.com',
            'TELEFONO'=>'78958461',
            'DIRECCION'=>'calle Ranchito',
            'FECHA_ING'=>'2016-05-05',
            'AREA'=>'raiz',
            'NIVEL'=>'1'
        ]); 

           

        Empleado::create([            
            'NOMBRE'=>'carlos',
            'FECHA_NAC'=>'1998-06-11',
            'GENERO'=>'M',
            'CI'=>'11325000',
            'EMAIL'=>'carlos@gmail.com',
            'TELEFONO'=>'69008945',
            'DIRECCION'=>'radial 17/2',
            'FECHA_ING'=>'2015-05-10',
            'AREA'=>'Cajero',
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
            'FECHA_ING'=>'2014-06-05',
            'AREA'=>'3',
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
            'FECHA_ING'=>'2013-05-11',
            'AREA'=>'3',
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
            'FECHA_ING'=>'2011-05-11',
            'AREA'=>'3',
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
            'FECHA_ING'=>'2012-05-15',
            'AREA'=>'Panaderia',
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
            'FECHA_ING'=>'2011-08-11',
            'AREA'=>'Panaderia',
            'NIVEL'=>'3'
        ]);
        Empleado::create([            
            'NOMBRE'=>'marta',
            'FECHA_NAC'=>'1999-09-21',
            'GENERO'=>'F',
            'CI'=>'11358500',
            'EMAIL'=>'marta@gmail.com',
            'TELEFONO'=>'77118945',
            'DIRECCION'=>'Av.Palmasola',
            'FECHA_ING'=>'2010-04-21',
            'AREA'=>'Recepcion',
            'NIVEL'=>'3'
        ]);

        User::create([                    
            'username'=>'RRHH',
            'email'=>'rrhh@gmail.com', 
            'type'=>1,
            'password'=>'123456789'            
        ]);

        User::create([                    
            'username'=>'Administrador',
            'email'=>'administrador@gmail.com', 
            'type'=>2,
            'password'=>'123456789'            
        ]);

        User::create([                    
            'username'=>'user',
            'email'=>'user@gmail.com', 
            'type'=>0,
            'password'=>'123456789'            
        ]);
        /*
        $users = [
            [
                'name'=>'Admin User',
                'email'=>'admin@laratutorials.com',
                'type'=>1,
                'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin User',
               'email'=>'admin@laratutorials.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@laratutorials.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@laratutorials.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
        */
    }
}
