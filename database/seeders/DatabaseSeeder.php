<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $vacaciones = new vacaciones();
        $vacaciones->name ="laravel";
        $vacaciones->descripcion ="lo mejor de lo mejor";
        $vacaciones->categoria ="pruebas de desarrollo web";
        $vacaciones->save();



        $vacaciones2 = new vacaciones();
        $vacaciones->name ="laravel";
        $vacaciones->descripcion ="lo mejor de lo mejor";
        $vacaciones->categoria ="pruebas de desarrollo web";
        $vacaciones->save();







        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
