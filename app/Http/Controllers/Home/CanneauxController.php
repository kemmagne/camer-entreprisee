<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;


use App\Canneaux;
use Illuminate\Http\Request;

class CanneauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canneauxes = Canneaux::where('user_id', auth()->user()->id)->get();


        return view('home.canneaux', compact('canneauxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.canneaux-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $canneauxes = new Canneaux();

        $canneauxes->nom = $request->input('nom');
        $canneauxes->user_id = auth()->user()->id;

        $canneauxes->description = $request->input('description');
        $canneauxes->save(); //persist the data

        return redirect()->route('canneaux.home')->with('success','Cannal créer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Canneaux  $canneaux
     * @return \Illuminate\Http\Response
     */
    public function show(Canneaux $canneaux, $id)
    {
        $canneauxe = Canneaux::find($id);

        return view('home.canneaux-show', compact('canneauxe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Canneaux  $canneaux
     * @return \Illuminate\Http\Response
     */
    public function edit(Canneaux $canneaux, $id)
    {
        $canneauxe = Canneaux::find($id);
        return view('home.canneaux-edit', compact('canneauxe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Canneaux  $canneaux
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canneaux $canneaux, $id)
    {
        $canneauxe = Canneaux::find($id);

        $canneauxe->nom = $request->input('nom');
        $canneauxe->user_id = auth()->user()->id;

        $canneauxe->description = $request->input('description');
        $canneauxe->save();

        return redirect()->route('canneaux.home')->with('success','Cannal mise à jour!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Canneaux  $canneaux
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canneaux $canneaux, $id)
    {
        $canneaux = Canneaux::findOrFail($id);
        $canneaux->delete();

        return redirect()->route('canneaux.home')->with('info','Cannal supprimer avec success!');
    }
}
