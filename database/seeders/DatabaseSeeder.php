<?php

namespace Database\Seeders;

use App\Models\Slug;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name'=> 'Eka Yuni',
            'email' => 'ekayuniastuty@yahoo.com',
            'password'=> Hash::make('adminwebsi123'),
            'role'=> 'admin'
        ]);
    }
}
