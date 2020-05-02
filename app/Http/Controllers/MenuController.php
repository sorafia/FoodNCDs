<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

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
        $menus = Menu::all();
        return view('foods.menuform')->with('menus', $menus);
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
