<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'father_name' => 'admin',         
            'mobile_no' => '9876546789',       
            'registration_no' => '987',        
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
