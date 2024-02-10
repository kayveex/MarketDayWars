<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminData = [
            [
                'username' => 'admin001',
                'email' => 'admin001@gmail.com',
                'password' => bcrypt('001Agent'),
                'ulangi_pass'=>'001Agent',
                'role' => 'admin',
                'isActive' => 1,
                'balance' => 0
            ],
            [
                'username' => 'admin002',
                'email' => 'admin002@gmail.com',
                'password' => bcrypt('002Agent'),
                'ulangi_pass'=>'002Agent',
                'role' => 'admin',
                'isActive' => 1,
                'balance' => 0
            ],
        ];

        foreach ($adminData as $key => $val) {
            User::create($val);
        }
    }
}
