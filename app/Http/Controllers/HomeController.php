<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Foodallergy;
use App\Foodallergy_Profile;
use App\Ncd_Profile;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    // private function chart()
    // {
    //     $person = Auth::user();
    //     $profile = Profile::where('user_id', $person->id)->first();
    //     $bmr = $this->calculate($profile->weight, $profile->height, $profile->age, $profile->gender->id);
    //     Log::info('$profile : '.$profile);
        
    //     $ncd_profile = Ncd_Profile::where('profile_id', $profile->id)->get();
    //     $protein = 0;
    //     $carb = 0;
    //     $lipid = 0;
    //     $sodium = 0;
    //     for ($i = 0; $i < count($ncd_profile); $i++) {
    //         Log::info('$ncd_profile: '.$ncd_profile[$i]);

    //         if($ncd_profile[$i]->ncd_id = 3){
    //             $lipid = 29 /100 * $bmr;
    //         }
    //         if($ncd_profile[$i]->ncd_id = 4){
    //             $lipid = 29 /100 * $bmr;
    //         }

    //         if($ncd_profile[$i]->ncd_id = 2){
    //             $protein = 20 /100 * $bmr;
    //             $carb = 60 /100 * $bmr;
    //             $lipid= 20 /100 * $bmr;
    //         }

    //         if($ncd_profile[$i]->ncd_id = 5){
    //             $protein = 15 /100 * $bmr;
    //             $carb =  55/100 * $bmr;
    //             $lipid= 30 /100 * $bmr;
    //         }

    //         if($ncd_profile[$i]->ncd_id = 1){
    //             $protein = $profile->weight; 
    //             $sodium = 3;
    //         }
    //     }



    //     $dataPoints = array( 
    //         array("label"=>"Carbs", "y"=> 278),
    //         array("label"=>"Protein", "y"=> 278),
    //         array("label"=>"Fat", "y"=> 124)
    //     )
    //     // return ;
    // }

}
