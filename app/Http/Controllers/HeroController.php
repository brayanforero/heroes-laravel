<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::latest()->paginate(10);
        return view('heroes.index',[
            'heroes' => $heroes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hero = new Hero;
        $hero->fill($request->all([
            'name', 'comics', 'url', 'poster'
        ]));
        $hero->save();

        return redirect()->route('heroes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('heroes.show', [
            'hero' => $hero
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('heroes.edit', [
            'hero' => $hero
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $hero->name = $request->name;
        $hero->comics = $request->comics;
        $hero->poster = $request->poster;
        $hero->url = Str::slug($request->name);
        $hero->save();

        return redirect()->route('heroes.show', $hero);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        Hero::destroy($hero->id);
        return redirect()->route('heroes.index');
    }
}
