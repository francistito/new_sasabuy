<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  \Illuminate\Support\Facades\DB;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('documents')->delete();


        DB::table('documents')->insert(array (
            0 => array (
                'id' => 1,
                'name' => 'Product image',
                'document_group_id' => 1,
                'description' => 'product image',
                'isrecurring' => 0,
                'ismandatory' => 1,
                'isrenewable' => 1,
                'isactive' => 1,

            ),
            1 => array (
                'id' => 2,
                'name' => 'Other product image',
                'document_group_id' => 1,
                'description' => 'product image',
                'isrecurring' => 0,
                'ismandatory' => 1,
                'isrenewable' => 1,
                'isactive' => 1,

            ),
            2 => array (
                'id' => 3,
                'name' => 'Product category',
                'document_group_id' => 1,
                'description' => 'product category image',
                'isrecurring' => 0,
                'ismandatory' => 1,
                'isrenewable' => 1,
                'isactive' => 1,

            ),

        ));


    }
}
