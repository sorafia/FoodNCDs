<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ncd;
use App\Profile;
use App\Foodallergy;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the blogs
        $profile = Profile::all()->sortByDesc('created_at');
		
        // load the view and pass the user
        return View('profile.index')
            ->with('profile', $profile);
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
        return view('profile.create', compact('ncd_list','foodallergy_list'));
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
        $profile = new Profile;
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
        return redirect('profile')->with('message', 'Successfully created profile!');
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
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required|string',
            'height' => 'required|string',
            'weight' => 'required|string',
        ]);
    
        // store
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
