<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'System Administrator',
                'email' => 'system.admin@demo.com',
                'password' => bcrypt('AdminPass123'),
                'admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alyssa Mae Cortez',
                'email' => 'alyssa.cortez@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rafael Dionisio',
                'email' => 'rafael.dionisio@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bianca Rosales',
                'email' => 'bianca.rosales@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nico Emmanuel Sy',
                'email' => 'nico.sy@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trisha Villamor',
                'email' => 'trisha.villamor@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cedric Navarro',
                'email' => 'cedric.navarro@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mikaela Soriano',
                'email' => 'mikaela.soriano@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Enzo Gabriel Tan',
                'email' => 'enzo.tan@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samantha Del Rosario',
                'email' => 'samantha.delrosario@demo.com',
                'password' => bcrypt('UserPass123'),
                'admin' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],      
        ]);
    }
}