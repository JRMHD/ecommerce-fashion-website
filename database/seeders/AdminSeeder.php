<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'email' => 'mikedrimz.star@gmail.com',
            'password' => Hash::make('@Reagan2065'),
        ]);

        Admin::create([
            'email' => 'reaganmukabana@gmail.com',
            'password' => Hash::make('@Reagan2065'),
        ]);
    }
}
