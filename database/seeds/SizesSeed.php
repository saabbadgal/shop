<?php

use Illuminate\Database\Seeder;

class SizesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'size' => '3',  
            ]);
        DB::table('sizes')->insert([
            'size' => '4',  
            ]);
        DB::table('sizes')->insert([
            'size' => '5',  
            ]);
        DB::table('sizes')->insert([
            'size' => '6',  
            ]);
        DB::table('sizes')->insert([
            'size' => '7',  
            ]);
        DB::table('sizes')->insert([
            'size' => '8',  
            ]);
        DB::table('sizes')->insert([
            'size' => '9',  
            ]);
        DB::table('sizes')->insert([
            'size' => '10',  
            ]);
    }
}
