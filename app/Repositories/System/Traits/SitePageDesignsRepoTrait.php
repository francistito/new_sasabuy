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

trait SitePageDesignsRepoTrait
{


    /**
     * @param $slug
     * Default Page designs
     */
    public function getSitePageDesignsForSelect($slug)
    {
        $st_category = st_category();
        $package_level = package_level();
        $designs = [];
        switch($slug){
            case 'contact_us':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Form Left + Map bottom)',
                    '3' => 'Classic-2 (Map Top + Form Bottom)',
                    '4' => 'Classic-3 (Contact Top + (Map + Form Bottom))',

                ];
                $designs = $this->getAdditionalSitePageDesignsForSelect($designs,$slug);

                break;
            case 'about_us':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Right Sidebar with MVV)',
                    '3' => 'Classic-2 (Right Sidebar with MVV) + With Image Left',
                    '4' => 'Classic-3 (Right Sidebar with MVV) + With Image Right',
                    '5' => 'Classic-4 (Right Sidebar with MVV) + With Image Between',
                    '6' => 'Classic-5 (Right Sidebar with MVV) + With Image Right Wrapped',
                ];

                break;

            case 'product':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Right Sidebar)',
                    '3' => 'Classic-2 (Left Sidebar)',
                ];

                break;

            case 'blogs':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Right Sidebar)',
                    '3' => 'Classic-2 (Left Sidebar)',
                    '4' => 'Classic-3 (Single Post Row + Right Sidebar)',
                ];

                break;

            case 'teams':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Card + Text-Centered)',
                    '3' => 'Classic-2 (Card + Text-Centered + Less Details)',
                    '4' => 'Classic-3 (Card + Text-Left)',
                    '5' => 'Classic-4 (Card + Pagination)',
                    '6' => 'Classic-5 (Text Left)',

                ];

                break;

            case 'service':
                $designs = [
                    '1' => 'Default-Icon',
                    '2' => 'Classic-1 (Icon + Text Left)',
                    '3' => 'Classic-2 (Icon + Text Centered)',
                    '4' => 'Classic-3 (Card + Icon + Text Centered)',
                    '5' => 'Default-Image',
                    '6' => 'Classic 4 (Image Fill + Text Left)',
                    '7' => 'Classic 5 (Image Fill + Text Centered)',
                    '8' => 'Classic 6 (Image Curved + Text Centered)',
                    '9' => 'Classic 7 (Image + Text Centered + No Border)',
                    '10' => 'Classic 8 (Image + Text Centered + Less Details)',
                    '11' => 'Classic 9 (Image + Text Left)',
                ];

                break;

            case 'projects':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Justified Tab)',
                    '3' => 'Classic-2 (Justified Tab + Image (TOH))',
                    '4' => 'Classic-3 (No Tab + Image (TOH))',
                    '5' => 'Classic-4 (Tab Centered)',
                    '6' => 'Classic-5 (Tab Centered + Image (TOH))',
                ];
                break;
            default:
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1',
                ];
                break;

        }

        return $designs;

    }


    public function getAdditionalSitePageDesignsForSelect($base_designs,$slug)
    {
        $st_category = st_category();
        $st_category_lower = strtolower($st_category);
        $package_level = package_level();

        $arr_count = count($base_designs);
        switch($slug){
            case 'contact_us':

                switch($st_category_lower){
                    case 'law':


                        break;
                }



                break;



        }

        return $base_designs;

    }


    /**
     * @return array
     */
    public function getSitePageDesignForSinglePage($slug)
    {
        switch ($slug) {
            case 'blogs':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Left Sidebar)',
                    '3' => 'Classic-2 (Right Sidebar (Category Top))',
                ];
                break;
            case 'projects':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Left Sidebar )',
                    '3' => 'Classic-2 (Right Sidebar + Recent Bottom)',

                ];
                break;
            case 'service':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Left Sidebar)',
                    '3' => 'Classic-2 (Right Sidebar + With Image)',
                    '4' => 'Classic-3 (Right Sidebar + With Icon)',
                ];
                break;
            case 'teams':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Right Sidebar )',
                ];
                break;
            case 'product':
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1 (Right Sidebar )',
                ];
                break;



            default:
                $designs = [
                    '1' => 'Default',
                    '2' => 'Classic-1',
                ];
                break;


        }

        return $designs;
    }

}