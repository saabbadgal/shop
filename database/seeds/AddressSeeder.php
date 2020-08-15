<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('addresses')->insert([
       	    'user_id' => 2,
            'name' => 'Saab Badgal',
            'mobile' => '9914263105',
            'pin' => '143534',
            'city' => 'amritar',
            'area' => 'kartar Nagar',
            'house' => '44',
            'landmark' => 'Jiwan Jyoti School', 
            ]);

       DB::table('addresses')->insert([
       	    'user_id' => 3,
            'name' => 'Saab Badgal',
            'mobile' => '9914263105',
            'pin' => '143534',
            'city' => 'amritar',
            'area' => 'kartar Nagar',
            'house' => '44',
            'landmark' => 'Jiwan Jyoti School', 
            ]);
 
    }
}
 
