<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BoysTableSeeder::class);
        $this->call(NYALCONFERENCESTableSeeder::class);
        $this->call(EVENTORGANIZATIONSTableSeeder::class);
    }
}
