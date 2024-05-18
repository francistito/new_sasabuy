<?php

namespace App\Repositories\System;


use App\Models\Access\User;
use App\Models\System\Organization;
use App\Models\System\Region;
use App\Models\System\Sysdef;
use App\Models\Sysdef\SysdefGroup;
use App\Repositories\Access\UserRepository;
use App\Repositories\BaseRepository;
use App\Repositories\System\Traits\SystemLogoTrait;
use App\Repositories\Website\PageContainersDesignRepository;
use App\Repositories\Website\PageContainersRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrganizationRepository extends BaseRepository
{

    const MODEL = Organization::class;

    public function __construct()
    {

    }

    /*Insert/create Organization*/
    public function store(array $input)
    {
        return DB::transaction(function() use($input){
            $organization = $this->query()->create([
                'name' => $input['name'],
                'phone' => isset($input['phone']) ? phone_make($input['phone'], country_code()) : ($input['phone'] ?? null),
                'telephone' => isset($input['telephone']) ? phone_make($input['telephone'], country_code()) : ($input['telephone'] ?? null),
                'email' => $input['email'] ?? null,
                'web' => $input['web'] ?? null,
                'box_no' => $input['box_no'] ?? null,
                'address' => $input['address'] ?? null,
                'twitter_link' => $input['twitter_link'] ?? null,
                'facebook_link' => $input['facebook_link'] ?? null,
                'instagram_link' => $input['instagram_link'] ?? null,
                'youtube_link' => $input['youtube_link'] ?? null,
                'licence_key' => $input['licence_key'] ?? null,
                'working_hours' => $input['working_hours'] ?? null,
                'uuid' => $input['uuid'] ?? (string)\Webpatser\Uuid\Uuid::generate(4)
            ]);

            /*Activate /deactivate on Vat taxes status*/
            $this->saveDocuments($organization->id,$input);

            $this->updateImageUrl($organization,6, 'logo_url');
            $this->updateImageUrl($organization,21, 'favicon_url');

            return $organization;
        });

    }


    public function update(array $input,$organization)
    {

        return DB::transaction(function() use($organization,$input){
            $old_primary_color = $organization->primary_color;
            $old_secondary_color = $organization->secondary_color;
            $organization->update([
                'name' => isset($input['name'])?$input['name']:$organization->name,
//                'phone' => isset($input['phone']) ? phone_make($input['phone'], country_code()) : ($input['phone'] ?? null),
                'phone' => $input['phone'],
//                'whatsapp_phone' => $input['whatsapp_phone'],
                'whatsapp_phone' => isset($input['whatsapp_phone']) ? phone_make($input['whatsapp_phone'], country_code()) : ($input['whatsapp_phone'] ?? null),
                'telephone' => isset($input['telephone']) ? phone_make($input['telephone'], country_code()) : ($input['telephone'] ?? null),
                'email' => $input['email'] ?? null,
                'web' => $input['web'] ?? null,
                'box_no' => $input['box_no'] ?? null,
                'address' => $input['address'] ?? null,
                'twitter_link' => $input['twitter_link'] ?? null,
                'facebook_link' => $input['facebook_link'] ?? null,
                'instagram_link' => $input['instagram_link'] ?? null,
                'working_hours' => $input['working_hours'] ?? null,
                'youtube_link' => $input['youtube_link'] ?? null,
                'linked_link' => $input['linked_link'] ?? null,
                'primary_color' => isset($input['primary_color']) ?$input['primary_color'] :null,
                'secondary_color' => isset($input['secondary_color']) ?$input['secondary_color'] :null,
                'font_family' => $input['font_family'] ?? 'Poppins',
                'message_subjects' =>  isset($input['message_subjects']) ? json_encode($input['message_subjects']): null,
                'contact_cc_email' =>  ($input['contact_cc_email']) ?? null,
                'allow_email_message' =>  ($input['allow_email_message']) ?? 1,
                'allow_sms_message' =>  ($input['allow_sms_message']) ?? 0,
                'currency_code' => $input['currency_code'] ?? 'TZS',
                'country_id' => $input['country_id'] ?? 1
            ]);
            $this->saveDocuments($organization->id,$input);
            $this->updateImageUrl($organization,6, 'logo_url');
            $this->updateImageUrl($organization,21, 'favicon_url');

            /*check if color has changed*/
            if (isset($input['primary_color']) || isset($input['secondary_color']))
            {
                if($old_primary_color != $input['primary_color'] || $old_secondary_color != $input['secondary_color'])
                {
                    (new PageContainersRepository())->autoUpdateBrandColorsToAllDesignOnChange();
                }
            }

            return $organization;
        });
    }


    /**
     * @param array $input
     * @return mixed
     * Main Onboard from crm poster
     */
    public function mainOnboardFromCrmPoster(array $input)
    {
        return  DB::transaction(function() use($input) {
            /*Get request from input*/
            $organization_input = $input['organization_input'];
            $user_input = $input['user_input'];
            $check_if_organization_exist = Organization::query()->count();
            if($check_if_organization_exist == 0){
                /*Post organization from crm*/
                $this->postOrganizationFromCrm($organization_input);
                /*Post User input*/
                $user= $this->postUserFromCrm($user_input);

                /*sysdef*/
                $this->saveGeneralInformationIntoSysdef($input);

                sysdef()->autoLicensePerPackageLevel();

                /*Sync general design*/
                (new PageContainersDesignRepository())->syncGeneralDesignProductForThisProduct();
            }

            return response()->json(['message' => "SUCCESS", ]);
        });
    }


    /**
     * @param array $input
     * Save general information into sysdef
     */
    public function saveGeneralInformationIntoSysdef(array $input)
    {
        $project_base_path = $input['project_base_path'];
        $project_folder_name = $input['project_folder_name'];
        $git_branch_name = $input['git_branch_name'];

        sysdef()->updateValueByReference('GTPROJPATH',$project_base_path );
        sysdef()->updateValueByReference('GTPROJNAME',$project_folder_name );
        sysdef()->updateValueByReference('GTBRNAME',$git_branch_name );

    }

    /**
     * @param array $input
     * @return mixed
     * Update subscription details for existing customer from crm api
     */
    public function updateSubscriptionDetailsForExistingCustomerCrmApi(array $input)
    {
        return  DB::transaction(function() use($input) {
            /*Get request from input*/
            $organization = \organization();
            $organization->update([
                'licence_key' => $input['licence_key']
            ]);

            return response()->json(['message' => "SUCCESS", ]);
        });
    }

    /**
     * @param array $input
     * @return mixed
     * Upate general info from crm api
     */
    public function updateGeneralDataInfoFromCrmApi(array $input)
    {
        return  DB::transaction(function() use($input) {
            $body_input = $input['body'];
            /*Get request from input*/
            $organization = \organization();
            /*Update licence key*/
            if(isset($body_input['licence_key'])) {
                $organization->update([
                    'licence_key' => $body_input['licence_key']
                ]);
            }

            return response()->json(['message' => "SUCCESS"]);
        });
    }


    /**
     * @param array $organization_input
     * Post Organization from crm
     */
    public function postOrganizationFromCrm(array $organization_input)
    {
        $this->createMassAssign('organizations',$organization_input);
//        $this->autoSetBrandColorsPerCategory();
    }


    /**
     * @param array $user_input
     * Post User from CRM
     */
    public function postUserFromCrm(array $user_input)
    {
        $user_count = User::query()->count();
        if($user_count == 0){


            $user_id = (new UserRepository())->createMassAssignDbBuilder('users',$user_input);

            $user = User::query()->find($user_id);
            /*Start: Role - Admin*/
//        $user->attachRole(2);

            return $user;
        }
    }


    /**
     * @param array $input
     * Domain enable from rafikisite api
     */
    public function domainEnableFromRafikiSiteApi(array $input)
    {
        return  DB::transaction(function() use($input) {
            $body_input = $input['body'];
            /*Get request from input*/
            $organization = $this->findOrganization();
            $organization->update([
                'domain_enabled' => 1,
                'domain_name' => $body_input['domain_name']
            ]);

            return response()->json(['message' => "SUCCESS"]);
        });


    }


    /*Organization*/
    public function findOrganization()
    {
        return $this->query()->first();
    }




    /*Save document(s) attached on the form*/
    public function saveDocuments($organization_id, array $input)
    {
        $document_resource_repo = new DocumentResourceRepository();
        if((request()->file('organization_logo'))){
            $document_resource_repo->saveDocument($organization_id,6,'organization_logo', $input);
        }
        if((request()->file('organization_fav_icon'))){
            $document_resource_repo->saveDocument($organization_id,21,'organization_fav_icon', $input);
        }
        if((request()->file('company_profile_doc'))){
            $document_resource_repo->saveDocument($organization_id,3,'company_profile_doc', $input);
        }
        if((request()->file('company_brochure_doc'))){
            $document_resource_repo->saveDocument($organization_id,22,'company_brochure_doc', $input);
        }
    }


    /**
     * Auto set brand colors per category
     */
    public function autoSetBrandColorsPerCategory()
    {
        $organization = organization();
        $st_category_cv_ref = $organization->product_category_cv_ref;
        switch($st_category_cv_ref){
            case 'PRCLAW':
                $primary_color = '#444444';
                $secondary_color = '#ad9263';
                break;
            case 'PRCAGRI':
                $primary_color = '#34AD54';
                $secondary_color = '#FF9933';
                break;

            default:
                $primary_color = '#444444';
                $secondary_color = '#0088cc';
                break;
        }
        $organization->update([
            'primary_color' => $primary_color ?? $organization->primary_color,
            'secondary_color' => $secondary_color ?? $organization->secondary_color,
        ]);

    }
}
