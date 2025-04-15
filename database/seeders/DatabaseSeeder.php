<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enum\UserRole;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'role_id' => UserRole::ADMIN,
        ]);

        User::factory()->create([
            'username' => 'Sean',
            'email' => 'Sean@gmail.com',
            'role_id' => UserRole::USER,
        ]);

        User::factory()->create([
            'username' => 'Athena',
            'email' => 'Athena@gmail.com',
            'role_id' => UserRole::USER,

        ]);
    }

    }
