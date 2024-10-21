<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['login'=>'admin','password'=>'$2y$12$0Y24uhRFR2XsJPBQqaMZ4./pcJDykKkFk4Wxysj91PLxe/B3Pq6.G','admin_roll'=>1]);
    }
}
