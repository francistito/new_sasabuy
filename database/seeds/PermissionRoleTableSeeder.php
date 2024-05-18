<?php

use database\traits\DisableForeignKeys;
use database\traits\TruncateTable;
use Illuminate\Database\Seeder;


class PermissionRoleTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("permission_role");
//        $this->delete('permission_role');
        $count = DB::table('permission_role')->where('role_id', 1)->where('permission_id', 1)->count();
        if ($count == 0){
            \DB::table('permission_role')->insert(array(
                0 =>
                    array (
                        'permission_id' => 1,
                        'role_id' => 1,
                    ),
//
            ));

            $this->syncPermissionToAdminRole();
            $this->syncPermissionToCustomerRole();
        }

        $this->syncPermissionToAdminRole();
        $this->syncPermissionToCustomerRole();
        /*Sync Admin Role 1*/
        $this->enableForeignKeys("permission_role");

    }


    public function syncPermissionToAdminRole()
    {
        $role = \App\Models\Access\Role::query()->find(1);
        $role->permissions()->syncWithoutDetaching([1]);

    }

    public function syncPermissionToCustomerRole()
    {
        $role = \App\Models\Access\Role::query()->find(2);
        $role->permissions()->syncWithoutDetaching([10]);

    }
}
