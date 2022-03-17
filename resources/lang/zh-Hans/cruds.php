<?php

return [
    'userManagement' => [
        'title'          => '用户管理',
        'title_singular' => '用户管理',
    ],
    'permission' => [
        'title'          => '权限',
        'title_singular' => '权限',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'             => '名称',
            'name_helper'      => ' ',
            'title'             => '标题',
            'title_helper'      => ' ',
            'created_at'        => '创建时间',
            'created_at_helper' => ' ',
            'updated_at'        => '修改时间',
            'updated_at_helper' => ' ',
            'deleted_at'        => '删除时间',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => '名称',
            'name_helper'        => ' ',
            'title'              => '标题',
            'title_helper'       => ' ',
            'permissions'        => '权限',
            'permissions_helper' => ' ',
            'created_at'         => '创建时间',
            'created_at_helper'  => ' ',
            'updated_at'         => '修改时间',
            'updated_at_helper'  => ' ',
            'deleted_at'         => '删除时间',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => '用户',
        'title_singular' => '用户',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => '姓名',
            'name_helper'              => ' ',
            'email'                    => '邮箱',
            'email_helper'             => ' ',
            'email_verified_at'        => '邮箱校验',
            'email_verified_at_helper' => ' ',
            'password'                 => '密码',
            'password_helper'          => ' ',
            'roles'                    => '角色',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => '创建时间',
            'created_at_helper'        => ' ',
            'updated_at'               => '修改时间',
            'updated_at_helper'        => ' ',
            'deleted_at'               => '删除时间',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => '产品管理',
        'title_singular' => '产品管理',
    ],
    'productCategory' => [
        'title'          => '分类',
        'title_singular' => '分类',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => '名称',
            'name_helper'        => ' ',
            'description'        => '说明',
            'description_helper' => ' ',
            'photo'              => '图片',
            'photo_helper'       => ' ',
            'created_at'         => '创建时间',
            'created_at_helper'  => ' ',
            'updated_at'         => '修改时间',
            'updated_at_helper'  => ' ',
            'deleted_at'         => '删除时间',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'productTag' => [
        'title'          => '标签',
        'title_singular' => '标签',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => '名称',
            'name_helper'       => ' ',
            'created_at'        => '创建时间',
            'created_at_helper' => ' ',
            'updated_at'        => '修改时间',
            'updated_at_helper' => ' ',
            'deleted_at'        => '删除时间',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product' => [
        'title'          => '产品',
        'title_singular' => '产品',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => '名称',
            'name_helper'        => ' ',
            'description'        => '说明',
            'description_helper' => ' ',
            'price'              => '价格',
            'price_helper'       => ' ',
            'category'           => '分类',
            'category_helper'    => ' ',
            'tag'                => '标签',
            'tag_helper'         => ' ',
            'photo'              => '图片',
            'photo_helper'       => ' ',
            'created_at'         => '创建时间',
            'created_at_helper'  => ' ',
            'updated_at'         => '修改时间',
            'updated_at_helper'  => ' ',
            'deleted_at'         => '删除时间',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'address' => [
        'title'          => '地址',
        'title_singular' => '地址',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => '名称',
            'name_helper'        => ' ',
            'type'               => '类型',
            'type_helper'        => ' ',
            'fullname'           => '全称',
            'fullname_helper'    => ' ',
            'created_at'         => '创建时间',
            'created_at_helper'  => ' ',
            'updated_at'         => '修改时间',
            'updated_at_helper'  => ' ',
            'deleted_at'         => '删除时间',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'customer' => [
        'title'          => '客户',
        'title_singular' => '客户',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'realname'           => '名称',
            'realname_helper'    => ' ',
            'nickname'           => '微信名称',
            'nickname_helper'    => ' ',
            'type'               => '类型',
            'type_helper'        => ' ',
            'phonenumber'        => '手机号码',
            'phonenumber_helper' => ' ',
            'cardno'             => '卡号',
            'cardno_helper '     => ' ',
            'address'            => '地址',
            'address_helper'     => ' ',
            'unionid'            => 'unionid',
            'unionid_helper'     => ' ',
            'score'              => '积分',
            'score_helper'       => ' ',
            'created_at'         => '创建时间',
            'created_at_helper'  => ' ',
            'updated_at'         => '修改时间',
            'updated_at_helper'  => ' ',
            'deleted_at'         => '删除时间',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'contactManagement' => [
        'title'          => '合同管理',
        'title_singular' => '合同管理',
    ],
    'contactCompany' => [
        'title'          => '公司',
        'title_singular' => '公司',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'company_name'           => '公司名称',
            'company_name_helper'    => ' ',
            'company_address'        => '地址',
            'company_address_helper' => ' ',
            'company_website'        => '网站',
            'company_website_helper' => ' ',
            'company_email'          => '邮箱',
            'company_email_helper'   => ' ',
            'created_at'             => '创建时间',
            'created_at_helper'      => ' ',
            'updated_at'             => '修改时间',
            'updated_at_helper'      => ' ',
            'deleted_at'             => '删除时间',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'contactContact' => [
        'title'          => '合同',
        'title_singular' => '合同',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'company'                   => '公司',
            'company_helper'            => ' ',
            'contact_first_name'        => '名',
            'contact_first_name_helper' => ' ',
            'contact_last_name'         => '姓',
            'contact_last_name_helper'  => ' ',
            'contact_phone_1'           => '电话1',
            'contact_phone_1_helper'    => ' ',
            'contact_phone_2'           => '电话2',
            'contact_phone_2_helper'    => ' ',
            'contact_email'             => '邮箱',
            'contact_email_helper'      => ' ',
            'contact_skype'             => 'Skype',
            'contact_skype_helper'      => ' ',
            'contact_address'           => '地址',
            'contact_address_helper'    => ' ',
            'created_at'                => '创建时间',
            'created_at_helper'         => ' ',
            'updated_at'                => '修改时间',
            'updated_at_helper'         => ' ',
            'deleted_at'                => '删除时间',
            'deleted_at_helper'         => ' ',
        ],
    ],
];
