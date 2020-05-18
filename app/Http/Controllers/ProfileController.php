<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ncd;
use App\Profile;
use App\Foodallergy;
use Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //เป็นการหา id user ของแต่ละคน
        $person = Auth::user();
        $profile = Profile::where('user_id', $person->id)->first();
          
        
        Log::info('$profile : '.$profile);
        
        //คำนวณค่า BMR
        $bmr = 0;
        if ($profile->gender_id == "1") {
            $bmr = 66 + (13.7 * $profile->weight) + (5 * $profile->height) - (6.8 * $profile->age);
        }
        if ($profile->gender_id == "2") {
            $bmr = 665 + (9.6 * $profile->weight) + (1.8 * $profile->height) - (4.7 * $profile->age);
        }

        //คำนวณค่า calories จาก function cal
        $callories = $this->cal($profile->exercisebehavior->id,$bmr);
        Log::info('$callories : '.$callories);

        //เก็บตัวแปร bmr เพื่อแสดงค่า calories
        $profile->setAttribute('bmr', $callories);


        Log::info('$profile : '.$profile);
        Log::info('$profile->bmr : '.$profile->bmr);
		
        
        // load the view and pass the user
        return View('profile.index')
            ->with('profile', $profile);
            
    }

    public function cal($exercisebehavior, $bmr)
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
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ncd_list = Ncd::pluck('name', 'id');
        $foodallergy_list = Foodallergy::pluck('name', 'id');
        $bmr = Profile::pluck('weight', 'height', 'age', 'gender_id', 'exercisebehavior_id');
        return view('profile.create', compact('ncd_list','foodallergy_list','bmr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required|string',
            'height' => 'required|string',
            'weight' => 'required|string',
        ]);
    
        // store
        $profile = auth()->user()->Profile()->create($request->all());
        // $profile->firstname = $request->input('firstname');
        // $profile->lastname = $request->input('lastname');
        // $profile->age = $request->input('age');
        // $profile->height = $request->input('height');
        // $profile->weight = $request->input('weight');
        $profile->gender_id = $request->input('gender_id');
        $profile->exercisebehavior_id = $request->input('exercisebehavior_id');
        $profile->save();
        $profile->ncd_id = $request->input('ncd_list');
        if(!empty($profile->ncd_id))
            $profile->ncds()->sync($profile->ncd_id);
        $profile->foodallergy_id = $request->input('foodallergy_list');
        if(!empty($profile->foodallergy_id))
            $profile->foodallergies()->sync($profile->foodallergy_id);
        // $profile->user_id = Auth::user()->id;
        $bmr = 0;
        if ($profile->gender_id == "1") {
            $bmr = 66 + (13.7 * $request->weight) + (5 * $request->height) - (6.8 * $request->age);
        }
        if ($profile->gender_id == "2") {
            $bmr = 665 + (9.6 * $request->weight) + (1.8 * $request->height) - (4.7 * $request->age);
        }

        // redirect
        return redirect('profile')->with('message', 'Successfully created profile!')
        ->with('bmr', $bmr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the profile
        $profile = Profile::findOrFail($id);
 
        // show the view and pass the profile to it
        return View('profile.show')
            ->with('profile', $profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the profile
        $profile = Profile::findOrFail($id);
 
        // show the edit form and pass the blog
        return View('profile.edit')
            ->with('profile', $profile);
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
        // $this->validate($request, [
        //     'firstname' => 'required|string',
        //     'lastname' => 'required|string',
        //     'age' => 'required|string',
        //     'height' => 'required|string',
        //     'weight' => 'required|string',
        // ]);
    
        // store
        //$profile->user_id = Auth::user()->id;
        $profile = Profile::findOrFail($id);
        $profile->firstname = $request->input('firstname');
        $profile->lastname = $request->input('lastname');
        $profile->age = $request->input('age');
        $profile->height = $request->input('height');
        $profile->weight = $request->input('weight');
        $profile->gender_id = $request->input('gender_id');
        $profile->exercisebehavior_id = $request->input('exercisebehavior_id');
        $profile->save();
        $profile->ncd_id = $request->input('ncd_list');
        if(!empty($profile->ncd_id))
            $profile->ncds()->sync($profile->ncd_id);
        $profile->foodallergy_id = $request->input('foodallergy_list');
        if(!empty($profile->foodallergy_id))
            $profile->foodallergies()->sync($profile->foodallergy_id);

        // redirect
        return redirect('profile')->with('message', 'Successfully updated profile!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $profile = Profile::findOrFail($id);
        $profile->delete();
 
		// redirect
		return redirect('profile')->with('message', 'Successfully deleted the profile!');
    }
}
