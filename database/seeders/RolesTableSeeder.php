<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Admin',
                'name' => '管理员',
                'created_at' => '2022-03-12 16:25:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'User',
                'name' => '用户',
                'created_at' => '2022-03-12 16:25:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'SuperAdmin',
                'name' => '超级管理员',
                'created_at' => '2022-03-13 13:23:13',
                'updated_at' => '2022-03-13 05:21:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}