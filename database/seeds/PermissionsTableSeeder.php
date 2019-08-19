<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-08-19 12:40:13',
            'updated_at' => '2019-08-19 12:40:13',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '17',
                'title'      => 'team_create',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '18',
                'title'      => 'team_edit',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '19',
                'title'      => 'team_show',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '20',
                'title'      => 'team_delete',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '21',
                'title'      => 'team_access',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '22',
                'title'      => 'contact_management_access',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '23',
                'title'      => 'contact_company_create',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '24',
                'title'      => 'contact_company_edit',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '25',
                'title'      => 'contact_company_show',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '26',
                'title'      => 'contact_company_delete',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '27',
                'title'      => 'contact_company_access',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '28',
                'title'      => 'contact_contact_create',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '29',
                'title'      => 'contact_contact_edit',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '30',
                'title'      => 'contact_contact_show',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '31',
                'title'      => 'contact_contact_delete',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ],
            [
                'id'         => '32',
                'title'      => 'contact_contact_access',
                'created_at' => '2019-08-19 12:40:13',
                'updated_at' => '2019-08-19 12:40:13',
            ]];

        Permission::insert($permissions);
    }
}
