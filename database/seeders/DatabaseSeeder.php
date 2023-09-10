<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // employee::factory(10)->create();
        // User::factory(1)->create();
        
        User::factory()->create([
            'name' => 'Thoriq Bani Qintoro',
            'NIK' => '3122522020',
            'email' => 'tjrsgamers@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Ir. Soekarno',
            'NIK' => '3122522021',
            'email' => 'soekarno@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Salehudin',
            'NIK' => '3122522022',
            'email' => 'saleh@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        
        User::factory()->create([
            'name' => 'Christiano Ronaldo',
            'NIK' => '3122522023',
            'email' => 'ronaldo@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        
        User::factory()->create([
            'name' => 'Anang Sumarjo',
            'NIK' => '3122522024',
            'email' => 'anang@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        
        User::factory()->create([
            'name' => 'Joko Sumarjo',
            'NIK' => '3122522028',
            'email' => 'joko@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
