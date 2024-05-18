<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class DocumentGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

//        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Delete existing records
        Schema::disableForeignKeyConstraints();
        DB::table('document_groups')->truncate();
        Schema::enableForeignKeyConstraints();
//
//        \DB::table('document_groups')->delete();


        \DB::table('document_groups')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Products',
                    'top_path' => '/products',
                ),


        ));
        /*Make directory for top path for each doc group*/
        (new \App\Repositories\System\DocumentGroupRepository())->makeDirectoryTopPath();

    }
}
