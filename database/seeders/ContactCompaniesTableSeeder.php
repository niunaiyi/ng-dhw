<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactCompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_companies')->delete();
        
        
        
    }
}