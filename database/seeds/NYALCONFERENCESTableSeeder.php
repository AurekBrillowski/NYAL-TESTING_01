<?php

use Illuminate\Database\Seeder;

class NYALCONFERENCESTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('NYAL_CONFERENCES')->delete();
        
        \DB::table('NYAL_CONFERENCES')->insert(array (
            0 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'No Conference Assigned',
                'id' => '0',
            ),
            1 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'South Central States Conference',
                'id' => '1',
            ),
            2 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'North Central States Conference',
                'id' => '2',
            ),
            3 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'Western States Conference',
                'id' => '3',
            ),
            4 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'Eastern States Conference',
                'id' => '4',
            ),
            5 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'Really Fake Conferences - ORACLE',
                'id' => '5',
            ),
            6 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'New Name for Six-Twenty!',
                'id' => '20',
            ),
            7 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'WITH OLD STYLE TRIGGER',
                'id' => '50',
            ),
            8 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'TEST 8b HERE.',
                'id' => '40',
            ),
            9 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'conference_name' => 'OLD STYLE 2',
                'id' => '51',
            ),
        ));
        
        
    }
}