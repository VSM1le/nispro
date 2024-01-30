<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CommonerSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'commoner',
            'email' => 'commoner@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'), 
        ]);
        $user->assignRole('commoner');
    }
}
