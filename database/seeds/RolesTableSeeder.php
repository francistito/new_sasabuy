<?php

use database\traits\DisableForeignKeys;
use database\traits\TruncateTable;
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

        $exists = \App\Models\Role::query()->count();

        if($exists == 0){


            /*CUSTOM Finance manager*/
            $role_accountant = (new \App\Repositories\Access\RoleRepository())->query()->firstOrCreate(['id' => '1'],[
                'name' => 'Sitecore Admin',
                'description' => 'Manage all customers',
                'isactive' => '1',
                'isadmin' => '1',
            ]);



            /*Accountant Officer*/
            $role_officer = (new \App\Repositories\Access\RoleRepository())->query()->firstOrCreate(['id' => '2'],[
                'name' => 'Sitecore Customer',
                'description' => 'Manage buying product',
                'isactive' => '1',
                'isadmin' => '0',

            ]);



        }


    }





}
