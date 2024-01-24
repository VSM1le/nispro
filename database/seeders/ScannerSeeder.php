<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ScannerSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'scanner',
            'email' => 'scanner@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'), 
        ]);
        $user->assignRole('scanner');
    }
}
