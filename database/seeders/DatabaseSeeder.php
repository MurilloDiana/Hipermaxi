<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\empleado;//adiciona el models de la tabla
use App\Models\User;
use App\Models\Horario;
use App\Models\permiso;
use App\Models\sueldo;
use App\Models\JornadaLaboral;
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
            'AREA'=>'raiz'            
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
            'AREA'=>'raiz'            
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
            'AREA'=>'raiz'            
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
            'AREA'=>'raiz'            
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
            'AREA'=>'raiz'            
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
            'AREA'=>'raiz'            
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
            'AREA'=>'raiz'            
        ]); 

        Empleado::create([        
            'NOMBRE'=>'nelson',
            'FECHA_NAC'=>'2000-05-11',
            'GENERO'=>'M',
            'CI'=>'11325240',
            'EMAIL'=>'fabina@gmail.com',
            'TELEFONO'=>'69008952',
            'DIRECCION'=>'radial 10',
            'FECHA_ING'=>'2020-05-11',
            'AREA'=>'Cajero'
        ]);

        Empleado::create([            
            'NOMBRE'=>'maria',
            'FECHA_NAC'=>'1999-05-11',
            'GENERO'=>'F',
            'CI'=>'11325241',
            'EMAIL'=>'fabina@gmail.com',
            'TELEFONO'=>'69008952',
            'DIRECCION'=>'radial 10',
            'FECHA_ING'=>'2020-05-11',
            'AREA'=>'Cajero'
        ]);  
           

        Empleado::create([            
            'NOMBRE'=>'mario',
            'FECHA_NAC'=>'1997-05-11',
            'GENERO'=>'M',
            'CI'=>'14525241',
            'EMAIL'=>'mario@gmail.com',
            'TELEFONO'=>'67808952',
            'DIRECCION'=>'Av. Irala',           
            'FECHA_ING'=>'2021-06-11',
            'AREA'=>NULL

        ]);
        
        Empleado::create([            
            'NOMBRE'=>'carla',
            'FECHA_NAC'=>'1998-05-11',
            'GENERO'=>'F',
            'CI'=>'11356000',
            'EMAIL'=>'carla@gmail.com',
            'TELEFONO'=>'77008945',
            'DIRECCION'=>'Av.Paurito',
            'FECHA_ING'=>'2021-05-11',
            'AREA'=>NUll

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
            'AREA'=>'3'            
        ]);
        Empleado::create([            
            'NOMBRE'=>'luis',
            'FECHA_NAC'=>'1999-08-11',
            'GENERO'=>'M',
            'CI'=>'11378000',
            'EMAIL'=>'luis@gmail.com',
            'TELEFONO'=>'77688945',
            'DIRECCION'=>'Av.Paraguay',
            'FECHA_ING'=>'2019-05-11',
            'AREA'=>NUll
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
            'AREA'=>'Panaderia'
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
            'AREA'=>'Panaderia'
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
            'AREA'=>'Recepcion'            
        ]);

        permiso::create([
            'FECHA_INI'=>'2021-05-10',
            'FECHA_FIN'=>'2021-05-11',
            'ASUNTO'=>'BAJA MEDICA',
            'DIAS'=>'2',
            'ID_permiso_emp'=>'5'
        ]);
        permiso::create([
            'FECHA_INI'=>'2021-05-20',
            'FECHA_FIN'=>'2021-05-22',
            'ASUNTO'=>'BAJA MEDICA',
            'DIAS'=>'2',
            'ID_permiso_emp'=>'8'
        ]);
        permiso::create([
            'FECHA_INI'=>'2021-06-20',
            'FECHA_FIN'=>'2021-06-30',
            'ASUNTO'=>'BAJA MEDICA',
            'DIAS'=>'10',
            'ID_permiso_emp'=>'14'
        ]);

        permiso::create([
            'FECHA_INI'=>'2022-06-26',
            'FECHA_FIN'=>'2022-06-30',
            'ASUNTO'=>'BAJA MEDICA',
            'DIAS'=>'10',
            'id_permiso_emp'=>'5'
        ]);

        sueldo::create([    
            'Sueldo'=>'2500',
            'id_ingreso_emp'=>'5']);
        sueldo::create([    
            'Sueldo'=>'2000',
        'id_ingreso_emp'=>'6']);
        sueldo::create([    
            'Sueldo'=>'2100',
            'id_ingreso_emp'=>'7']);
        sueldo::create([    
            'Sueldo'=>'3000',
            'id_ingreso_emp'=>'14']);

            
        User::create([   
            'id'=>1,
            'name'=>'RRHH',
            'email'=>'rrhh@gmail.com', 
            'type'=>1,
            'password'=>'123456789'            
        ]);

        User::create([                    
            'id'=>2,
            'name'=>'administrador',
            'email'=>'administrador@gmail.com', 
            'type'=>2,
            'password'=>'123456789'            
        ]);

        User::create([                    
            'id'=>3,
            'name'=>'usuario',
            'email'=>'user@gmail.com', 
            'type'=>0,
            'password'=>'123456789'
        ]);
       
        User::create([                    
            'id'=>4,
            'name'=>'jorge',
            'email'=>'jorge@gmail.com', 
            'type'=>1,
            'password'=>'123456789'
        ]);

        User::create([                    
            'id'=>5,
            'name'=>'fabian',
            'email'=>'fabian@gmail.com', 
            'type'=>2,
            'password'=>'123456789'
        ]);  
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-01 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-01 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-02 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-02 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-03 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-03 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-04 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-04 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-06 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-06 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-07 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-07 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-08 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-08 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-09 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-09 12:00']);

        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-10 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-10 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-11 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-11 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-12 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-12 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-13 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-13 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-14 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-14 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-15 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-15 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-16 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-16 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-17 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-17 12:00']);

        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-18 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-18 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-19 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-19 12:00']);

        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-21 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-21 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-22 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-22 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-23 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-23 12:00']);
        
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-25 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-25 12:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-26 08:00']);
        JornadaLaboral::create(['id'=>'5','datetime_marcado'=>'2022-06-26 12:00']);
        //datos del horario
        $this->call(CreateHorarioSeeder::class);  
        //datos del contrato
        $this->call(CreateContratoSeeder::class);
        //datos de falta
        $this->call(FaltaSeeder::class);
    }
}
