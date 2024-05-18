<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 6/26/19
 * Time: 9:43 AM
 */

namespace App\Repositories\System\Traits;


use App\Models\Cms\Employee;
use App\Models\Cms\Faq;
use App\Models\Cms\Product;
use App\Models\Cms\Service;
use App\Models\Cms\StatsData;
use App\Models\Cms\Website\PageContainer;

use App\Models\Cms\Website\SitePage;
use App\Models\Cms\WhyUs;
use App\Models\Product\Customer;
use Illuminate\Support\Facades\DB;

trait ResourceRepoTrait
{

    /**
     * @param $model_name
    ResourceRepoTrait.phpResourceRepoTrait.php     * @param null $resource_id
     * @return array
     * Get resource details by mode name i.e. resource instance and resource type
     */
    public function getResourceDetailsByModelName($model_name, $resource_id = null)
    {
        $resource = null;
        $resource_type = null;
        $edit_url = null;
        switch($model_name){

            case 'PageContainer':
                $resource_type ='App\Models\Cms\Website\PageContainer';
                $resource = ($resource_id) ? PageContainer::query()->find($resource_id) : null;
                $edit_url = 'page_container/edit/'. ($resource->uuid ?? null);
                break;
            case 'Service':
                $resource_type ='App\Models\Cms\Service';
                $resource = ($resource_id) ? Service::query()->find($resource_id) : null;
                $edit_url = 'cms/service/edit/'. ($resource->uuid ?? null);
                break;
            case 'Employee':
                $resource_type ='App\Models\Cms\Employee';
                $resource = ($resource_id) ? Employee::query()->find($resource_id) : null;
                $edit_url = 'cms/employee/edit/'. ($resource->uuid ?? null);
                break;
            case 'SitePage':
                $resource_type ='App\Models\Cms\Website\Employee';
                $resource = ($resource_id) ? SitePage::query()->find($resource_id) : null;
                $edit_url = 'site_page/edit/'. ($resource->uuid ?? null);
                break;
            case 'WhyUs':
                $resource_type ='App\Models\Cms\WhyUs';
                $resource = ($resource_id) ? WhyUs::query()->find($resource_id) : null;
                $edit_url = 'cms/why_us/edit/'. ($resource->uuid ?? null);
                break;
            case 'Faq':
                $resource_type ='App\Models\Cms\Faq';
                $resource = ($resource_id) ? Faq::query()->find($resource_id) : null;
                $edit_url = 'cms/faq/edit/'. ($resource->uuid ?? null);
                break;
            case 'StatsData':
                $resource_type ='App\Models\Cms\StatsData';
                $resource = ($resource_id) ? StatsData::query()->find($resource_id) : null;
                $edit_url = 'cms/stats_data/edit/'. ($resource->uuid ?? null);
                break;
            case 'Product':
                $resource_type ='App\Models\Cms\Product';
                $resource = ($resource_id) ? Product::query()->find($resource_id) : null;
                $edit_url = 'cms/product/edit/'. ($resource->uuid ?? null);
                break;
        }


        return [
            'resource' => $resource,
            'resource_type' => $resource_type,
            'edit_url' => $edit_url,
        ];
    }

    /**
     * @param $resource_id
     * @param $resource_type
     * Get Resource by resource type
     */
    public function getResourceByResourceType($resource_id, $resource_type)
    {
        $resource = null;
        switch($resource_type){
            case 'App\Models\Product\Customer':
                $resource = Customer::query()->find($resource_id);
                break;
        }

        return $resource;
    }

}