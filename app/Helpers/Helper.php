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


    }


?>
