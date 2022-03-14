<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HHtjCmr/QmRl/bZaQDcMsOJKtC8VvXP538hPB51qunlZDJkoIimHm',
                'remember_token' => 'KMQ3CNWlraFMeqT3ltnZx0K3pC4Xp4HH2wD8qFu4kBJVHuX3rD9iFBbHCw0G',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'niuny',
                'email' => 'niuny@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CDAoUf6fHbSEJeHen/NzUuzgxPMONex3zWKZOoFu2S42cvuMMJREy',
                'remember_token' => NULL,
                'created_at' => '2022-03-13 02:34:17',
                'updated_at' => '2022-03-13 02:34:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}