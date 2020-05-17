<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;


use App\Marche;
use Illuminate\Http\Request;

class MarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('home.marche-create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marches = new Marche();

           $marches->nom = $request->input('nom');
           $marches->user_id = auth()->user()->id;

           $marches->ville = $request->input('ville');
           $marches->description = $request->input('description');
           $marches->save(); //persist the data
           return redirect()->route('home')->with('success','Marché créer avec success');


    }

    /**
     * Display the specified resource.
     * @param  \App\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function show(Marche $marche, $id)
    {
        $marche = Marche::find($id);

        return view('home.marche-show', compact('marche'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @param  \App\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function edit(Marche $marche, $id)
    {
        $marche = Marche::find($id);
        return view('home.marche-edit', compact('marche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marche $marche, $id)
    {

        $marche = Marche::find($id);

        $marche->nom = $request->input('nom');
        $marche->user_id = auth()->user()->id;

        $marche->ville = $request->input('ville');
        $marche->description = $request->input('description');
        $marche->save(); //persist the data

        return redirect()->route('home')->with('success','Marché mise à jour!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marche  $marche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marche $marche, $id)
    {
        $marche = Marche::findOrFail($id);
        $marche->delete();

        return redirect('home/')->with('info','Marché supprimer avec success!');
    }
}
