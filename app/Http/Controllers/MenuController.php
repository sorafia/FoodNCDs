<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Auth;
use App\Profile;
use App\Foodallergy;
use App\Foodallergy_Profile;
use App\Ncd_Profile;
use Log;

class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('foods.menu');
    }

    public function display()
    {
        //เรียกเมนูใน database ทั้งหมด
        $menus = Menu::all();       
        

        //เป็นการหา id user ของแต่ละคน
        $person = Auth::user();
        $profile = Profile::where('user_id', $person->id)->first();

        //เป็นการคำนวณค่า BMR โดยเรียกมาจาก function calculate
        $bmr = $this->calculate($profile->weight, $profile->height, $profile->age, $profile->gender->id);
        Log::info('$profile : '.$profile);


        //หาว่า user มีส่วนผสมที่แพ้
        $foodallergy_profile = Foodallergy_Profile::where('profile_id', $profile->id)->get();
        Log::info('$foodallergy_profile : '.$foodallergy_profile);

        //filter foodallergy
        $foodWithOutFoodlergy= [];
        for ($i = 0; $i < count($menus); $i++) {
            Log::info('listmenu : '.$menus[$i]);

            if( ($foodallergy_profile->foodallergy_id = 1 && $menus[$i]->egg == 'not have') &&
                ($foodallergy_profile->foodallergy_id = 2 && $menus[$i]->nuts == 'not have') &&
                ($foodallergy_profile->foodallergy_id = 3 && $menus[$i]->peanuts == 'not have') &&
                ($foodallergy_profile->foodallergy_id = 4 && $menus[$i]->soy == 'not have') &&
                ($foodallergy_profile->foodallergy_id = 5 && $menus[$i]->shrimps == 'not have') &&
                ($foodallergy_profile->foodallergy_id = 6 && $menus[$i]->crab == 'not have') &&
                ($foodallergy_profile->foodallergy_id = 7 && $menus[$i]->fish == 'not have') ){
                array_push($foodWithOutFoodlergy, $menus[$i]);
            }
        }

        //เป็นการเรียกดูว่า array foodallergy มีอะไรบ้าง
        for ($i = 0; $i < count($foodWithOutFoodlergy); $i++) {
            Log::info('$foodWithOutFoodlergy : '.$foodWithOutFoodlergy[$i]);
        }


        //เรียกดูว่า user มีโรคประจำตัวอะไร

        $ncd_profile = Ncd_Profile::where('profile_id', $profile->id)->get();
        
        //คำนวณสารอาหารของแต่ละบุคคลที่มีโรคประจำตัว
        $protein = 0;
        $carb = 0;
        $lipid = 0;
        $sodium = 0;
        for ($i = 0; $i < count($ncd_profile); $i++) {
            Log::info('$ncd_profile: '.$ncd_profile[$i]);

            if($ncd_profile[$i]->ncd_id = 3){
                $lipid = 29 /100 * $bmr / 9;
            }
            if($ncd_profile[$i]->ncd_id = 4){
                $lipid = 29 /100 * $bmr / 9;
            }
            if($ncd_profile[$i]->ncd_id = 1){
                $protein = $profile->weight; 
                $sodium = 3;
            }
            if($ncd_profile[$i]->ncd_id = 2){
                $protein = 20 /100 * $bmr / 4;
                $carb = 60 /100 * $bmr / 4;
                $lipid= 20 /100 * $bmr / 9;
            }
            if($ncd_profile[$i]->ncd_id = 5){
                $protein = 15 /100 * $bmr / 4;
                $carb =  55/100 * $bmr / 4;
                $lipid= 30 /100 * $bmr / 9;
            }
            
        }

        //เก็บเมนูอาหารที่ user ทานได้เป็น array โดยปราศจากส่วนผสมที่ user แพ้ 
        $displaymenu = [];
        $sumprotein = 0.0;
        $sumcarb = 0.0;
        $sumlipid = 0.0;
        $sumsodium = 0.0;
        shuffle($foodWithOutFoodlergy);
        for ($i = 0; $i < 3; $i++) {
            $sumprotein+=$foodWithOutFoodlergy[$i]->protein;
            $sumcarb+=$foodWithOutFoodlergy[$i]->carbohydrate;
            $sumlipid+=$foodWithOutFoodlergy[$i]->lipid;
            $sumsodium+=$foodWithOutFoodlergy[$i]->sodium;
            array_push($displaymenu, $foodWithOutFoodlergy[$i]);

        }     


        //เช็ค sum ของสารอาหาร
        while($sumprotein > $protein && $sumcarb > $carb && $sumlipid > $lipid && $sumsodium > $sodium){
        $sumprotein = 0.0;
        $sumcarbohydrate = 0.0;
        $sumlipid = 0.0;
        $sumsodium = 0.0;
        $displaymenu = [];
        shuffle($foodWithOutFoodlergy);
        

        //เช็คว่ามีเมนูที่สามารถทานได้หรือไม่
        if(count($foodWithOutFoodlergy) == 0 ){
            $displaymenu = [];
        }else if(count($foodWithOutFoodlergy) < 3 ){
            for ($i = 0; $i < count($foodWithOutFoodlergy); $i++) {
                $sumprotein+=$foodWithOutFoodlergy[$i]->protein;
                $sumcarb+=$foodWithOutFoodlergy[$i]->carbohydrate;
                $sumlipid+=$foodWithOutFoodlergy[$i]->lipid;
                $sumsodium+=$foodWithOutFoodlergy[$i]->sodium;            
                array_push($displaymenu, $foodWithOutFoodlergy[$i]);
            }
        }else{

            for ($i = 0; $i < 3; $i++) {
                $sumprotein+=$foodWithOutFoodlergy[$i]->protein;
                $sumcarb+=$foodWithOutFoodlergy[$i]->carbohydrate;
                $sumlipid+=$foodWithOutFoodlergy[$i]->lipid;
                $sumsodium+=$foodWithOutFoodlergy[$i]->sodium;            
                array_push($displaymenu, $foodWithOutFoodlergy[$i]);
            }

        }       

        }

        

        Log::info('$sumprotein : '.$sumprotein);
        Log::info('$protein : '.$protein);
        Log::info('$sumcarb : '.$sumcarb);
        Log::info('$carb : '.$carb);
        Log::info('$sumlipid : '.$sumlipid);
        Log::info('$lipid : '.$lipid);
        Log::info('$sumsodium : '.$sumsodium);
        Log::info('$sodium : '.$sodium);

        for ($i = 0; $i < count($displaymenu); $i++) {
            Log::info('$displaymenu : '.$displaymenu[$i]);
        }



        
        //$calories = $this->cal($profile->exercisebehavior->id)
        //Profile::bmr($bmr);
        return view('foods.menuform')->with('menus', $displaymenu);
    }
    
    private function calculate($weight, $height, $age, $gender)
    {
        //Log::info('gender ' . $gender);
        $bmr = 0;
        if ($gender == "1") {
            $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
        }
        if ($gender == "2") {
            $bmr = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
        }
        return $bmr;
    }

    private function cal($exercisebehavior, $bmr)
    {
        $calories = 0;
        if($exercisebehavior == "1"){
            $calories = $bmr * 1.2;
        }
        if($exercisebehavior == "2"){
            $calories = $bmr * 1.375;
        }
        if($exercisebehavior == "3"){
            $calories = $bmr * 1.55;
        }
        if($exercisebehavior == "4"){
            $calories = $bmr * 1.7;
        }
        if($exercisebehavior == "5"){
            $calories = $bmr * 1.9;
        }
        return $calories;
    }

    public function nutrient()
    {
        $menus = Menu::all();
        return view('foods.detail')->with('menus', $menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();

        $menu->id = $request->input('id');
        $menu->name = $request->input('name');
        $menu->weight = $request->input('weight');
        $menu->energy = $request->input('energy');
        $menu->carbohydrate = $request->input('carbohydrate');
        $menu->protein = $request->input('protein');
        $menu->lipid = $request->input('lipid');
        $menu->sodium = $request->input('sodium');
        $menu->egg = $request->input('egg');
        $menu->nuts = $request->input('nuts');
        $menu->peanuts = $request->input('peanuts');
        $menu->soy = $request->input('soy');
        $menu->shrimps = $request->input('shrimps');
        $menu->crab = $request->input('crab');
        $menu->fish = $request->input('fish');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/food/', $filename);
            $menu->image = $filename;
        } else {
            return $request;
            $menu->image = '';
        }

        $menu->save();

        return view('foods.menu')->with('menu', $menu);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::find($id);
        return view('foods.menu_updateform')->with('menus', $menus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menus = Menu::find($id);

        $menus->id = $request->input('id');
        $menus->name = $request->input('name');
        $menus->weight = $request->input('weight');
        $menus->energy = $request->input('energy');
        $menus->carbohydrate = $request->input('carbohydrate');
        $menus->protein = $request->input('protein');
        $menus->lipid = $request->input('lipid');
        $menus->sodium = $request->input('sodium');
        $menus->egg = $request->input('egg');
        $menus->nuts = $request->input('nuts');
        $menus->peanuts = $request->input('peanuts');
        $menus->soy = $request->input('soy');
        $menus->shrimps = $request->input('shrimps');
        $menus->crab = $request->input('crab');
        $menus->fish = $request->input('fish');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/food/', $filename);
            $menus->image = $filename;
        }

        $menus->save();

        return redirect('/menupage')->with('menus', $menus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $menus = Menu::find($id);
        $menus->delete();

        return redirect('/menupage')->with('menus', $menus);
    }
}
