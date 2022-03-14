<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'user_management_access',
                'name' => '用户管理',
                'created_at' => '2022-03-12 15:17:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'permission_create',
                'name' => '权限创建',
                'created_at' => '2022-03-12 15:16:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'permission_edit',
                'name' => '权限编辑',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'permission_show',
                'name' => '权限查看',
                'created_at' => '2022-03-12 15:20:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'permission_delete',
                'name' => '权限删除',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'permission_access',
                'name' => '权限访问',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'role_create',
                'name' => '角色创建',
                'created_at' => '2022-03-12 15:16:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'role_edit',
                'name' => '角色编辑',
                'created_at' => '2022-03-12 15:16:51',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'role_show',
                'name' => '角色查看',
                'created_at' => '2022-03-12 15:20:40',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'role_delete',
                'name' => '角色删除',
                'created_at' => '2022-03-12 15:16:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'role_access',
                'name' => '角色访问',
                'created_at' => '2022-03-12 15:17:03',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'user_create',
                'name' => '用户创建',
                'created_at' => '2022-03-12 15:17:06',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'user_edit',
                'name' => '用户编辑',
                'created_at' => '2022-03-12 15:17:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'user_show',
                'name' => '用户查看',
                'created_at' => '2022-03-12 15:20:42',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'user_delete',
                'name' => '用户删除',
                'created_at' => '2022-03-12 15:17:15',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'user_access',
                'name' => '用户访问',
                'created_at' => '2022-03-12 15:17:47',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'product_management_access',
                'name' => '产品管理',
                'created_at' => '2022-03-12 15:17:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'product_category_create',
                'name' => '分类创建',
                'created_at' => '2022-03-12 15:20:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'product_category_edit',
                'name' => '分类编辑',
                'created_at' => '2022-03-12 15:20:48',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'product_category_show',
                'name' => '分类查看',
                'created_at' => '2022-03-12 15:20:50',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'product_category_delete',
                'name' => '分类删除',
                'created_at' => '2022-03-12 15:20:52',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'product_category_access',
                'name' => '分类访问',
                'created_at' => '2022-03-12 15:20:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'product_tag_create',
                'name' => '标签创建',
                'created_at' => '2022-03-12 15:20:56',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'product_tag_edit',
                'name' => '标签编辑',
                'created_at' => '2022-03-12 15:20:58',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'product_tag_show',
                'name' => '标签显示',
                'created_at' => '2022-03-12 15:21:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'product_tag_delete',
                'name' => '标签删除',
                'created_at' => '2022-03-12 15:21:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'product_tag_access',
                'name' => '标签访问',
                'created_at' => '2022-03-12 15:21:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'product_create',
                'name' => '产品创建',
                'created_at' => '2022-03-12 15:18:46',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'product_edit',
                'name' => '产品编辑',
                'created_at' => '2022-03-12 15:18:49',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'product_show',
                'name' => '产品查看',
                'created_at' => '2022-03-12 15:18:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'product_delete',
                'name' => '产品删除',
                'created_at' => '2022-03-12 15:19:02',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'product_access',
                'name' => '产品访问',
                'created_at' => '2022-03-12 15:19:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'contact_management_access',
                'name' => '合同管理',
                'created_at' => '2022-03-12 15:19:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'contact_company_create',
                'name' => '公司创建',
                'created_at' => '2022-03-12 15:19:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'contact_company_edit',
                'name' => '公司编辑',
                'created_at' => '2022-03-12 15:19:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'contact_company_show',
                'name' => '公司查看',
                'created_at' => '2022-03-12 15:19:42',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'contact_company_delete',
                'name' => '公司删除',
                'created_at' => '2022-03-12 15:19:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'contact_company_access',
                'name' => '公司访问',
                'created_at' => '2022-03-12 15:19:50',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'contact_contact_create',
                'name' => '合同创建',
                'created_at' => '2022-03-12 15:19:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'contact_contact_edit',
                'name' => '合同编辑',
                'created_at' => '2022-03-12 15:19:58',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'contact_contact_show',
                'name' => '合同查看',
                'created_at' => '2022-03-12 15:20:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'title' => 'contact_contact_delete',
                'name' => '合同删除',
                'created_at' => '2022-03-12 15:20:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'title' => 'contact_contact_access',
                'name' => '合同访问',
                'created_at' => '2022-03-12 15:20:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'title' => 'address_access',
                'name' => '地址访问',
                'created_at' => '2022-03-13 10:10:39',
                'updated_at' => '2022-03-12 07:02:42',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'title' => 'address_show',
                'name' => '地址查看',
                'created_at' => '2022-03-13 10:10:41',
                'updated_at' => '2022-03-12 07:02:49',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'title' => 'address_delete',
                'name' => '地址删除',
                'created_at' => '2022-03-13 10:10:42',
                'updated_at' => '2022-03-12 07:02:56',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'title' => 'address_edit',
                'name' => '地址编辑',
                'created_at' => '2022-03-13 10:10:44',
                'updated_at' => '2022-03-12 07:03:04',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'title' => 'address_create',
                'name' => '地址创建',
                'created_at' => '2022-03-13 10:10:46',
                'updated_at' => '2022-03-12 07:03:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}