<?php

namespace App\Repositories\System;

use App\Models\Cms\ProductType;
use App\Models\Cms\Website\PageContainer;
use App\Models\Cms\Website\PageContainerDesign;
use App\Models\Cms\Website\SiteIcon;
use App\Models\Cms\Website\SitePage;
use App\Models\Resource\Training;
use App\Models\Resource\TrainingCategory;
use App\Models\System\CodeValue;
use App\Models\System\DocumentResource;
use App\Repositories\BaseRepository;
use App\Repositories\Cms\ClientRepository;
use App\Repositories\Cms\ServiceRepository;
use App\Repositories\System\CountryRepository;
use App\Repositories\System\Traits\ResourceRepoTrait;
use App\Repositories\System\Traits\SitePageDesignsRepoTrait;
use App\Repositories\Website\PageContainersRepository;
use App\Repositories\Website\SitePageRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\This;

/**
 * Class CodeValueRepository
 * @package App\Repositories\Sysdef
 * @description Use this class with care, could break the system.
 * Controls all the data dictionaries of the system.
 * @author Erick M. Chrysostom <e.chrysostom@nextbyte.co.tz>
 */
class CodeValueRepository extends BaseRepository
{
    use ResourceRepoTrait, SitePageDesignsRepoTrait;

    const MODEL = CodeValue::class;
    protected $code_repo;

    /*
     * CodeValueRepository Constructor
     */
    public function __construct(){
        $this->code_repo = new CodeRepository();
    }

    /*
     * Translate CodeValues Entries using lang>code_value
     */
    public function mapIdsForLang($query)
    {
        $return = $query->map(function ($item, $key) {
            return ['id' => $item['id'], 'name' => __("code_value." . $item['id'])];
        });
        return $return;
    }

    /*Query active only*/
    public function queryActiveOnly()
    {
        return $this->query()->where('isactive', 1);
    }

    /**
     * Get code value name for translation
     * @param $id
     * @return array|null|string
     */
    public function name($id)
    {
        return __('code_value.'. $id);

    }

    /*no transalation*/
    public function nameWithNoLang($id)
    {
        return $this->find($id)->name;
    }

    /*Get id by reference*/
    public function getIdByReference($reference){
        $cv = $this->getCodeValueByReference($reference);
        return $cv->id ?? null;
    }
    public function getNameByReference($reference){
        $cv = $this->getCodeValueByReference($reference);
        return $cv->name ?? null;
    }

    /*
     *
     */
    public function getUserLogTypeLogIn()
    {
        $return = $this->query()->select(['id'])->where("code_id", 1)->where("reference", "ULLGI")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypeLogOut()
    {
        $return = $this->query()->select(['id'])->where("code_id", 1)->where("reference", "ULLGO")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypeFailedLogin()
    {
        $return = $this->query()->select(['id'])->where("code_id", 1)->where("reference", "ULFLI")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypePasswordReset()
    {
        $return = $this->query()->select(['id'])->where("code_id", 1)->where("reference", "ULPRS")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypeUserLockout()
    {
        $return = $this->query()->select(['id'])->where("code_id", 1)->where("reference", "ULULC")->first();
        return $return->id;
    }


    /*
     *
     */
    public function getCodeForSelectFiltered($code_id, array $filter)
    {
        $query = $this->queryActiveOnly()->select(['id'])->where("code_id", $code_id)->whereIn("id", $filter)->get();
        $return = $this->mapIdsForLang($query)->pluck('name', 'id');
        return $return;
    }

    /*
     * Get all code values by code_id
     * For initiating chained selects
     */
    public function getAllByCode($code_id)
    {
        return $this->query()->select(['id', 'name', 'code_id'])->where("code_id", $code_id)->get();
    }


    /*Get code values for select */
    public function getCodeValuesForSelect($code_id)
    {
        $query = $this->queryActiveOnly()->select(['id', 'name'])
            ->where("code_id", $code_id)
            ->orderBy('id', 'asc')
            ->get();
        $return = $query->pluck('name', 'id');
        return $return;
    }

    /*Get code values for select with no lang*/
    public function getCodeValuesForSelectWithNoLang($code_id)
    {
        $query = $this->queryActiveOnly()
            ->where("code_id", $code_id)
            ->orderBy('id', 'asc')
            ->pluck('name','id');
        $return = $query;
        return $return;
    }

    /*Get code values by reference for select*/
    public function getCodeValuesReferenceForSelect($code_id)
    {
        $query = $this->queryActiveOnly()->select(['name', 'reference'])->where("code_id", $code_id)->get();
        $return = $query->pluck("name", "reference");
        return $return;
    }

    /**
     * Get CV by reference
     * @param $reference
     * @return mixed
     */
    public function getCodeValueByReference($reference){
        return $return = $this->query()->where("reference", $reference)->first();
    }

    public function getReferenceByCodeValue($code_value_id){

        $code_value = $this->query()->where("id", $code_value_id)->first();
        return $code_value->reference;
    }

    /*
     * Get code values instances by code_id
     */
    public function getCodeValues($code_id)
    {
        return $this->query()->where("code_id", $code_id)->get();
    }

    /*
     * Get instances of  code values not in specified ids
     */
    public function getCodeValuesNotIn($code_id, array $ids)
    {
        return $this->query()->where("code_id", $code_id)->whereNotIn('id', $ids)->get();
    }

    /*
     *
     */
    public function getCodeValuesPaginate($code_id, $count = 10)
    {
        return $this->query()->where("code_id", $code_id)->paginate($count);
    }

    /*
     *
     */
    public function getCurrencyForSelect(){
        $repo = new CurrencyRepository();
        $query = $repo->query()->select(['id', 'code'])->get();
        $return = $query->pluck("code", "id");
        return $return;
    }

    public function getSitePagesForSelect(){
        $repo = new SitePageRepository();
        $query = $repo->query()->select(['id', 'title'])->get();
        $return = $query->pluck("title", "id");
        return $return;
    }


    public function getClientsForSelect(){
        $repo = new ClientRepository();
        $query = $repo->query()->select(['id', 'name'])->get();
        $return = $query->pluck("name", "id");
        return $return;
    }
    public function getServicesForSelect(){
        $repo = new ServiceRepository();
        $query = $repo->query()->select(['id', 'title'])->get();
        $return = $query->pluck("title", "id");
        return $return;
    }

    public function getPageContainersForSelect(){
        $repo = new PageContainersRepository();
        $query = $repo->query()->select(['id', 'section_name'])->orderBy('sort', 'asc')->get();
        $return = $query->pluck("section_name", "id");
        return $return;
    }

    /**
     * @return \Illuminate\Support\Collection
     * Product Types
     */
    public function getProductTypesForSelect()
    {
        return ProductType::query()->where('isactive',1)->orderBy('name')->pluck('name', 'id');
    }


    public function getPageContainerDesignsByReference($reference)
    {
        $designs = [];
        switch ($reference)
        {
            case 'header';
                $designs = $this->getCodeValuesForSelectWithNoLang(2);

                break;

            case 'about_us';
                $designs = $this->getCodeValuesForSelectWithNoLang(7);

                break;
            case 'services';
                $designs = $this->getCodeValuesForSelectWithNoLang(9);
                break;

            case 'footer';
                $designs = $this->getCodeValuesForSelectWithNoLang(3);
                break;

            case 'slider';
                $designs = $this->getCodeValuesForSelectWithNoLang(11);
                break;

        }
        return $designs;
    }


    public function getPageContainerDesignById($page_container_id)
    {
        $product_designs_ids = DB::table('page_container_design_product')->where('product_category',config('setting.category_name'))->where('sort',config('setting.sort'))->pluck('page_container_design_id');
        $page_container_designs = PageContainerDesign::query()->whereIn('id',$product_designs_ids)->where('page_container_id',$page_container_id)->pluck('name','id');
        return $page_container_designs;
    }

    //get a sngle containr by reference
    public function getContainerByReference($reference)
    {
        $container = PageContainer::where('reference',$reference)->first();

        return $container;
    }


    /*
     *
     */
    public function getCountryNameForSelect()
    {
        $repo = new CountryRepository();
        $query = $repo->query()->where('isactive', 1)->select(['name', 'code'])->get();
        $return = $query->pluck("name", "name");
        return $return;
    }

    /*
 *
 */
    public function getCountryCodeForSelect()
    {
        $repo = new CountryRepository();
        $query = $repo->query()->where('isactive', 1)->select(['code', 'name'])->orderBy('sort', 'asc')->orderBy('name', 'asc')->get();
        $return = $query->pluck("name", "code");
        return $return;
    }

    /*
     *
     */
    public function getCountryIdsForSelect()
    {
        $repo = new CountryRepository();
        $query = $repo->query()->where('isactive', 1)->select(['id', 'name'])->get();
        $return = $query->pluck("name", "id");
        return $return;
    }

    /*
     *
     */
    public function getRegionForSelect()
    {
        $repo = new RegionRepository();
        $query = $repo->query()->where('isactive', 1)->select(['id', 'name'])->get();
        $return = $query->pluck("name", "id");
        return $return;
    }


    public function getDistrictForSelect()
    {
        $repo = new DistrictRepository();
        $query = $repo->query()->select(['id', 'name'])->get();
        $return = $query->pluck("name", "id");
        return $return;
    }

    /*
     * Get Code instance from code_id
     */
    public function getCodeInstanceById($code_id)
    {
        return $this->code_repo->find($code_id);
    }

    /*
     * Get code values by code for data table
     */
    public function getCodeValuesByCodeForDataTable($code_id){
        return $this->query()->where('code_id', $code_id);
    }


    public function queryServicesForDirectory(){
        return $this->queryActive()->where("code_id", 2);
    }
    public function getServiceForDirectory()
    {
        return $this->queryServicesForDirectory()->select(['id', 'name', 'reference'])->whereIn('id',[6,7,9])->orderBy("id", "asc")->get();
    }


    /*sitepage top sections*/
    public function getSitepageTopSectionDesignsForSelect()
    {
        return [
            1 => 'Default',
//            2 => 'Classic 1 - Centered',
        ];
    }

    /*sitepage top section dimension*/
    public function getSitepageTopSectionDimensionsForSelect()
    {
        return [
            0 => 'Small',
            3 => 'Medium',
            5 => 'Large',
//            2 => 'Classic 1 - Centered',
        ];
    }

//    public function getTrainingCategories()
//    {
//        return $this->queryActive()->where("code_id", 3)->get();
//
//    }
//
//    public function getTrainingByTrainingCategory($category_id)
//    {
//        $query = Training::where('category_id',$category_id)->where('isactive',0)->get();
//        return $query;
//    }
//
//
//

    /**
     * get the maximum number of sort of a given code value
     * @param $code_id
     * @return mixed
     */
    public function getMaxSort($code_id){
        $code_values = $this->query()->select('sort')
            ->where('code_id', $code_id)
            ->orderBy('sort', 'desc')
            ->first();
        return $code_values->sort;
    }

    /**
     * generate references for CodeValue
     * @param $initials
     * @return string
     */
    public function generateReference($initials){
        do
        {
            $token = randomString();
            $reference = $initials.$token;
            $available = $this->query()
                ->select('reference')
                ->where('reference', $reference)->get();
        }
        while(!$available->isEmpty());
        return $reference;
    }


    /**
     * @param $cv_id
     * Get subcategory code of the code value
     */
    public function getCodeCategory($cv_id)
    {
        $code_value = $this->find($cv_id);
        $code_category = $code_value->codes()->where('iscategory', 1)->first();
        return $code_category;
    }



    /**
     * Store Code Value
     * @param array $input
     * @param $code_id
     */
    public function store(array $input, $code){

        $sort = $this->getMaxSort($code->id);
        DB::transaction(function () use ($input, $sort, $code) {
            $query = $this->query()->create([
                'name' => $input['code_name'],
                'description' => $input['description'],
                'code_id' => $code->id,
                'reference' => $this->generateReference('CV'),
                'isactive' => ($input['status'] == 'yes') ? 1 : 0,
                'sort' => ++$sort,
                'lang' =>  $input['code_name_sw']
            ]);
            return $query;
        });
    }

    /**
     * @param array $input
     * @param $reference
     */
    public function update(array $input,$code_value){
        DB::transaction(function () use ($input, $code_value) {
            $code_value->update([
                'code_name' => $input['code_name'],
                'description' => $input['description'],
                'isactive' => ($input['status'] == 'yes') ? 1 : 0,
                'lang' => $input['code_name_sw']
            ]);
        });

        return $code_value;
    }

    /*Activate / Deactivate i.e. status = 1 activate, = 0 Deactivate*/
    public function activateDeactivate($code_value, $status){
        $code_value->update([
            'isactive' => $status
        ]);
        return $code_value;
    }


    public function getImageAttribute($model,$document_id)
    {
        $document_resource = $model->documents()->where('document_id', $document_id)->first();
        $document_resource_repo = new DocumentResourceRepository();
        $image = isset($document_resource) ? $document_resource_repo->getDocFullPathUrl($document_resource->pivot->id) : null;
        return $image;
    }

    /**
     * @param $model
     * @param $document_id
     * @return null|string
     */
    public function getImageTopPathAttribute($model,$document_id)
    {
        $document_resource = $model->documents()->where('document_id', $document_id)->first();
        $document_resource_repo = new DocumentResourceRepository();
        $image = isset($document_resource) ? $document_resource_repo->getTopDocFullPathUrl($document_resource->pivot->id) : null;
        return $image;
    }

    /*Get boolean for select*/
    public function getBooleanForSelect()
    {
        return ['0' => 'No', '1' => 'Yes'];
    }


    /*Organization*/
    public function getOrganization()
    {
        $company = (new OrganizationRepository())->findOrganization();
        return $company;
    }

    public function getPageContainerIdByReference($reference)
    {
        $page_container = PageContainer::query()->withTrashed()->where('reference',$reference)->first();
        $page_container_id = $page_container->id;
        return $page_container_id;
    }


    public function getSitePageSlugsForSelect()
    {
        return SitePage::query()->where('isactive',1)->orderBy('sort')->pluck('slug','slug');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getSiteIconsForSelect()
    {
        return SiteIcon::query()->where('isactive',1)->orderBy('name')->pluck('name','class_name');
    }



    /**
     * @param $document_id
     * @param $resource_id
     */
    public function getDocPivotIdByNonRecurringDocumentAndResource($document_id, $resource_id)
    {
        $document_resource = DocumentResource::query()->whereRaw("document_id = ? and resource_id = ?",[$document_id, $resource_id])->first();
        return $document_resource->id ?? null;
    }

    public function syncPageContainerDesignByPackage()
    {
        $container_designs = PageContainerDesign::query()->pluck('id');
        $userId = 1;
        $user = User::find($userId);

        if (!$user) {
            // Handle the case where the user is not found
            return;
        }

        // Sync the roles for the user
        $user->roles()->sync($roleIds);
    }
}
