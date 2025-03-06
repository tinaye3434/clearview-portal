<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'test@example.com',
            'password' => Hash::make('admin1234'),
            'address' => '12 Ganges Road',
            'phone' => '0123456789',
            'role' => 'admin',
            'status' => 'active',
        ]);
    }
}
