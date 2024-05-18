<?php

use database\traits\DisableForeignKeys;
use database\traits\TruncateTable;
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
                    'permission_group_id' => 1,
                    'name' => 'all_functions',
                    'display_name' => 'All Functions',
                    'description' => 'Administrative rights to access all functions',
                    'ischecker' => 0,
                    'isadmin' => 1
                ),

            1 =>
                array (
                    'id' => 2,
                    'permission_group_id' => 2,
                    'name' => 'manage_roles_permissions',
                    'display_name' => 'Manage Roles and Permissions',
                    'description' => 'Manage Roles and Permissions',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

            2 =>
                array (
                    'id' => 3,
                    'permission_group_id' => 2,
                    'name' => 'manage_system',
                    'display_name' => 'Manage System Definitons',
                    'description' => 'Manage System',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),


            3 =>
                array (
                    'id' => 4,
                    'permission_group_id' => 2,
                    'name' => 'manage_users',
                    'display_name' => 'Manage users',
                    'description' => 'Manage User',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

            4 =>
                array (
                    'id' => 5,
                    'permission_group_id' => 2,
                    'name' => 'manage_products',
                    'display_name' => 'Manage Products',
                    'description' => 'Manage Products',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

            5 =>
                array (
                    'id' => 6,
                    'permission_group_id' => 2,
                    'name' => 'manage_customers_basic',
                    'display_name' => 'Manage Customers: Basic',
                    'description' => 'Manage Customers - Basic setting',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),
            6 =>
                array (
                    'id' => 7,
                    'permission_group_id' => 2,
                    'name' => 'manage_customers_advance',
                    'display_name' => 'Manage Customers: Advance',
                    'description' => 'Manage Customers - Advance setting',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),
            7 =>
                array (
                    'id' => 8,
                    'permission_group_id' => 2,
                    'name' => 'manage_customers_invoice',
                    'display_name' => 'Manage Customers: Invoices',
                    'description' => 'Manage Customers - Invoices data',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

            8 =>
                array (
                    'id' => 9,
                    'permission_group_id' => 2,
                    'name' => 'admin_menu',
                    'display_name' => 'Menu: Admin',
                    'description' => 'Menu: Admin',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),
            9 =>
                array (
                    'id' => 10,
                    'permission_group_id' => 2,
                    'name' => 'customer_menu',
                    'display_name' => 'Menu: Customer',
                    'description' => 'Menu: Customer - functions only',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),
            10 =>
                array (
                    'id' => 11,
                    'permission_group_id' => 2,
                    'name' => 'manage_customer_fulfilment_basic',
                    'display_name' => 'Customer Fulfillment: Basic (View & Fulfill)',
                    'description' => 'Customer Fulfillment: Basic (View & Fulfill)',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

            11 =>
                array (
                    'id' => 12,
                    'permission_group_id' => 2,
                    'name' => 'manage_customer_fulfilment_advance',
                    'display_name' => 'Customer Fulfillment: Advance (Basic + Add)',
                    'description' => 'Customer Fulfillment: Advance (Basic + Add)',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

            12 =>
                array (
                    'id' => 13,
                    'permission_group_id' => 2,
                    'name' => 'manage_api_error',
                    'display_name' => 'Manage API - Errors',
                    'description' => 'Manage API errors',
                    'ischecker' => 0,
                    'isadmin' => 0
                ),

        ));

    }
}
