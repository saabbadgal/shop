<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'facebook' => 'Saab',
            'instagram' => 'Saab',
	        'gmail' => 'Saab', // password
	        'phone' => 'saab', 
	        'logo' => 'saab.jpg',
	        'address' => 'address',
            ]);
    }
}
