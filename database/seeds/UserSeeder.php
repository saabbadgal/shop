<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'Saab',
            'phone' => '9914263105',
            'email' => 'user@gmail.com',             
            'email_verified_at' => now(),
	        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
	        'remember_token' => Str::random(10), 
            ]);
    }
}
