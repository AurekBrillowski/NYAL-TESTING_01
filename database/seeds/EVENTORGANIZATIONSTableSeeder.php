<?php

use Illuminate\Database\Seeder;

class EVENTORGANIZATIONSTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('EVENT_ORGANIZATIONS')->delete();
        
        \DB::table('EVENT_ORGANIZATIONS')->insert(array (
            0 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => NULL,
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => NULL,
                'organization_name' => 'Independent',
            ),
            1 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => NULL,
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => 'AAU',
                'organization_name' => 'Amateur Athletic Union (AAU)',
            ),
            2 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => NULL,
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => 'USATF',
            'organization_name' => 'USA Track & Field (USATF)',
            ),
            3 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => 'TX',
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => 'UIL',
                'organization_name' => 'University Interscholastic League (UIL)',
            ),
            4 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => 'TX',
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => 'TAPPS',
                'organization_name' => 'Texas Association of Private and Parochial Schools (TAPPS)',
            ),
            5 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => NULL,
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => NULL,
                'organization_name' => 'Dallas Running Club (DRC)',
            ),
            6 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => 'TX',
                'contact_phone' => '9725024700',
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => NULL,
                'organization_name' => 'J L Long Middle School',
            ),
            7 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => NULL,
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => NULL,
                'organization_name' => 'Luke\'s Locker',
            ),
            8 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => NULL,
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => 'MISD',
                'organization_name' => 'McKinney ISD',
            ),
            9 => 
            array (
                'updated_at' => NULL,
                'created_at' => NULL,
                'rm_state' => NULL,
                'contact_phone' => NULL,
                'contact_name' => NULL,
                'organization_website' => NULL,
                'organization_abbreviation' => NULL,
                'organization_name' => 'CONNECTION: NYAL_Developer',
            ),
        ));
        
        
    }
}