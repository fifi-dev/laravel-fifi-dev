<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
            'name' => 'Admin1',
            'email' => 'test@admin.com',
            'password' => bcrypt('laravel_test'),
            'utype' => 'ADM',
            ]);

            User::create( [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('laravel_admin'),
                'utype' => 'ADM',
                ],
            
        );
    }
}
