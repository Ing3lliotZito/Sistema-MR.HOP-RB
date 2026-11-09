<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Crear el usuario Administrador
        User::create([
            'name' => 'Administrador Mr. Hop',
            'email' => 'admin@mrhop.com',
            'password' => Hash::make('12345678'), // Puedes cambiar la contraseña aquí
            'role' => 'admin',                   // Rol de administrador
        ]);

        // 2. (Opcional) Crear un usuario cliente normal de prueba
        User::create([
            'name' => 'Miguel Angel',
            'email' => 'cliente@mrhop.com',
            'password' => Hash::make('12345678'),
            'role' => 'client',                  // Rol de cliente normal
        ]);
    }
}