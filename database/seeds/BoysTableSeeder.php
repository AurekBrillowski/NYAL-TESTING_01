<?php

use Illuminate\Database\Seeder;

class BoysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Boys')->delete();
        
        \DB::table('Boys')->insert(array (
            0 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'name' => 'Newest',
                'id' => '16',
            ),
            1 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'name' => 'Randy',
                'id' => '11',
            ),
            2 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'name' => 'Craig',
                'id' => '12',
            ),
            3 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'name' => 'Danny',
                'id' => '13',
            ),
            4 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'name' => 'Greg',
                'id' => '14',
            ),
            5 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'name' => 'Cody',
                'id' => '15',
            ),
        ));
        
        
    }
}