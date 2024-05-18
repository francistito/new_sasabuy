<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 6/26/19
 * Time: 9:43 AM
 */

namespace App\Repositories\System\Traits\Sysdef;


use App\Exceptions\GeneralException;
use App\Models\Access\User;
use App\Services\Api\GeneralCrmApi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

trait AppUpdateInfoTrait
{


    /**
     *
     * Get App update information from crm
     */
    public function syncAppUpdateInformationFromACrmApi()
    {
        return DB::transaction(function () {

            $input['customer_uuid'] = organization()->uuid;
            $input['customer_name'] = organization()->name;
            $input['users_count'] = User::query()->where('username', '<>', 'admin')->where('isactive',1)->count();
            $input['stations_count'] =1;
            $nextcrm_app_url = (env('TEST_MODE',1) == 0) ? config('env.nextcrm.app_url')  : config('env.nextcrm.dev_app_url');

            $full_url = $nextcrm_app_url . DIRECTORY_SEPARATOR. 'saas_app/get_app_update_information';

            $api = new GeneralCrmApi($input);
            $response =  $api->sendJsonPost($full_url);

            $data = json_decode($response);

            if (isset($data)) {
                if ($data->message == "SUCCESS") {
                    //file posted successful
                    $app_update_info_arr = json_decode($data->app_update_info_json, true);
                    $this->saveAppUpdateInformationFromACrmApi($app_update_info_arr);
                }
            } else {
                throw new GeneralException("Failed to get app update from CRM");
            }
        });
    }

    /**
     * @param array $input
     * Get App update info from crm api
     */
    public function saveAppUpdateInformationFromACrmApi(array $input)
    {
        $organization = organization();
        $last_data_app_updated = sysdef()->data('GTUPLTDATE') ?? standard_date_format(Carbon::parse($organization->created_at)->subDay());
        /*Update system definition*/
        \sysdef()->updateValueByReference('GTPROJPATH', $input['project_base_path']);
        \sysdef()->updateValueByReference('GTPROJNAME', $input['project_folder_name']);
        \sysdef()->updateValueByReference('GTBRNAME', $input['git_branch_name']);


        if(comparable_date_format($last_data_app_updated) < comparable_date_format($input['new_app_updates_date'])){
            \sysdef()->updateValueByReference('GTNWUPDT', $input['new_app_updates_date']);
            \sysdef()->updateValueByReference('GTUPDATE', $input['git_app_update_type']);
            //TODO: For now it auto accept but in near future need to be on client discretion
            \sysdef()->updateValueByReference('GTNWUPACPT','true');
        }

        /*Update licence key*/
        if(isset($input['licence_key']))
        {
            $organization->update([
                'licence_key' => $input['licence_key']
            ]);
        }



    }


    /*Check should alert for new app update*/
    public function checkIfThereIsNewAppUpdateForAlert()
    {
        $organization = organization();
        $last_data_app_updated = sysdef()->data('GTUPLTDATE') ?? standard_date_format($organization->created_at);
        $new_app_updates_date = sysdef()->data('GTNWUPDT') ?? standard_date_format($organization->created_at);
        $accept_app_update = sysdef()->data('GTNWUPACPT');
        if(comparable_date_format($last_data_app_updated) < comparable_date_format($new_app_updates_date) && $accept_app_update == false){
            return true;
        }else{
            return false;
        }
    }

}