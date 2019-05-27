<?php
namespace App\Helpers;
use App\CmsSetting;
use App\HomeSlider;
use App\Menu;
use App\PopularDestination;
use App\UserLog;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use App\Language;
use App\LanguageTranslation;


    class Helper
    {

         public static function slider() {
             $sliders = HomeSlider::where('status','1')
                 ->get();
             return $sliders;
         }

         public static function leftMenu() {
             return $leftMenu = Menu::where('position','Left')->where('status',1)->get();

         }

        public static function rightMenu() {
            return $rightMenu = Menu::where('position','Right')->where('status',1)->get();
        }





    }


?>
