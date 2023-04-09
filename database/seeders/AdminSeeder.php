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
            "name" => "John",
            "login" => "admin",
            "surname" => "Doe",
            "email" => "john.doew@example.com",
            "role" => "admin",
            "password" => "123123",
        ]);

    }
}
