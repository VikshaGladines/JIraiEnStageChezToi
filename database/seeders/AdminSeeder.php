<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        User::create([
            'email' => 't.ducugnon@gmail.com',
            'name' => 'Thomas',
            'password' => Hash::make('Viksha+Thomas'),
            'role' => 'ADMIN',
            'level' => 'rien',
            'description' => 'description',
            'city' => 'Lyon'
        ]);
        User::create([
            'email' => 'innovationsociale@anesf.com',
            'name' => 'Mathilde Veille',
            'password' => Hash::make('Jesct2021'),
            'role' => 'ADMIN',
            'level' => '5eme année',
            'description' => 'Vp innovation sociale en charge du projet',
            'city' => 'Tours'
        ]);
        
    }
}
